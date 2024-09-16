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
use Symfony\Component\HttpFoundation\Cookie;

/**
 * @Route("/shopcart")
 */
class ShopcartController extends AbstractController
{
    /**
     * @Route("/", name="shopcart_index", methods={"GET"})
     */
    public function index(Request $request, ShopcartRepository $shopcartRepository, ProductRepository $productRepository): Response
    {
        $cookieName = 'guest_cart';
        $user = $this->getUser();

        if ($user) {
            // If the user is logged in, get their shopcarts from the database
            $shopcarts = $user->getShopcarts();
        } else {
            // If the user is not logged in, retrieve cart from cookies
            $cart = json_decode($request->cookies->get($cookieName, '[]'), true);
            $shopcarts = [];

            // Load products based on cookie data
            foreach ($cart as $item) {
                $product = $productRepository->find($item['productId']);
                if ($product) {
                    $shopcarts[] = [
                        'product' => $product,
                        'quantity' => $item['quantity'],
                    ];
                }
            }
        }

        return $this->render('shopcart/index.html.twig', [
            'shopcarts' => $shopcarts,
        ]);
    }
    /**
     * @Route("/new", name="shopcart_new", methods={"GET","POST"})
     */
    public function new(Request $request, ShopcartRepository $shopcartRepository, ProductRepository $productRepository): Response
    {
        $shopcart = new Shopcart();
        $form = $this->createForm(ShopcartType::class, $shopcart);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $entityManager = $this->getDoctrine()->getManager();
            $params = $request->request->get('shopcart');
            $user = $this->getUser();

            // If the user is authenticated
            if ($user) {
                $oldShopcart = $shopcartRepository->findOneBy(['product' => $params['ID']]);
                if (!empty($oldShopcart)) {
                    $oldShopcart->setQuantity($oldShopcart->getQuantity() + $params['Q']);
                    $entityManager->persist($oldShopcart);
                } else {
                    $product = $productRepository->find($params['ID']);
                    $shopcart->setProduct($product);
                    $shopcart->setQuantity($params['Q']);
                    $shopcart->setUser($user);
                    $entityManager->persist($shopcart);
                }
                $entityManager->flush();

                return $this->redirectToRoute('shopcart_index');
            } else {
                // Handle guest cart by saving to cookies
                $cookieName = 'guest_cart';
                $cart = json_decode($request->cookies->get($cookieName, '[]'), true);

                $found = false;
                foreach ($cart as &$item) {
                    if ($item['productId'] == $params['ID']) {
                        $item['quantity'] += $params['Q'];
                        $found = true;
                        break;
                    }
                }

                if (!$found) {
                    $cart[] = [
                        'productId' => $params['ID'],
                        'quantity' => $params['Q'],
                    ];
                }

                // Set the updated cart data into the cookie
                $response = new Response();
                $response->headers->setCookie(
                    new Cookie($cookieName, json_encode($cart), time() + (60 * 60 * 24 * 7)) // 1 week expiration
                );
                $response->send();

                return $this->redirectToRoute('shopcart_index');
            }
        }

        $product = $productRepository->find((int) $request->get('productId'));

        if ($request->isMethod('GET') && !empty($product)) {
            $entityManager = $this->getDoctrine()->getManager();
            $product = $productRepository->find($request->get('productId'));

            // If the user is authenticated
            $user = $this->getUser();
            if ($user) {
                $oldShopcart = $shopcartRepository->findOneBy(['product' => $product]);
                if (!empty($oldShopcart)) {
                    $oldShopcart->setQuantity($oldShopcart->getQuantity() + 1);
                    $entityManager->persist($oldShopcart);
                } else {
                    $shopcart->setProduct($product);
                    $shopcart->setQuantity(1);
                    $shopcart->setUser($user);
                    $entityManager->persist($shopcart);
                }
                $entityManager->flush();

                return $this->redirectToRoute('shopcart_index');
            } else {
                // Handle guest cart
                $cookieName = 'guest_cart';
                $cart = json_decode($request->cookies->get($cookieName, '[]'), true);
                $found = false;

                foreach ($cart as &$item) {
                    if ($item['productId'] == $product->getId()) {
                        $item['quantity'] += 1;
                        $found = true;
                        break;
                    }
                }

                if (!$found) {
                    $cart[] = [
                        'productId' => $product->getId(),
                        'quantity' => 1,
                    ];
                }

                // Update the cookie
                $response = new Response();
                $response->headers->setCookie(
                    new Cookie($cookieName, json_encode($cart), time() + (60 * 60 * 24 * 7)) // 1 week expiration
                );
                $response->send();

                return $this->redirectToRoute('shopcart_index');
            }
        }

        return $this->render('shopcart/new.html.twig', [
            'shopcart' => $shopcart,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}", name="shopcart_show", methods={"GET"})
     */
    public function show(Request $request, $id, ProductRepository $productRepository): Response
    {
        $user = $this->getUser();

        if ($user) {
            // For authenticated users
            $shopcart = $this->getDoctrine()->getRepository(Shopcart::class)->find($id);

            if (!$shopcart || $shopcart->getUser() !== $user) {
                throw $this->createNotFoundException('No cart item found for id ' . $id);
            }

            return $this->render('shopcart/show.html.twig', [
                'shopcart' => $shopcart,
            ]);
        } else {
            // For guest users, handle via cookies
            $cookieName = 'guest_cart';
            $cart = json_decode($request->cookies->get($cookieName, '[]'), true);
            $shopcart = null;

            foreach ($cart as $item) {
                if ($item['productId'] == $id) {
                    $product = $productRepository->find($item['productId']);
                    if ($product) {
                        $shopcart = [
                            'product' => $product,
                            'quantity' => $item['quantity'],
                        ];
                    }
                    break;
                }
            }

            if (!$shopcart) {
                throw $this->createNotFoundException('No cart item found for id ' . $id);
            }

            return $this->render('shopcart/show.html.twig', [
                'shopcart' => $shopcart,
            ]);
        }
    }


    /**
     * @Route("/{id}/edit", name="shopcart_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Shopcart $shopcart, ShopcartRepository $shopcartRepository, ProductRepository $productRepository): Response
    {
        $cookieName = 'guest_cart';
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        
        // For logged-in users
        if ($user) {
            // Ensure that the cart item belongs to the user
            if ($shopcart->getUser() !== $user) {
                throw $this->createAccessDeniedException('You do not have permission to edit this cart item.');
            }

            $form = $this->createForm(ShopcartType::class, $shopcart);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $quantity = $shopcart->getQuantity();
                if ($quantity <= 0) {
                    $entityManager->remove($shopcart);
                    $entityManager->flush();
                    $this->addFlash('success', 'Item removed from cart.');
                } else {
                    $entityManager->flush();
                    $this->addFlash('success', 'Cart item updated successfully.');
                }

                return $this->redirectToRoute('shopcart_index');
            }

            return $this->render('shopcart/edit.html.twig', [
                'shopcart' => $shopcart,
                'form' => $form->createView(),
            ]);
        }

        // For guest users
        else {
            $form = $this->createForm(ShopcartType::class, $shopcart);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $quantity = $shopcart->getQuantity();
                if ($quantity <= 0) {
                    $this->removeCartItemFromCookie($request, $cookieName, $shopcart);
                    $this->addFlash('success', 'Item removed from cart.');
                } else {
                    $this->updateCartItemInCookie($request, $cookieName, $shopcart);
                    $this->addFlash('success', 'Cart item updated successfully.');
                }

                return $this->redirectToRoute('shopcart_index');
            }

            return $this->render('shopcart/edit.html.twig', [
                'shopcart' => $shopcart,
                'form' => $form->createView(),
            ]);
        }
    }

    private function removeCartItemFromCookie(Request $request, string $cookieName, Shopcart $shopcart): void
    {
        $cart = json_decode($request->cookies->get($cookieName, '[]'), true);
        $cart = array_filter($cart, function($item) use ($shopcart) {
            return $item['productId'] !== $shopcart->getProduct()->getId();
        });

        $response = new Response();
        $response->headers->setCookie(new Cookie($cookieName, json_encode($cart)));
        $response->send();
    }

    private function updateCartItemInCookie(Request $request, string $cookieName, Shopcart $shopcart): void
    {
        $cart = json_decode($request->cookies->get($cookieName, '[]'), true);
        $updated = false;

        foreach ($cart as &$item) {
            if ($item['productId'] == $shopcart->getProduct()->getId()) {
                $item['quantity'] = $shopcart->getQuantity();
                $updated = true;
            }
        }

        if (!$updated) {
            $cart[] = [
                'productId' => $shopcart->getProduct()->getId(),
                'quantity' => $shopcart->getQuantity(),
            ];
        }

        $response = new Response();
        $response->headers->setCookie(new Cookie($cookieName, json_encode($cart)));
        $response->send();
    }

    /**
     * @Route("/{id}/del", name="shopcart_del", methods={"GET","POST"})
     */
    public function del(Request $request, $id): Response
    {
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        
        if ($user) {
            // Handle for authenticated users
            $shopcart = $this->getDoctrine()->getRepository(Shopcart::class)->findOneBy([
                'product' => $id,
                'user' => $user
            ]);

            if ($shopcart) {
                $entityManager->remove($shopcart);
                $entityManager->flush();
                $this->addFlash('success', 'Produit supprimé avec succès!');
            }
        } else {
            // Handle for guest users
            $cookieName = 'guest_cart';
            $cart = json_decode($request->cookies->get($cookieName, '[]'), true);
            
            // Filter out the item to be deleted
            $cart = array_filter($cart, function ($item) use ($id) {
                return $item['productId'] != $id;
            });

            // Update the cookie
            $response = new Response();
            $response->headers->setCookie(new Cookie($cookieName, json_encode(array_values($cart))));
            $response->send();
        }

        return $this->redirectToRoute('shopcart_index');
    }

    /**
     * @Route("/{id}", name="shopcart_delete")
     */
    public function delete(Request $request, Shopcart $shopcart, ShopcartRepository $shopcartRepository): Response
    {
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $cookieName = 'guest_cart';

        if ($this->isCsrfTokenValid('delete' . $shopcart->getId(), $request->request->get('_token'))) {
            // For logged-in users
            if ($user) {
                if ($shopcart->getUser() !== $user) {
                    throw $this->createAccessDeniedException('You do not have permission to delete this cart item.');
                }

                $entityManager->remove($shopcart);
                $entityManager->flush();
                $this->addFlash('success', 'Product removed from cart.');
            }

            // For guest users
            else {
                $this->removeCartItemFromCookie($request, $cookieName, $shopcart);
                $this->addFlash('success', 'Product removed from cart.');
            }
        }

        return $this->redirectToRoute('shopcart_index');
    }


    /**
     * @Route("/cart/count", name="shopcart_count", methods={"GET"})
     */
    public function getCartCount(ShopcartRepository $shopcartRepository, Request $request): JsonResponse
    {
        $user = $this->getUser();
        $cookieName = 'guest_cart';
        
        // For logged-in users
        if ($user) {
            $cartCount = $shopcartRepository->countItemsInCart($user->getId());
        } 
        // For guest users
        else {
            $cartCookie = $request->cookies->get($cookieName, '[]');
            $cartItems = json_decode($cartCookie, true);
            $cartCount = array_sum(array_column($cartItems, 'quantity'));
        }

        return new JsonResponse(['cartCount' => $cartCount]);
    }

}
