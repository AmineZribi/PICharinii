<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Whishlist
 *
 *
 * @ORM\Entity(repositoryClass="Repositories\whishistRepository")
 * @ORM\Table(name="whishlist", indexes={@ORM\Index(name="idClient", columns={"idClient"}), @ORM\Index(name="idProduit", columns={"idProduit"})})
 * @ORM\Entity
 *
 */


class Whishlist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduit", referencedColumnName="id")
     * })
     */
    private $idproduit;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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

    /**
     * @return \Produit
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * @param \Produit $idproduit
     */
    public function setIdproduit($idproduit)
    {
        $this->idproduit = $idproduit;
    }


}

