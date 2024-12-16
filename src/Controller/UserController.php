<?php

namespace App\Controller;

use App\Entity\Admin\Comment;
use App\Entity\Product;
use App\Entity\User;
use App\Form\Admin\CommentType;
use App\Form\UserType;
use App\Repository\Admin\CommentRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use App\Repository\SettingRepository;
use App\Repository\OrdersRepository;
use App\Repository\OrderDetailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{

    /**
     * @Route("/products", name="user_products", methods={"GET"})
     */
    public function products(ProductRepository $productRepository): Response
    {
        $user = $this->getUser();
        return $this->render('/user/product.html.twig', [
            'products' => $productRepository->findBy(['user'=>$user]),
        ]);
    }

    /**
     * @Route("/orders", name="user_orders", methods={"GET"})
     */
    public function orders(SettingRepository $settingRepository, OrdersRepository $ordersRepository): Response
    {
        $orders = $ordersRepository->findBy(['user' => $this->getUser()],['createdAt' => 'DESC', 'updatedAt' => 'DESC']);
        $setting = $settingRepository->findAll();
        return $this->render('/user/orders.html.twig', [
            'orders' => $orders,
            'setting' => $setting
        ]);
    }


    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            // **************** file upload ****************
            /** @var file $file */
            $file = $form['image']->getData();
            if ($file) {
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try {
                    $file->move(
                        $this->getParameter('images_directory'), // in Servis.yaml defined folder for upload images
                        $fileName
                    );
                } catch (FileException $e) {
                    // ... handle exception f something happens during file upload
                }
                $user->setImage($fileName);
            }
            // **************** file upload ************

            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/", name="user_show", methods={"GET"}, requirements={"id":"\d+"})
     */
    public function show(
        SettingRepository $settingRepository, 
        CommentRepository $commentRepository,
        OrdersRepository $ordersRepository
        ): Response
    {
        $user = $this->getUser();
        $comments = $commentRepository->getAllCommentsUser($user->getId());
        $setting = $settingRepository->findAll();
        $orders = $ordersRepository->findBy(['user'=>$user->getId(), 'isPaid'=>true]);
        $products = [];
        foreach ($orders as $order) {
            foreach ($order->getOrderDetails() as $orderDetail) {
                if($orderDetail->getProduct()->getType() == 'DIGITAL'){
                    $products[] = $orderDetail->getProduct();
                }
                
            }
            
        }

        return $this->render('user/show.html.twig', [
            'user' => $user,
            'favorites' => $user->getFavorites(),
            'products' =>$products,
            'comments' => $comments,
            'setting' =>$setting
        ]);
    }

    /**
     * @Route("/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = $this->getUser(); // Get Login User data
        if (!$user) {
            return $this->redirectToRoute('home');
        }

        $submittedToken = $request->get('_token');
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             //if ($this->isCsrfTokenValid('user-form' . $user->getId(), $submittedToken)) {
            // **************** file upload ****************
            /** @var file $file */
            $file = $form['image']->getData();
            if ($file) {
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try {
                    $file->move(
                        $this->getParameter('images_directory'), // in Servis.yaml defined folder for
                        $fileName
                    );
                } catch (FileException $e) {
                    // ... handle exception f something happens during file upload
                }
                $user->setImage($fileName);
            }
            // **************** file upload ************
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        //}
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @return string
     */

    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * @Route("/newcomment/{id}", name="user_new_comment", methods={"GET","POST"})
     */
    public function newcomment(Request $request, $id, CommentRepository $commentRepository): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //if ($this->isCsrfTokenValid('comment', $submittedToken)) {
                $oldComment = $commentRepository->findBy(['author'=>$this->getUser()]);
                if(sizeof($oldComment) > 0){
                    $this->addFlash('warning','Vous avez déjà commenté cet article!');

                    return $this->redirectToRoute('product_show', ['id' => $id]);
                }
                $entityManager = $this->getDoctrine()->getManager();
                $comment->setAuthor($this->getUser());
                $comment->setStatus('New');
                // $comment->setCreatedAt(new \DateTimeImmutable());
                $comment->setIp($_SERVER['REMOTE_ADDR']);
                $comment->setProductid($id);
                $user = $this->getUser();
                $comment->setUserid($user->getId());
                $entityManager->persist($comment);
                $entityManager->flush();

                $this->addFlash('success','Votre commentaire à bien été envoyé!');

                return $this->redirectToRoute('product_show', ['id' => $id]);
            }

            return $this->redirectToRoute('product_show', ['id' => $id]);
        //}


    }

    /**
     * @Route("/deletecomment/{id}", name="user_delete_comment", methods={"DELETE"})
     */
    public function deletecomment(Request $request, $id, CommentRepository $commentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $this->getUser()->getId(), $request->get('_token'))) {
        $comment = $commentRepository->find($id);
        $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($comment);
            $entityManager->flush();
            
        }
        return $this->redirectToRoute('user_comments');


    }
     /**
     * @Route("/favorite/{id}", name="user_toggle_favorite", methods={"GET"})
     */
    public function toggle(Request $request, $id, ProductRepository $productRepository): Response
    {
       function my_in_array($p,  $a){
        foreach ($a as $key) {
            if($p->getId() == $key->getId()){
                return true;
            }
        }
        return false;
        }
        
        $user = $this->getUser();
        $product = $productRepository->find($id);
        $array = $this->getUser()->getFavorites();
        if(my_in_array($product, $array)){
                $user->removeFavorite($product);
        }else{
                $user->addFavorite($product);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('user_show');
      
    }

}
