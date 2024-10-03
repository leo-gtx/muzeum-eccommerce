<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Event>
 *
 * @method Event|null find($id, $lockMode = null, $lockVersion = null)
 * @method Event|null findOneBy(array $criteria, array $orderBy = null)
 * @method Event[]    findAll()
 * @method Event[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Event $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Event $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Get active events where the current time is between startAt and endAt.
     *
     * @return Event[]
     */
    public function findActiveEventsWithinTimeframe(): array
    {
        $qb = $this->createQueryBuilder('e')
            ->where('e.active = :active')
            ->andWhere(':now BETWEEN e.startAt AND e.endAt')
            ->setParameter('active', true)
            ->setParameter('now', new \DateTimeImmutable());

        return $qb->getQuery()->getResult();
    }

    // /**
    //  * @return Event[] Returns an array of Event objects
    //  */
    
    public function findOneByProducts($products)
    {
        // $products = [/* Array of product objects */];

        $qb = $this->createQueryBuilder('e')
            ->innerJoin('e.products', 'p') // Assuming the join table is 'products'
            ->where('p IN (:products)')
            ->andWhere('e.active = :active')
            ->setParameter('products', $products)
            ->setParameter('active', true)
            ->orderBy('e.priority', 'DESC')
            ->setMaxResults(1); // Limit to one event with the highest priority
        
        return $qb->getQuery()->getOneOrNullResult();
        
    }
    

    /*
    public function findOneBySomeField($value): ?Event
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
