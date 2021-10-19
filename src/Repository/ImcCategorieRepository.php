<?php

namespace App\Repository;

use App\Entity\ImcCategorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImcCategorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImcCategorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImcCategorie[]    findAll()
 * @method ImcCategorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImcCategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImcCategorie::class);
    }

    // /**
    //  * @return ImcCategorie[] Returns an array of ImcCategorie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImcCategorie
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
