<?php

namespace App\Repository;

use App\Entity\Orders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
//use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Orders|null find($id, $lockMode = null, $lockVersion = null)
 * @method Orders|null findOneBy(array $criteria, array $orderBy = null)
 * @method Orders[]    findAll()
 * @method Orders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Orders::class);
    }

    // /**
    //  * @return Orders[] Returns an array of Orders objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Orders
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    /**
     * Get total revenue from paid orders
     */
    public function getTotalRevenue(): float
    {
        $qb = $this->createQueryBuilder('o')
            ->select('SUM(o.amount)')
            ->where('o.isPaid = :isPaid')
            ->setParameter('isPaid', true);

        return (float) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Get total potential revenue from all orders (paid and unpaid)
     */
    public function getTotalPotentialRevenue(): float
    {
        $qb = $this->createQueryBuilder('o')
            ->select('SUM(o.amount)')
            ->where('o.status != :status')
            ->setParameter('status', 'canceled');

        return (float) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Get total lost revenue from all orders (paid and unpaid)
     */
    public function getTotalLostRevenue(): float
    {
        $qb = $this->createQueryBuilder('o')
            ->select('SUM(o.amount)')
            ->where('o.status = :status')
            ->setParameter('status', 'canceled');

        return (float) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Get revenue for each month from Jan to Dec
     */
    public function getMonthlyRevenue(): array
    {
        $qb = $this->createQueryBuilder('o')
            ->select("DATE_FORMAT(o.created_at, '%m') as month, SUM(o.amount) as totalRevenue")
            ->where('o.isPaid = :isPaid')
            ->setParameter('isPaid', true)
            ->groupBy('month')
            ->orderBy('month', 'ASC');

        return $this->formatMonthlyResult($qb->getQuery()->getResult());
    }

    /**
     * Get potential revenue for each month from Jan to Dec
     */
    public function getMonthlyPotentialRevenue(): array
    {
        $qb = $this->createQueryBuilder('o')
            ->select("DATE_FORMAT(o.created_at, '%m') as month, SUM(o.amount) as totalRevenue")
            ->where('o.status != :status')
            ->setParameter('status', 'canceled')
            ->groupBy('month')
            ->orderBy('month', 'ASC');

        return $this->formatMonthlyResult($qb->getQuery()->getResult());
    }

    /**
     * Helper method to format the monthly result, filling in months with no orders
     */
    private function formatMonthlyResult(array $data): array
    {
        $monthlyRevenue = array_fill(1, 12, 0); // Initialize array with 0 from Jan to Dec

        foreach ($data as $row) {
            $monthlyRevenue[(int) $row['month'] -1] = (float) $row['totalRevenue'];
        }

        return $monthlyRevenue;
    }
}
