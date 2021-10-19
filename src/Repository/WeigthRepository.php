<?php

namespace App\Repository;

use App\Entity\Weigth;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Weigth|null find($id, $lockMode = null, $lockVersion = null)
 * @method Weigth|null findOneBy(array $criteria, array $orderBy = null)
 * @method Weigth[]    findAll()
 * @method Weigth[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WeigthRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Weigth::class);
    }

    // /**
    //  * @return Weigth[] Returns an array of Weigth objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Weigth
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
