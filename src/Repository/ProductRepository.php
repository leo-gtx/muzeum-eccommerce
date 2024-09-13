<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
//use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    
    public function findSearch($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.title LIKE :val')
            ->setParameter('val', '%'.$value.'%')
            ->orderBy('p.title', 'ASC')
            ->getQuery()
            ->execute()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    // *** LEFT JOIN WITH SQL ***
    public function getAllProducts(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        // $sql = '
        // SELECT h.*,c.title as catname,u.name,u.surname FROM product h
        // JOIN category c ON c.id = h.category_id
        // JOIN user u ON u.id = h.user_id
        // ORDER BY c.title ASC        
        // ';
        $sql = '
        SELECT h.*,c.title as catname,u.name,u.surname FROM product h
        JOIN category c ON c.id = h.category_id
        JOIN user u
        ORDER BY c.title ASC        
        ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    
}
