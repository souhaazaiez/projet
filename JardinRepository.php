<?php

namespace JardinBundle\Repository;

/**
 * JardinRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class JardinRepository extends \Doctrine\ORM\EntityRepository
{

    public function findBynom($nom)
    {
        {
            $query = $this->getEntityManager()
                ->createQuery("select v from JardinBundle:Jardin v 
                                
                                    where v.nom like :nom 
                                    ")

                ->setParameter('nom', '%' . $nom . '%');
            return $query->getResult();


        }
    }
    public function findByadress($paysDestination)
    {
        {
            $query = $this->getEntityManager()
                ->createQuery("select v from JardinBundle:Jardin v 
                                    where v.address like :address  
                                   
                                    ORDER BY v.address ASC")
                ->setParameter('address', '%' . $paysDestination . '%');

            return $query->getResult();


        }
    }
    public function findBynomadress($paysDestination,$nom)
    {
        {
            $query = $this->getEntityManager()
                ->createQuery("select v from JardinBundle:Jardin v 
                                    where v.address like :address and 
                                     v.nom like :nom 
                                    ORDER BY v.address ASC")
                ->setParameter('address', '%' . $paysDestination . '%')
                ->setParameter('nom', '%' . $nom . '%');
            return $query->getResult();


        }
    }
}
