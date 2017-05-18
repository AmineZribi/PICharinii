<?php

/**
 * Created by PhpStorm.
 * User: émine
 * Date: 08/04/2017
 * Time: 18:16
 */

use Doctrine\ORM\EntityRepository;

class ReclamationRepository extends EntityRepository
{
    public function findByProduit($id){


        $qb = $this->_em->createQueryBuilder();
        $qb->select('u.produit' , 'count(u.produit)')
            ->from('Entity\Reclamation', 'u')
            ->groupBy('u.produit')
            ->having('count(u.produit) > 2');



        return $qb->getQuery()->getResult();

      }

}