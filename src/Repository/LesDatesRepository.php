<?php

namespace App\Repository;

use App\Entity\LesDates;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LesDates|null find($id, $lockMode = null, $lockVersion = null)
 * @method LesDates|null findOneBy(array $criteria, array $orderBy = null)
 * @method LesDates[]    findAll()
 * @method LesDates[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LesDatesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LesDates::class);
    }

    // /**
    //  * @return LesDates[] Returns an array of LesDates objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LesDates
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
