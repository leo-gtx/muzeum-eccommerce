<?php

namespace App\Controller;

use App\Entity\Shopcart;
use App\Form\ShopcartType;
use App\Repository\ProductRepository;
use App\Repository\ShopcartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/shopcart")
 */
class ShopcartController extends AbstractController
{
    /**
     * @Route("/", name="shopcart_index", methods={"GET"})
     */
    public function index(ShopcartRepository $shopcartRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY'); // login kontrolü güvenlik için
        $user = $this->getUser();
        $id = $user->getId();
        // dump($request);
        // echo $user->getId();
        //die();

        $em = $this->getDoctrine()->getManager();

        $sql = "SELECT p.title, p.price , p.amount, p.image, s.*

                FROM shopcart s , product p
                
                WHERE s.user_id = :userid AND p.id = s.product_id ";

        $statement = $em->getConnection()->prepare($sql);
        $statement->bindValue(':userid', $user->getid());
        $statement->execute();
        $shopcart = $statement->fetchAll();
        //dump($shopcart);
        //die();
        return $this->render('shopcart/index.html.twig', [
            'shopcarts' => $shopcart,
        ]);
    }
    /**
     * @Route("/new", name="shopcart_new", methods={"GET","POST"})
     */
    public function new(Request $request,ShopcartRepository $shopcartRepository, ProductRepository $productRepository): Response
    {
        $shopcart = new Shopcart();
        $form = $this->createForm(ShopcartType::class, $shopcart);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $entityManager = $this->getDoctrine()->getManager();
            $params = $request->request->get('shopcart');
            // dump($params['Q']);
            //dump($request);
            //die();
            $oldShopcart = $shopcartRepository->findOneBy(['product'=>$params['ID']]);
            if(!empty($oldShopcart)){
                $oldShopcart->setQuantity($oldShopcart->getQuantity() + $params['Q']);
                $entityManager->persist($oldShopcart);
            }else{
                $product = $productRepository->find($params['ID']);
                $shopcart->setProduct($product);
                $shopcart->setQuantity($params['Q']);
                $user = $this->getUser();
                $shopcart->setUser($user);
                $entityManager->persist($shopcart);
            }
            $entityManager->flush();

            return $this->redirectToRoute('shopcart_index');
        }
        $product = $productRepository->find((int) $request->get('productId'));

        if($request->isMethod('GET') && !empty($product)){
            $entityManager = $this->getDoctrine()->getManager();
            $product = $productRepository->find($request->get('productId'));
            $shopcart->setProduct($product);
            $oldShopcart = $shopcartRepository->findOneBy(['product'=>$product]);
            if(!empty($oldShopcart)){
                $oldShopcart->setQuantity($oldShopcart->getQuantity() + 1);
                $entityManager->persist($oldShopcart);
            }else{
                $shopcart->setQuantity(1);
                $user = $this->getUser();
                $shopcart->setUser($user);
                $entityManager->persist($shopcart);
            }
            
            $entityManager->flush();
            return $this->redirectToRoute('shopcart_index');

        }

        return $this->render('shopcart/new.html.twig', [
            'shopcart' => $shopcart,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="shopcart_show", methods={"GET"})
     */
    public function show(Shopcart $shopcart): Response
    {
        return $this->render('shopcart/show.html.twig', [
            'shopcart' => $shopcart,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="shopcart_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Shopcart $shopcart): Response
    {
        $form = $this->createForm(ShopcartType::class, $shopcart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('shopcart_index');
        }

        return $this->render('shopcart/edit.html.twig', [
            'shopcart' => $shopcart,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/del", name="shopcart_del", methods={"GET","POST"})
     */
    public function del(Request $request, Shopcart $shopcart): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($shopcart);
        $entityManager->flush();
        return $this->redirectToRoute('shopcart_index');
        $this->addFlash('success','Produit supprimé avec succès!');
    }
    /**
     * @Route("/{id}", name="shopcart_delete")
     */
    public function delete(Request $request, Shopcart $shopcart): Response
    {
        if ($this->isCsrfTokenValid('delete'.$shopcart->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($shopcart);
            $entityManager->flush();
        }

        return $this->redirectToRoute('shopcart_index');
    }

    /**
     * @Route("/cart/count", name="shopcart_count", methods={"GET"})
     */
    public function getCartCount(ShopcartRepository $shopcartRepository): JsonResponse
    {
        // Assuming you have the user's ID from the session or token
        $userId = $this->getUser()->getId(); 
        
        // Query the number of items in the cart for the logged-in user
        $cartCount = $shopcartRepository->countItemsInCart($userId);
        // 
        return new JsonResponse(['cartCount' => $cartCount]);
    }
}
