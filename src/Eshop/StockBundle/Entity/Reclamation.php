<?php

namespace Eshop\StockBundle\Entity;

/**
 * Reclamation
 */
class Reclamation
{
    /**
     * @var string
     */
    private $sujetreclamation;

    /**
     * @var string
     */
    private $descriptionreclamation;

    /**
     * @var \DateTime
     */
    private $datereclamation = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $statusreclamation;

    /**
     * @var integer
     */
    private $idclient;

    /**
     * @var string
     */
    private $nomproduit;

    /**
     * @var integer
     */
    private $idreclamation;


    /**
     * Set sujetreclamation
     *
     * @param string $sujetreclamation
     *
     * @return Reclamation
     */
    public function setSujetreclamation($sujetreclamation)
    {
        $this->sujetreclamation = $sujetreclamation;

        return $this;
    }

    /**
     * Get sujetreclamation
     *
     * @return string
     */
    public function getSujetreclamation()
    {
        return $this->sujetreclamation;
    }

    /**
     * Set descriptionreclamation
     *
     * @param string $descriptionreclamation
     *
     * @return Reclamation
     */
    public function setDescriptionreclamation($descriptionreclamation)
    {
        $this->descriptionreclamation = $descriptionreclamation;

        return $this;
    }

    /**
     * Get descriptionreclamation
     *
     * @return string
     */
    public function getDescriptionreclamation()
    {
        return $this->descriptionreclamation;
    }

    /**
     * Set datereclamation
     *
     * @param \DateTime $datereclamation
     *
     * @return Reclamation
     */
    public function setDatereclamation($datereclamation)
    {
        $this->datereclamation = $datereclamation;

        return $this;
    }

    /**
     * Get datereclamation
     *
     * @return \DateTime
     */
    public function getDatereclamation()
    {
        return $this->datereclamation;
    }

    /**
     * Set statusreclamation
     *
     * @param string $statusreclamation
     *
     * @return Reclamation
     */
    public function setStatusreclamation($statusreclamation)
    {
        $this->statusreclamation = $statusreclamation;

        return $this;
    }

    /**
     * Get statusreclamation
     *
     * @return string
     */
    public function getStatusreclamation()
    {
        return $this->statusreclamation;
    }

    /**
     * Set idclient
     *
     * @param integer $idclient
     *
     * @return Reclamation
     */
    public function setIdclient($idclient)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return integer
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set nomproduit
     *
     * @param string $nomproduit
     *
     * @return Reclamation
     */
    public function setNomproduit($nomproduit)
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }

    /**
     * Get nomproduit
     *
     * @return string
     */
    public function getNomproduit()
    {
        return $this->nomproduit;
    }

    /**
     * Get idreclamation
     *
     * @return integer
     */
    public function getIdreclamation()
    {
        return $this->idreclamation;
    }
}

