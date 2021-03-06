<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Entity(repositoryClass="Repositories\ReclamationRechercheRepository")
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="IDX_CE606404F347EFB", columns={"produit_id"}), @ORM\Index(name="IDX_CE60640467F0C0D4", columns={"idclient_id"})})
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
     * @var string
     *
     * @ORM\Column(name="dateReclamation", type="string", length=255, nullable=true)
     */
    private $datereclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="statusReclamation", type="string", length=50, nullable=false)
     */
    private $statusreclamation;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     * })
     */
    private $produit;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idclient_id", referencedColumnName="id")
     * })
     */
    private $idclient;

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
     * @return string
     */
    public function getDatereclamation()
    {
        return $this->datereclamation;
    }

    /**
     * @param string $datereclamation
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
     * @return \Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param \Produit $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    /**
     * @return \Utilisateur
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * @param \Utilisateur $idclient
     */
    public function setIdclient($idclient)
    {
        $this->idclient = $idclient;
    }


}

