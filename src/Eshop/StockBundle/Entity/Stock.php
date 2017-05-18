<?php

namespace Eshop\StockBundle\Entity;

/**
 * Stock
 */
class Stock
{
    /**
     * @var integer
     */
    private $quantite;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Stock
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
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

