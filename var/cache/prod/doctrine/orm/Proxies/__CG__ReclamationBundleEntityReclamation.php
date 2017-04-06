<?php

namespace Proxies\__CG__\ReclamationBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Reclamation extends \ReclamationBundle\Entity\Reclamation implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'idreclamation', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'sujetreclamation', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'descriptionreclamation', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'datereclamation', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'statusreclamation', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'idclient', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'nomproduit'];
        }

        return ['__isInitialized__', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'idreclamation', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'sujetreclamation', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'descriptionreclamation', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'datereclamation', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'statusreclamation', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'idclient', '' . "\0" . 'ReclamationBundle\\Entity\\Reclamation' . "\0" . 'nomproduit'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Reclamation $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdreclamation()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdreclamation();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdreclamation', []);

        return parent::getIdreclamation();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdreclamation($idreclamation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdreclamation', [$idreclamation]);

        return parent::setIdreclamation($idreclamation);
    }

    /**
     * {@inheritDoc}
     */
    public function getSujetreclamation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSujetreclamation', []);

        return parent::getSujetreclamation();
    }

    /**
     * {@inheritDoc}
     */
    public function setSujetreclamation($sujetreclamation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSujetreclamation', [$sujetreclamation]);

        return parent::setSujetreclamation($sujetreclamation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionreclamation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionreclamation', []);

        return parent::getDescriptionreclamation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionreclamation($descriptionreclamation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionreclamation', [$descriptionreclamation]);

        return parent::setDescriptionreclamation($descriptionreclamation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatereclamation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatereclamation', []);

        return parent::getDatereclamation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatereclamation($datereclamation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatereclamation', [$datereclamation]);

        return parent::setDatereclamation($datereclamation);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusreclamation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusreclamation', []);

        return parent::getStatusreclamation();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatusreclamation($statusreclamation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatusreclamation', [$statusreclamation]);

        return parent::setStatusreclamation($statusreclamation);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdclient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdclient', []);

        return parent::getIdclient();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdclient($idclient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdclient', [$idclient]);

        return parent::setIdclient($idclient);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomproduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomproduit', []);

        return parent::getNomproduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomproduit($nomproduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomproduit', [$nomproduit]);

        return parent::setNomproduit($nomproduit);
    }

}