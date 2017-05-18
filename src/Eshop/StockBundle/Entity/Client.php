<?php

namespace Eshop\StockBundle\Entity;

/**
 * Client
 */
class Client
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var integer
     */
    private $nbreptfd;

    /**
     * @var string
     */
    private $cin;

    /**
     * @var string
     */
    private $sexe;

    /**
     * @var \DateTime
     */
    private $daten;

    /**
     * @var integer
     */
    private $tel;

    /**
     * @var boolean
     */
    private $activation;

    /**
     * @var boolean
     */
    private $banir;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Client
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set nbreptfd
     *
     * @param integer $nbreptfd
     *
     * @return Client
     */
    public function setNbreptfd($nbreptfd)
    {
        $this->nbreptfd = $nbreptfd;

        return $this;
    }

    /**
     * Get nbreptfd
     *
     * @return integer
     */
    public function getNbreptfd()
    {
        return $this->nbreptfd;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return Client
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Client
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set daten
     *
     * @param \DateTime $daten
     *
     * @return Client
     */
    public function setDaten($daten)
    {
        $this->daten = $daten;

        return $this;
    }

    /**
     * Get daten
     *
     * @return \DateTime
     */
    public function getDaten()
    {
        return $this->daten;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Client
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set activation
     *
     * @param boolean $activation
     *
     * @return Client
     */
    public function setActivation($activation)
    {
        $this->activation = $activation;

        return $this;
    }

    /**
     * Get activation
     *
     * @return boolean
     */
    public function getActivation()
    {
        return $this->activation;
    }

    /**
     * Set banir
     *
     * @param boolean $banir
     *
     * @return Client
     */
    public function setBanir($banir)
    {
        $this->banir = $banir;

        return $this;
    }

    /**
     * Get banir
     *
     * @return boolean
     */
    public function getBanir()
    {
        return $this->banir;
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

