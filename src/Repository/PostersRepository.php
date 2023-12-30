<?php

namespace App\Repository;

use App\Entity\Posters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Posters>
 *
 * @method Posters|null find($id, $lockMode = null, $lockVersion = null)
 * @method Posters|null findOneBy(array $criteria, array $orderBy = null)
 * @method Posters[]    findAll()
 * @method Posters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Posters::class);
    }

//    /**
//     * @return Posters[] Returns an array of Posters objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Posters
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
