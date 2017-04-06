<?php

/**
 * Created by PhpStorm.
 * User: azizbessrour
 * Date: 3/25/17
 * Time: 2:58 PM
 */


namespace UserBundle \Entity;

use FOS\UserBundle\Model\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;

/**

 * @ORM\Entity

 * @ORM\Table(name="utilisateur")

 */

class User extends BaseUser

{

/**

 * @ORM\Id

 * @ORM\Column(type="integer")

 * @ORM\GeneratedValue(strategy="AUTO")

 */
protected $id;


/**
 * @ORM\Column(type="string",length=255)
 *
 */
private $fullname;



/**
 * @ORM\Column(type="string",length=255)
 *
 */
private $adresse;


/**
 * @ORM\Column(type="string",length=255)
 *
 */
private $genre;

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }










}