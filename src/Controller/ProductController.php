<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\Product1Type;
use App\Entity\OrderDetail;
use App\Entity\Orders;
use App\Repository\ProductRepository;
use App\Repository\EventRepository;
use App\Repository\OrdersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * @Route("/user/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="user_product_index", methods={"GET"})
     */
    public function index(ProductRepository $productRepository): Response
    {
        $user = $this->getUser(); // Get Login User data
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findBy(['user'=>$user->getId()]),
        ]);
    }

    /**
     * @Route("/new", name="user_product_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(Product1Type::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser(); // Get Login User data
            // **************** file upload ****************
            /** @var file $file */
            $file = $form['image']->getData();
            if($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try{
                    $file->move(
                        $this->getParameter('images_directory'), // in Servis.yaml defined folder for
                        $fileName
                    );
                } catch (FileException $e){
                    // ... handle exception f something happens during file upload
                }
                $product->setImage($fileName);
            }
            unset($file);
            // **************** file upload ****************
            // **************** downloadable file upload ****************
            /** @var file $file */
            $file = $form['file']->getData();
            if($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try{
                    $file->move(
                        $this->getParameter('files_directory'), // in Servis.yaml defined folder for
                        $fileName
                    );
                } catch (FileException $e){
                    // ... handle exception f something happens during file upload
                }
                $product->setFile($fileName);
            }
            unset($file);
            // **************** file upload ****************
            $product->setUser($user);
            $product->setStatus("New");
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('user_product_index');
        }

        return $this->render('product/new.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_product_show", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        
        return $this->render('product/show.html.twig', [
            'product' => $product
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_product_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Product $product): Response
    {
        $form = $this->createForm(Product1Type::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var file $file*/
            $file = $form['image']->getData();
            if($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try{
                    $file->move(
                        $this->getParameter('images_directory'), // in servis.yaml defined folder for upload images
                        $fileName
                    );
                } catch (FileException $e){
                    // ... handle exception f something happens during file upload
                    throw new Exception($e->getMessage(), 1);
                }
                $product->setImage($fileName); // Related upload file name with Product table image field
            }
            unset($file);
            // **************** downloadable file upload ****************
            /** @var file $file */
            $file = $form['file']->getData();
            if($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try{
                    $file->move(
                        $this->getParameter('files_directory'), // in Servis.yaml defined folder for
                        $fileName
                    );
                } catch (FileException $e){
                    // ... handle exception f something happens during file upload
                    throw new Exception($e->getMessage(), 1);
                    
                }
                $product->setFile($fileName);
            }
            unset($file);
            // **************** file upload ****************
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('user_product_index');
        }

        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @return string
     */

    private function generateUniqueFileName(){
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

    /**
     * @Route("/{id}", name="user_product_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Product $product): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            if(count($product->getImages()) > 0){
                $this->addFlash('warning', 'Echec lors de la suppression de ce produit. Supprimez d\'abord les images de ce produits!');
            }else{
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($product);
                $entityManager->flush();
            }
            
        }

        return $this->redirectToRoute('user_product_index');
    }

    /**
     * @Route("/download/{id}", name="product_download", methods={"GET"})
     */
    public function downloadFile(Request $request, Product $product, OrdersRepository $ordersRepository): Response
    {
        // Check if the user is allowed to download the file
        $user = $this->getUser();
        $cookieName = 'guest_orders';
        
        if($user) {
            // Check if the user has paid for this product
            $orderDetails = $this->getDoctrine()
                ->getRepository(OrderDetail::class)
                ->findBy([
                    'product' => $product,
                    'user' => $user,
                ]);
            foreach ($orderDetails as $orderDetail) {
                if ($orderDetail) {
                    $order = $this->getDoctrine()
                        ->getRepository(Orders::class)
                        ->find($orderDetail->getOrderParent()->getId());
                    
                    if ($order && $order->getIsPaid()) {
                        try {
                            // User has paid for the product, allow download
                            $fileName = $product->getFile();
                            // Define the path to the file (stored outside public directory)
                            $filePath = $this->getParameter('files_directory') . '/' . $fileName;
            
                            if (!file_exists($filePath) && !$fileName) {
                                throw new NotFoundHttpException('Fichier introuvable.');
                            }

                            
            
                            // Stream the file to avoid loading large files into memory
                            $response = new StreamedResponse(function() use ($filePath) {
                                readfile($filePath);
                            });
                            $mimeType = mime_content_type($filePath);
                            
                            // Set headers to download the file with a custom name
                            $disposition = $response->headers->makeDisposition(
                                ResponseHeaderBag::DISPOSITION_ATTACHMENT,
                                $product->getSlug(). '.' . pathinfo($fileName, PATHINFO_EXTENSION) // Custom filename
                            );
                            // Set headers for file download (you can modify content-type for other file types)
                            $response->headers->set('Content-Type', $mimeType);
                            // $response->headers->set('Content-Type', 'application/octet-stream');
                            $response->headers->set('Content-Disposition', $disposition);
                            $response->headers->set('Content-Length', filesize($filePath));
            
                            return $response;
                        } catch (\Exception $e) {
                            return new Response("An error occurred: " . $e->getMessage(), 500);
                        }
                        
                    }
                }
            }
        }else{
            $guestOrders = json_decode($request->cookies->get($cookieName),true);
            //dd($cookiesOrders);
            $order = null;
            foreach ($guestOrders as $co) {
                if(key_exists('id', (array) $co))
                $order = $ordersRepository->find($co['id']);
                if($order && $order->getIsPaid()) {
                    foreach ($order->getOrderDetails() as $detail) {
                        if($detail->getProduct()->getId() == $product->getId()){
                            try {
                                // User has paid for the product, allow download
                                $fileName = $product->getFile();
                                // Define the path to the file (stored outside public directory)
                                $filePath = $this->getParameter('files_directory') . '/' . $fileName;
                
                                if (!file_exists($filePath) && !$fileName) {
                                    throw new NotFoundHttpException('Fichier introuvable.');
                                }
    
                                
                
                                // Stream the file to avoid loading large files into memory
                                $response = new StreamedResponse(function() use ($filePath) {
                                    readfile($filePath);
                                });
                                $mimeType = mime_content_type($filePath);
                                
                                // Set headers to download the file with a custom name
                                $disposition = $response->headers->makeDisposition(
                                    ResponseHeaderBag::DISPOSITION_ATTACHMENT,
                                    $product->getSlug(). '.' . pathinfo($fileName, PATHINFO_EXTENSION)  // Custom filename
                                );
                                // Set headers for file download (you can modify content-type for other file types)
                                $response->headers->set('Content-Type', $mimeType);
                                // $response->headers->set('Content-Type', 'application/octet-stream');
                                $response->headers->set('Content-Disposition', $disposition);
                                $response->headers->set('Content-Length', filesize($filePath));
                
                                return $response;
                            } catch (\Exception $e) {
                                return new Response("An error occurred: " . $e->getMessage(), 500);
                            }
                        }
                    }
                }
            }
        }

        // If the user hasn't paid or order doesn't exist, deny access
        return $this->redirectToRoute('app_login');
    }

}
