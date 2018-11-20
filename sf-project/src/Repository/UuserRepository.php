<?php

namespace App\Repository;

use App\Entity\Uuser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Uuser|null find($id, $lockMode = null, $lockVersion = null)
 * @method Uuser|null findOneBy(array $criteria, array $orderBy = null)
 * @method Uuser[]    findAll()
 * @method Uuser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UuserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Uuser::class);
    }

    // /**
    //  * @return Uuser[] Returns an array of Uuser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Uuser
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
