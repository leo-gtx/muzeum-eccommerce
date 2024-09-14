<?php

namespace App\Repository;

use App\Entity\Shopcart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
//use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Shopcart|null find($id, $lockMode = null, $lockVersion = null)
 * @method Shopcart|null findOneBy(array $criteria, array $orderBy = null)
 * @method Shopcart[]    findAll()
 * @method Shopcart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShopcartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Shopcart::class);
    }


    // /**
    //  * @return Shopcart[] Returns an array of Shopcart objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Shopcart
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    // User shopcart products
    public function getUserShopCart($userid): array
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('
        SELECT p.id as product, p.title, p.price, s.quantity, u.id, (p.price * s.quantity) as total
        FROM App\Entity\Shopcart s
        JOIN s.product p
        JOIN s.user u
        WHERE u.id = :userid

        ')
            ->setParameter('userid', $userid);
        return $query->getResult();
    }



    // Sum of User shopcart products
    public function getUserShopCartTotal($userid): float
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('
        SELECT sum(p.price * s.quantity) as total
        FROM App\Entity\Shopcart s, App\Entity\Product p
        WHERE s.product = p.id and s.user=:userid
        ')
            ->setParameter('userid', $userid);
        $result = $query->getResult();

        if($result[0]["total"]!=null){
            return $result[0]["total"];
        }
        else{
            return 0;
        }
    }

    // Count of User shopcart products
    public function getUserShopCartCount($userid): Integer
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('
        SELECT count(s.id) as shopcount
        FROM App\Entity\Shopcart s
        WHERE s.user=:userid
        ')
            ->setParameter('userid', $userid);
        $result = $query->getResult();

        if($result[0]["shopcart"]!=null){
            return $result[0]["shopcount"];
        }
        else{
            return 0;
        }
    }

    /**
     * Count the number of items in the user's cart
     */
    public function countItemsInCart(int $userId): int
    {
        return $this->createQueryBuilder('s')
            ->select('SUM(s.quantity)')
            ->where('s.user = :userId')
            ->setParameter('userId', $userId)
            ->getQuery()
            ->getSingleScalarResult();
    }


}
