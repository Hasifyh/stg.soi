<?php

namespace App\Repository;

use App\Entity\SituationData;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Integer;

/**
 * @method SituationData|null find($id, $lockMode = null, $lockVersion = null)
 * @method SituationData|null findOneBy(array $criteria, array $orderBy = null)
 * @method SituationData[]    findAll()
 * @method SituationDtl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SituationDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SituationData::class);
    }
    public function getByDate(DateTime $d1, DateTime $d2)
    {
        $query = $this->createQueryBuilder(alias: 'c')
            ->where(predicates: 'c.createdAt <= :d2')
            ->andWhere('c.createdAt >= :d1')
            ->andWhere('c.id_parent_Data = 15')
            ->setParameters(
                array(
                    'd1' => $d1,
                    'd2' => $d2,
                )
            )
            ->getQuery();
        return $query->getResult();
    }

    public function countBy(array $condition)
    {
        $persister = $this->_em->getUnitOfWork()->getEntityPersister($this->_entityName);
        return $persister->count($condition);
    }

    public function getByMonth(Integer $m)
    {
        $query = $this->createQueryBuilder(alias: 'c')
            ->where('MONTH(c.createdAt)=m')
            ->setParameters(
                array(
                    'm' => $m
                )
            )
            ->getQuery();
        return $query->getResult();
    }

    public function getByYear(Integer $m)
    {
        $query = $this->createQueryBuilder(alias: 'c')
            ->where('YEAR(c.createdAt)=m')
            ->setParameters(
                array(
                    'm' => $m
                )
            )
            ->getQuery();
        return $query->getResult();
    }

    public function getBydmy(Integer $d, Integer $m, Integer $y)
    {
        $query = $this->createQueryBuilder(alias: 'c')
            ->where('DAY(c.createdAt)=d')
            ->where('MONTH(c.createdAt)=m')
            ->where('YEAR(c.createdAt)=y')
            ->setParameters(
                array(
                    'd' => $d,
                    'm' => $m,
                    'y' => $y

                )
            )
            ->getQuery();
        return $query->getResult();
    }
}
    // /**
    //  * @return SituationData[] Returns an array of SituationData objects
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
    public function findOneBySomeField($value): ?SituationData
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
