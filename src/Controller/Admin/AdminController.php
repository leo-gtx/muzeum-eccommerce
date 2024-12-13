<?php

namespace App\Controller\Admin;

use App\Entity\Orders;
use App\Repository\OrderDetailRepository;
use App\Repository\OrdersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Repository\ShopcartRepository;
use Symfony\Component\HttpFoundation\JsonResponse;



/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_admin")
     */
    public function index(
        UserRepository $userRepository,
        OrdersRepository $ordersRepository,
        ShopcartRepository $shopcartRepository
    )
    {
        $users = $userRepository->findAll();
        $orders = $ordersRepository->findAll();
        $shopcarts = $shopcartRepository->findAll();
        $totalRevenue = $ordersRepository->getTotalRevenue();
        $totalPotentialRevenue = $ordersRepository->getTotalPotentialRevenue();
        $monthlyRevenue = $ordersRepository->getMonthlyRevenue();
        $monthlyPotentialRevenue = $ordersRepository->getMonthlyPotentialRevenue();
        $totalLostRevenue = $ordersRepository->getTotalLostRevenue();
        return $this->render('admin/admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'customers'=> count($users),
            'orders' => count($orders),
            'abandonnedCarts' => count($shopcarts),
            'totalRevenue' => $totalRevenue,
            'totalPotentialRevenue' => $totalPotentialRevenue,
            'monthlyRevenue' => $monthlyRevenue,
            'monthlyPotentialRevenue' => $monthlyPotentialRevenue,
            'totalLostRevenue' => $totalLostRevenue
        ]);
    }

    /**
     * @Route("/orders/{slug}", name="admin_orders_index")
     */
    public function orders($slug, OrdersRepository $ordersRepository)
    {
        $orders = $ordersRepository->findBy(['status' => $slug]);
        return $this->render('admin/orders/index.html.twig', [
            'orders' => $orders,
        ]);
    }

    /**
     * @Route("/orders/show/{id}", name="admin_orders_show", methods="GET")
     */
    public function show($id,Orders $orders, OrderDetailRepository $orderDetailRepository): Response
    {
        $orderdetail = $orderDetailRepository->findBy(
            ['orderParent' => $id]
        );

        return $this->render('admin/orders/show.html.twig', [
            'orderdetail' => $orderdetail,
            'order' => $orders,
        ]);
    }

    /**
     * @Route("order/{id}/update", name="admin_orders_update", methods="POST")
     */
    public function order_update($id, Request $request, Orders $orders): Response
    {
        $em = $this->getDoctrine()->getManager();
        $sql = "UPDATE orders SET shipinfo=:shipinfo, note=:note, is_paid=:isPaid, status=:status WHERE id=:id";
        $statement = $em->getConnection()->prepare($sql);
        $statement->bindValue('shipinfo', $request->request->get('shipinfo'));
        $statement->bindValue('note', $request->request->get('note'));
        $statement->bindValue('status', $request->request->get('status'));
        $statement->bindValue('isPaid', $request->request->get('isPaid'));
        $statement->bindValue('id', $id);
        $statement->execute();
        $this->addFlash('success','Mise à jour effectuée!');

        return $this->redirectToRoute('admin_orders_show',array('id' => $id));


    }

    /**
     * @Route("/order-counts", name="admin_order_counts", methods={"GET"})
     */
    public function getOrderCounts(OrdersRepository $ordersRepository): JsonResponse
    {
        // Get counts of orders by status
        $newOrders = $ordersRepository->count(['status' => 'New']);
        $acceptedOrders = $ordersRepository->count(['status' => 'Accepted']);
        $inShippingOrders = $ordersRepository->count(['status' => 'Inshipping']);
        $canceledOrders = $ordersRepository->count(['status' => 'Canceled']);
        $completedOrders = $ordersRepository->count(['status' => 'Completed']);

        return new JsonResponse([
            'new' => $newOrders,
            'accepted' => $acceptedOrders,
            'inshipping' => $inShippingOrders,
            'canceled' => $canceledOrders,
            'completed' => $completedOrders,
        ]);
    }

}
