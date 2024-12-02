<?php

namespace App\Controller;

use App\Entity\OrderDetail;
use App\Entity\Orders;
use App\Form\OrdersType;
use App\Repository\OrderDetailRepository;
use App\Repository\OrdersRepository;
use App\Repository\ProductRepository;
use App\Repository\ShopcartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Repository\SettingRepository;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use \Swift_Mailer;

/**
 * @Route("/orders")
 */
class OrdersController extends AbstractController
{
    private $mailer;

    public function __construct(Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @Route("/", name="orders_index", methods={"GET"})
     */
    public function index(Request $request, SettingRepository $settingRepository, OrdersRepository $ordersRepository): Response
    {
        $user = $this->getUser(); // Calling login user data
        $orders = [];
        if($user){
            // Merge orders
            // Fetch orders with the session ID
            $guestOrders = json_decode($request->cookies->get('guest_orders'), true);
            $entityManager = $this->getDoctrine()->getManager();
            foreach ($guestOrders as $order) {
                if(key_exists('id',(array) $order)){
                    $ord = $ordersRepository->find($order['id']);
                    $ord->setUser($user); // Associate the order with the logged-in user
                    $entityManager->persist($ord);
                }
                
            }
            $entityManager->flush();

            $orders = $ordersRepository->findBy(['user' => $user], ['created_at'=> 'DESC']);
        }else{
            
            $guestOrders = json_decode($request->cookies->get('guest_orders'),true);
            //dd($cookiesOrders);
            foreach ($guestOrders as $co) {
                if(key_exists('id', (array) $co))
                $orders[] = $ordersRepository->find($co['id']); 
            }
        }
        
        $setting = $settingRepository->findAll();
        return $this->render('orders/index.html.twig', [
            'orders' => $orders,
            'setting' => $setting
        ]);
    }

    /**
     * @Route("/new", name="orders_new", methods={"GET","POST"})
     */

public function new(Request $request, UrlGeneratorInterface $urlGenerator, OrderDetailRepository $orderDetailRepository, ShopcartRepository $shopcartRepository, ProductRepository $productRepository, \Swift_Mailer $mailer): Response
{
    $orders = new Orders();
    $form = $this->createForm(OrdersType::class, $orders);
    $form->handleRequest($request);

    $user = $this->getUser();
    $total = 0;
    $cartItems = [];

    if ($user) {
        // Handle for authenticated users
        $shopcart = $user->getShopcarts();
        foreach ($shopcart as $s) {
            $total += $s->getQuantity() * $s->getProduct()->getPrice();
            $cartItems[] = $s;
        }
    } else {
        // Handle for guest users
        $cookieName = 'guest_cart';
        $cart = json_decode($request->cookies->get($cookieName, '[]'), true);
        foreach ($cart as $item) {
            $product = $productRepository->find($item['productId']);
            if ($product) {
                $total += $item['quantity'] * $product->getPrice();
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $item['quantity']
                ];
            }
        }
    }

    $submittedToken = $request->get('token');
    if ($this->isCsrfTokenValid('form-order', $submittedToken)) {
        if ($form->isSubmitted()) {
            $entityManager = $this->getDoctrine()->getManager();
            $orders->setAmount($total);
            $orders->setStatus('New');
            $orders->setCreatedAt(new \DateTimeImmutable());

            if ($user) {
                $orders->setUser($user);
                $entityManager->persist($orders);
                $entityManager->flush();
                
                foreach ($cartItems as $item) {
                    $orderDetail = new OrderDetail();
                    $orderDetail->setOrderParent($orders);
                    $orderDetail->setUser($user);
                    $orderDetail->setProduct($item->getProduct());
                    $orderDetail->setPrice($item->getProduct()->getPrice());
                    $orderDetail->setQuantity($item->getQuantity());
                    $orderDetail->setAmount($item->getQuantity() * $item->getProduct()->getPrice());
                    $orderDetail->setName($item->getProduct()->getTitle());
                    $orderDetail->setStatus("Ordered");

                    $entityManager->persist($orderDetail);
                    $entityManager->flush();
                }

                $query = $entityManager->createQuery('DELETE FROM App\Entity\Shopcart s WHERE s.user = :user')
                    ->setParameter('user', $user->getId());
                $query->execute();
            } else {
                $user = new User();
                $data = $request->request->get('orders');
                // dd($request->request->get('orders'));
                $user->setEmail($data['address']);
                $user->setName($data['name']);
                $user->setPhone($data['phone']);
                // Handle for guest users (Persist orders differently if needed)
                $entityManager->persist($orders);
                $entityManager->flush();
                $orderId = $orders->getId();

                foreach ($cartItems as $item) {
                    $orderDetail = new OrderDetail();
                    $orderDetail->setOrderParent($orders);
                    $orderDetail->setProduct($item['product']);
                    $orderDetail->setPrice($item['product']->getPrice());
                    $orderDetail->setQuantity($item['quantity']);
                    $orderDetail->setAmount($item['quantity'] * $item['product']->getPrice());
                    $orderDetail->setName($item['product']->getTitle());
                    $orderDetail->setStatus("Ordered");

                    $entityManager->persist($orderDetail);
                    $entityManager->flush();
                }

                // Clear guest cart
                $response = new Response();
                $response->headers->setCookie(new Cookie('guest_cart', json_encode([])));
                $guestOrders = json_decode($request->cookies->get('guest_orders', '[]'), true);
                // Add the new order to the guest orders list
                $guestOrders[] = [
                    'id' => $orders->getId(),
                    'amount' => $orders->getAmount(),
                    'createdAt' => $orders->getCreatedAt()->format('Y-m-d H:i:s'),
                ];
                // Store the updated guest orders in the cookie
                $cookie = new Cookie('guest_orders', json_encode($guestOrders), time() + (60 * 60 * 24 * 30)); // 30 days expiration
                $response->headers->setCookie($cookie);
                $response->send();
            }

            $this->addFlash('success', 'Votre commande a été effectuée!');

            // Send email
            $orderDetail = $orderDetailRepository->findBy(['orderParent' => $orders]);
            dd($user);
            try {
                $message = (new \Swift_Message('Nouvelle Commande Muzeum'))
                    ->setFrom($this->getParameter('app.address'))
                    ->setTo($user->getEmail())
                    ->setBody(
                        $this->renderView(
                            'email/new.html.twig', [
                                'orderDetail' => $orderDetail,
                                'order' => $orders,
                            ]
                        ),
                        'text/html'
                    );
                $mailer->send($message);
                $this->addFlash('success', 'Votre facture a été envoyé dans votre boîte mail!');
            } catch (\Swift_TransportException $e) {
                $this->addFlash('error', $e->getMessage());
            }

            // Redirect To Payment
            $successUrl = $urlGenerator->generate('orders_confirm', ['id' => $orderId], UrlGeneratorInterface::ABSOLUTE_URL);
            $failedUrl = $urlGenerator->generate('orders_show', ['id' => $orderId], UrlGeneratorInterface::ABSOLUTE_URL);
            //$successUrl = "https://my-muzeum.com/product/26";
            //$failedUrl = "https://my-muzeum.com/product/26";
            $data = [
                'shopName' => "MUZEUM",
                'area' => "XAF",
                'amount' => $orders->getAmount(),
                'email' => $user->getEmail(),
                'orderId' => $orders->getId(),
                'description' => 'Paiement de la commande #' . $orders->getId() . ' sur Muzeum📦',
                'apiKey' => 'RyR49yPWLC57ccf1f4FmBtq2m_zB6V_oiFH_pCnzFz0',
                'currency' => "XAF",
                'successUrl' => $successUrl,
                'failureUrl' => $failedUrl,
                'customer' => [
                    'email' => $user->getEmail(),
                    "phone_number" => $user->getPhone(),
                    "name" => $user->getName()
                ],
            ];
            $client = HttpClient::create();
            $response = $client->request('POST', 'https://checkout.soleaspay.com?mode=api', ['body' => $data]);
            $orders->setPaymentLink($response->toArray()['link']);
            $orders->setIsPaid(false);
            $entityManager->persist($orders);
            $entityManager->flush();

            return $this->redirect($response->toArray()['link']);
        }
    }

    return $this->render('orders/new.html.twig', [
        'order' => $orders,
        'total' => $total,
        'form' => $form->createView(),
        'shopcart' => $cartItems
    ]);
}

     /**
     * @Route("/confirm/{id}", name="orders_confirm", methods={"GET"})
     */
    public function confirm(Request $request, Orders $order, OrdersRepository $ordersRepository, \Swift_Mailer $mailer): Response
    {
        $user = $this->getUser(); // Calling login user data
        $orderid = $order->getId();
        $order = $ordersRepository->find($order);
        $order->setIsPaid(true);
        $data = json_decode($request->query->get('soleaspay_data'));
        $order->setPaymentId($data->payId);
        $order->setStatus('Completed');
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($order);
        $entityManager->flush();
        $details = $order->getOrderDetails();
        // Send email
        try {
            $message = (new \Swift_Message('Commande Muzeum Payée!'))
                ->setFrom($this->getParameter('app.address'))
                ->setTo($user?$user->getEmail():$order->getAddress())
                ->setBody(
                    $this->renderView(
                        'email/confirmation.html.twig', [
                            'orderDetail' => $details,
                            'order' => $order,
                        ]
                    ),
                    'text/html'
                );
            // Attach the digital product files, if any
            // foreach ($details as $detail) {
            //     $product = $detail->getProduct();
            //     if ($product->getType() == 'DIGITAL') {
            //         $fileName = $product->getFile();
            //         $filePath = $this->getParameter('files_directory') . '/' . $fileName;

            //         // Check if the file exists
            //         if (file_exists($filePath) && $fileName) {
            //             // Determine the MIME type of the file
            //             $mimeType = mime_content_type($filePath);

            //             // Attach the file to the email
            //             $message->attach(
            //                 \Swift_Attachment::fromPath($filePath)
            //                     ->setFilename($product->getSlug() . '.' . pathinfo($fileName, PATHINFO_EXTENSION)) // Custom filename
            //                     ->setContentType($mimeType) // Set the file's MIME type
            //             );
            //         } 
            //     }
            // }
        
        // Send the email with the attachment(s)
        
        $this->mailer->send($message);  
        //$mailer->send($message);
        } catch (\Swift_TransportException $e) {
            $this->addFlash('error', $e->getMessage());
        }
        $this->addFlash('success', 'Votre paiement a été éffectué avec succès !');
        
        return $this->redirectToRoute('orders_show', ['id'=>$orderid]);
    }


    /**
     * @Route("/{id}", name="orders_show", methods={"GET"})
     */
    public function show(SettingRepository $settingRepository, Orders $order, OrderDetailRepository $orderDetailRepository): Response
    {
        $user = $this->getUser(); // Calling login user data
        $setting = $settingRepository->findAll();
        
        $orderdetail = $orderDetailRepository->findBy(
            ['orderParent' => $order]
        );
        return $this->render('orders/show.html.twig', [
            'order' => $order,
            'orderdetail' => $orderdetail,
            'setting' => $setting
        ]);
    }

    /**
     * @Route("/{id}/edit", name="orders_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Orders $order): Response
    {
        $form = $this->createForm(OrdersType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('orders_index');
        }

        return $this->render('orders/edit.html.twig', [
            'order' => $order,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="orders_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Orders $order): Response
    {
        if ($this->isCsrfTokenValid('delete'.$order->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($order);
            $entityManager->flush();
        }

        return $this->redirectToRoute('orders_index');
    }

    
}
