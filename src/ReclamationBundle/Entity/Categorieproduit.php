<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorieproduit
 *
 * @ORM\Table(name="categorieproduit")
 * @ORM\Entity
 */
class Categorieproduit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomcategorie", type="string", length=50, nullable=false)
     */
    private $nomcategorie;


}

