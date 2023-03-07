<?php

namespace App\Repository;


use App\Entity\Actualite;
use App\Entity\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @extends ServiceEntityRepository<Actualite>
 *
 * @method Actualite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actualite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actualite[]    findAll()
 * @method Actualite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActualiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actualite::class);
    }

    public function save(Actualite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    

    public function remove(Actualite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function findByCriteria(array $criteria)
    {
        $query = $this->createQueryBuilder('a');
    
        if (!empty($criteria['titre'])) {
            $query->andWhere('a.titre LIKE :titre')
                  ->setParameter('titre', '%'.$criteria['titre'].'%');
        }
    
        if (!empty($criteria['dateDebut'])) {
            $query->andWhere('a.date >= :dateDebut')
                  ->setParameter('dateDebut', $criteria['dateDebut']);
        }
    
        if (!empty($criteria['dateFin'])) {
            $query->andWhere('a.date <= :dateFin')
                  ->setParameter('dateFin', $criteria['dateFin']);
        }
    
        return $query->getQuery()->getResult();
    }
     /**
     * Recherche les actualites en fonction du formulaire
     * @return void 
     */
    public function search($mots = null,$categorie=null){
        $query = $this->createQueryBuilder('a');
        
        if($mots != null){
            $query->andWhere('MATCH_AGAINST(a.Titre, a.Contenu) AGAINST (:mots boolean)>0')
                ->setParameter('mots', $mots);
        }
        if($categorie != null){
            $query->leftJoin('a.categorie', 'c');
            $query->andWhere('c.id = :id')
                ->setParameter('id', $categorie);
        }
        
        return $query->getQuery()->getResult();
    }

      /**
     * Returns tout les actualites par page
     * @return void 
     */
    public function getPaginatedActualites($page, $limit){
        $query = $this->createQueryBuilder('a');
        $query->orderBy('a.Date', 'DESC')
            ->setFirstResult(($page * $limit) - $limit)
            ->setMaxResults($limit)
        ;
        return $query->getQuery()->getResult();
    }
        /**
     * Returns nombres d'actualites
     * @return void 
     */
    public function getTotalActualites(){
        $query = $this->createQueryBuilder('a')
            ->select('COUNT(a)');
    
        return $query->getQuery()->getSingleScalarResult();
    }

//    /**
//     * @return Actualite[] Returns an array of Actualite objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Actualite
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
