<?php

namespace Eshop\StockBundle\Entity;

/**
 * Categorie
 */
class Categorie
{
    /**
     * @var string
     */
    private $libelle;

    /**
     * @var string
     */
    private $product_img;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Categorie
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set product_img
     *
     * @param string $product_img
     *
     * @return Categorie
     */
    public function setProduct_img($nomImage)
    {
        $this->product_img = product_img;

        return $this;
    }

    /**
     * Get product_img
     *
     * @return string
     */
    public function getProduct_img()
    {
        return $this->product_img;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

