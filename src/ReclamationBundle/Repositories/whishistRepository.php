<?php

/**
 * Created by PhpStorm.
 * User: émine
 * Date: 08/04/2017
 * Time: 18:16
 */

use Doctrine\ORM\EntityRepository;

class whishistRepository extends EntityRepository
{
    public function findByIdclient($idClient , $idProduit){
        $qb = $this->_em->createQueryBuilder();
        $qb->select('u')
            ->from('Entity\Whishlist', 'u')
            ->where('u.idclient = :id1')
            ->andWhere('u.idproduit = :id2')
            ->setParameter('id1', $idClient)
            ->setParameter('id2', $idProduit);

        return $qb->getQuery()->getResult();

      }

}