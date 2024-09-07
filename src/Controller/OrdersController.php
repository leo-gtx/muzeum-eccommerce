<?php

namespace App\Controller;

use App\Entity\OrderDetail;
use App\Entity\Orders;
use App\Form\OrdersType;
use App\Repository\OrderDetailRepository;
use App\Repository\OrdersRepository;
use App\Repository\ShopcartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

/**
 * @Route("/orders")
 */
class OrdersController extends AbstractController
{
    /**
     * @Route("/", name="orders_index", methods={"GET"})
     */
    public function index(OrdersRepository $ordersRepository): Response
    {
        $user = $this->getUser(); // Calling login user data
        $userid = $user->getid();
        return $this->render('orders/index.html.twig', [
            'orders' => $ordersRepository->findBy(['userid' => $userid]),
        ]);
    }

    /**
     * @Route("/new", name="orders_new", methods={"GET","POST"})
     */
    public function new(Request $request,OrderDetailRepository $orderDetailRepository, ShopcartRepository $shopcartRepository, \Swift_Mailer $mailer): Response
    {
        $orders = new Orders();
        $form = $this->createForm(OrdersType::class, $orders);
        $form->handleRequest($request);

        $user = $this->getUser(); // Calling login user data
        $userid = $user->getid();
        $total = $shopcartRepository->getUserShopCartTotal($userid); // Get total amount of user shopcart
        //Get shopcart items
        $em = $this->getDoctrine()->getManager();

        $sql = "SELECT p.title, p.price , s.*

                FROM shopcart s , product p
                
                WHERE s.userid = :userid AND p.id = s.productid ";

        $statement = $em->getConnection()->prepare($sql);
        $statement->bindValue(':userid', $user->getid());
        $statement->execute();
        $shopcart = $statement->fetchAll();

        $submittedToken = $request->get('token'); // get csrf token information
        if($this->isCsrfTokenValid('form-order', $submittedToken)){
            if ($form->isSubmitted()) {
                // Kredi kartı bilgilerini ilgili banka servisine gönder
                // Onay gelirse kaydetmeye devam et yoksa order sayfasına hata gönder
                $entityManager = $this->getDoctrine()->getManager();
                $orders->setUserid($userid);
                $orders->setAmount($total);
                $orders->setCreatedAt(new \DateTime('now'));
                $orders->setStatus('New');
                $entityManager->persist($orders);
                $entityManager->flush();

                $orderid = $orders->getId(); // Get last insert orders data id

                $shopcart = $shopcartRepository->getUserShopCart($userid);

                foreach ($shopcart as $item) {
                    $orderdetail = new OrderDetail();
                    // Filling OrderDetails data from shopcart
                    $orderdetail->setOrderid($orderid);
                    $orderdetail->setUserid($user->getid()); // login user id
                    $orderdetail->setProductid($item["productid"]);
                    $orderdetail->setPrice($item["price"]);
                    $orderdetail->setQuantity($item["quantity"]);
                    $orderdetail->setAmount($item["total"]);
                    $orderdetail->setName($item["title"]);
                    $orderdetail->setStatus("Ordered");

                    $entityManager->persist($orderdetail);
                    $entityManager->flush();
                }
                // Delete User Shopcart Products
                $entityManager = $this->getDoctrine()->getManager();
                $query = $entityManager->createQuery('
                DELETE FROM App\Entity\Shopcart s WHERE s.userid=:userid
                ')
                    ->setParameter('userid', $userid);
                $query->execute();
                $this->addFlash('success', 'Votre commande à été effectué!');

                //Send an email notification
                $orderdetail = $orderDetailRepository->findBy(
                    ['orderid' => $orderid]
                );
                try {
                    $message = (new \Swift_Message('Museum Commande'))
                    // On attribue l'expéditeur
                    ->setFrom($this->getParameter('app.address'))
                    // On attribue le destinataire
                    ->setTo($user->getEmail())
                    // On crée le texte avec la vue
                    ->setBody(
                        $this->renderView(
                            'email/confirmation.html.twig', [
                                'orderDetail' => $orderdetail,
                                'order' => $orders,

                            ]
                        ),
                        'text/html'
                    );
                    $mailer->send($message);
                    //$message->setTo('leonel@ndlpixel.com');
                    //$mailer->send($message);
                } catch (Swift_TransportException $e) {
                    echo $e->getMessage();
                }
                // Redirect To Payment
                $orderId = $orders->getId();
                $data = [
                    'shopName'      => "MUZEUM",
                    'area'          => "XAF",
                    'amount'        => $orders->getAmount(),
                    'email'         => $user->getEmail(),
                    'orderId'     => $orderId,
                    'description' => 'Paiement de la commande #'.$orderId.' sur Muzeum📦',
                    'apiKey'      => 'RyR49yPWLC57ccf1f4FmBtq2m_zB6V_oiFH_pCnzFz0',
                    'currency'      => "XAF",
                    'successUrl'  =>  '',
                    'failureUrl'   => '',
                    'customer'      => [
                        'email'        => $user->getEmail(),
                        "phone_number" => $user->getPhone(),
                        "name"         => $user->getName()
                    ],
                ];
                $client = HttpClient::create();
                $response = $client->request(
                    'POST',
                    'https://checkout.soleaspay.com?mode=api',
                    [
                        'body' => $data
                    ]
                    
                );
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
            'shopcart'=>$shopcart
        ]);
    }

    /**
     * @Route("/{id}", name="orders_show", methods={"GET"})
     */
    public function show(Orders $order, OrderDetailRepository $orderDetailRepository): Response
    {
        $user = $this->getUser(); // Calling login user data
        $userid = $user->getid();
        $orderid = $order->getid();
        
        $orderdetail = $orderDetailRepository->findBy(
            ['orderid' => $orderid]
        );
        return $this->render('orders/show.html.twig', [
            'order' => $order,
            'orderdetail' => $orderdetail,
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
