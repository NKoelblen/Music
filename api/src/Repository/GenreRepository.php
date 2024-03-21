<?php

namespace App\Repository;

use App\DTO\Genre\TinyGenreDTO;
use App\Entity\Genre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Genre>
 *
 * @method Genre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Genre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Genre[]    findAll()
 * @method Genre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GenreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Genre::class);
    }

    /**
     * @return TinyGenreDTO[]
     */
    public function findPrimaryGenres(): array
    {
        return $this->createQueryBuilder('g')
            ->select('NEW App\\DTO\\Genre\\TinyGenreDTO(g.id, g.slug, g.title, p.title)')
            ->leftJoin('g.parents', 'p')
            ->where('g.parents IS EMPTY')
            ->andWhere('g.transverse IS NULL OR g.transverse = false')
            ->orderBy('g.order_number')
            ->getQuery()
            ->getResult();
    }

    public function findGroups(): array
    {
        return $this->createQueryBuilder('g')
            ->select('NEW App\\DTO\\Genre\\TinyGenreDTO(g.id, g.slug, g.title)')
            ->where('g.parents IS EMPTY')
            ->andWhere('g.transverse = true')
            ->leftJoin('g.parents', 'p')
            ->getQuery()
            ->getResult();
    }

    public function findGenre($id): ?TinyGenreDTO
    {
        return $this->createQueryBuilder('g')
            ->select('NEW App\\DTO\\Genre\\TinyGenreDTO(g.id, g.slug, g.title)')
            ->where('g.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findGenreParents($id): array
    {
        return $this->createQueryBuilder('g')
            ->select('NEW App\\DTO\\Genre\\TinyGenreDTO(p.id, p.slug, p.title)')
            ->where('g.id = :id')
            ->setParameter('id', $id)
            ->leftJoin('g.parents', 'p')
            ->getQuery()
            ->getResult();
    }

    public function findGenreSiblings($id): array
    {
        return $this->createQueryBuilder('g')
            ->select('NEW App\\DTO\\Genre\\TinyGenreDTO(p.title, s.id, s.slug, s.title)')
            ->where('g.id = :id')
            ->setParameter('id', $id)
            ->leftJoin('g.parents', 'p')
            ->leftJoin('p.children', 's')
            ->andWhere('s.id != :id')
            ->orderBy('p.order_number')
            ->addOrderBy('s.order_number')
            ->getQuery()
            ->getResult();
    }

    public function findGenreChildren($id): array
    {
        return $this->createQueryBuilder('g')
            ->select('NEW App\\DTO\\Genre\\TinyGenreDTO(c.id, c.slug, c.title)')
            ->where('g.id = :id')
            ->setParameter('id', $id)
            ->leftJoin('g.children', 'c')
            ->orderBy('c.order_number')
            ->getQuery()
            ->getResult();
    }


    //    /**
    //     * @return Genre[] Returns an array of Genre objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('g.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Genre
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
