<?php

namespace App\Repository;

use App\Entity\IdentitéWebsite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IdentitéWebsite>
 *
 * @method IdentitéWebsite|null find($id, $lockMode = null, $lockVersion = null)
 * @method IdentitéWebsite|null findOneBy(array $criteria, array $orderBy = null)
 * @method IdentitéWebsite[]    findAll()
 * @method IdentitéWebsite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IdentitéWebsiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IdentitéWebsite::class);
    }

    public function getWebSite()
    {
        return $this->find(1);
    }

//    /**
//     * @return IdentitéWebsite[] Returns an array of IdentitéWebsite objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?IdentitéWebsite
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}