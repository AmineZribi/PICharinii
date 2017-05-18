<?php

namespace Eshop\StockBundle\Entity;

/**
 * Categorieproduit
 */
class Categorieproduit
{
    /**
     * @var string
     */
    private $nomcategorie;

    /**
     * @var integer
     */
    private $idcategorie;


    /**
     * Set nomcategorie
     *
     * @param string $nomcategorie
     *
     * @return Categorieproduit
     */
    public function setNomcategorie($nomcategorie)
    {
        $this->nomcategorie = $nomcategorie;

        return $this;
    }

    /**
     * Get nomcategorie
     *
     * @return string
     */
    public function getNomcategorie()
    {
        return $this->nomcategorie;
    }

    /**
     * Get idcategorie
     *
     * @return integer
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }
}

