<?php

namespace App\Repository;

use App\Entity\SituationDtl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SituationDtl|null find($id, $lockMode = null, $lockVersion = null)
 * @method SituationDtl|null findOneBy(array $criteria, array $orderBy = null)
 * @method SituationDtl[]    findAll()
 * @method SituationDtl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SituationDtlRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SituationDtl::class);
    }

    // /**
    //  * @return SituationDtl[] Returns an array of SituationDtl objects
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
    public function findOneBySomeField($value): ?SituationDtl
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
