<?php

namespace App\Repository;

use App\Entity\OrderDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
//use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrderDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderDetail[]    findAll()
 * @method OrderDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrderDetail::class);
    }

    // /**
    //  * @return OrderDetail[] Returns an array of OrderDetail objects
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
    public function findOneBySomeField($value): ?OrderDetail
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
     * Get all products purchased by a specific user
     *
     * @param int $userId
     * @return array
     */
    public function findProductsByUser(int $userId): array
    {
        // Create the query builder for OrderDetail with alias 'od'
        $qb = $this->createQueryBuilder('od')
            // Join the 'order' associated with 'od' and alias it as 'o'
            ->innerJoin('od.orderParent', 'o')
            // Join the 'product' associated with 'od' and alias it as 'p'
            ->innerJoin('od.product', 'p')
            // Add the condition where the user's ID matches the order's user
            ->where('o.user = :userId')
            // Add a condition to ensure only paid orders are selected
            ->andWhere('o.isPaid = true')
            // Set the userId parameter for the query
            ->setParameter('userId', $userId)
            // Select the product entity (using the alias 'p')
            //->select('p')
            // Get the final query object
            ->getQuery();

        // Execute the query and return the result
        return $qb->getResult();
    }
}
