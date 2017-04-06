<?php

namespace ReclamationBundle\Entity;
use ReclamationBundle\Entity\Produit;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="sujetReclamation", type="string", length=200, nullable=false)
     */
    private $sujetreclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionReclamation", type="string", length=200, nullable=false)
     */
    private $descriptionreclamation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReclamation", type="string", nullable=true)
     */
    private $datereclamation = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="statusReclamation", type="string", length=50, nullable=false)
     */
    private $statusreclamation;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     */
    private $idclient;

    /**
     * @ORM\ManyToOne(targetEntity="Produit")
     */
    private $produit;

    /**
     * @return int
     */
    public function getIdreclamation()
    {
        return $this->idreclamation;
    }

    /**
     * @param int $idreclamation
     */
    public function setIdreclamation($idreclamation)
    {
        $this->idreclamation = $idreclamation;
    }

    /**
     * @return string
     */
    public function getSujetreclamation()
    {
        return $this->sujetreclamation;
    }

    /**
     * @param string $sujetreclamation
     */
    public function setSujetreclamation($sujetreclamation)
    {
        $this->sujetreclamation = $sujetreclamation;
    }

    /**
     * @return string
     */
    public function getDescriptionreclamation()
    {
        return $this->descriptionreclamation;
    }

    /**
     * @param string $descriptionreclamation
     */
    public function setDescriptionreclamation($descriptionreclamation)
    {
        $this->descriptionreclamation = $descriptionreclamation;
    }

    /**
     * @return \DateTime
     */
    public function getDatereclamation()
    {
        return $this->datereclamation;
    }

    /**
     * @param \DateTime $datereclamation
     */
    public function setDatereclamation($datereclamation)
    {
        $this->datereclamation = $datereclamation;
    }

    /**
     * @return string
     */
    public function getStatusreclamation()
    {
        return $this->statusreclamation;
    }

    /**
     * @param string $statusreclamation
     */
    public function setStatusreclamation($statusreclamation)
    {
        $this->statusreclamation = $statusreclamation;
    }

    /**
     * @return mixed
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * @param mixed $idclient
     */
    public function setIdclient($idclient)
    {
        $this->idclient = $idclient;
    }


    /**
     * @return int
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param int $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }


}

