<?php

namespace Proxies\__CG__\Main\RatetradeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class WpTermTaxonomy extends \Main\RatetradeBundle\Entity\WpTermTaxonomy implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'termId', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'taxonomy', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'description', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'parent', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'count', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'termTaxonomyId');
        }

        return array('__isInitialized__', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'termId', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'taxonomy', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'description', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'parent', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'count', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpTermTaxonomy' . "\0" . 'termTaxonomyId');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (WpTermTaxonomy $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function setTermId($termId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTermId', array($termId));

        return parent::setTermId($termId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTermId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTermId', array());

        return parent::getTermId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxonomy($taxonomy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxonomy', array($taxonomy));

        return parent::setTaxonomy($taxonomy);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxonomy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxonomy', array());

        return parent::getTaxonomy();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent($parent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', array($parent));

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', array());

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setCount($count)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCount', array($count));

        return parent::setCount($count);
    }

    /**
     * {@inheritDoc}
     */
    public function getCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCount', array());

        return parent::getCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getTermTaxonomyId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getTermTaxonomyId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTermTaxonomyId', array());

        return parent::getTermTaxonomyId();
    }

}
