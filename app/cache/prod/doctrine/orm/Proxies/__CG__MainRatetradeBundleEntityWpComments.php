<?php

namespace Proxies\__CG__\Main\RatetradeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class WpComments extends \Main\RatetradeBundle\Entity\WpComments implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentPostId', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentAuthor', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentAuthorEmail', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentAuthorUrl', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentAuthorIp', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentDate', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentDateGmt', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentContent', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentKarma', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentApproved', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentAgent', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentType', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentParent', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'userId', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentId');
        }

        return array('__isInitialized__', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentPostId', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentAuthor', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentAuthorEmail', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentAuthorUrl', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentAuthorIp', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentDate', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentDateGmt', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentContent', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentKarma', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentApproved', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentAgent', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentType', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentParent', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'userId', '' . "\0" . 'Main\\RatetradeBundle\\Entity\\WpComments' . "\0" . 'commentId');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (WpComments $proxy) {
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
    public function setCommentPostId($commentPostId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentPostId', array($commentPostId));

        return parent::setCommentPostId($commentPostId);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentPostId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentPostId', array());

        return parent::getCommentPostId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentAuthor($commentAuthor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentAuthor', array($commentAuthor));

        return parent::setCommentAuthor($commentAuthor);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentAuthor', array());

        return parent::getCommentAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentAuthorEmail($commentAuthorEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentAuthorEmail', array($commentAuthorEmail));

        return parent::setCommentAuthorEmail($commentAuthorEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentAuthorEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentAuthorEmail', array());

        return parent::getCommentAuthorEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentAuthorUrl($commentAuthorUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentAuthorUrl', array($commentAuthorUrl));

        return parent::setCommentAuthorUrl($commentAuthorUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentAuthorUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentAuthorUrl', array());

        return parent::getCommentAuthorUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentAuthorIp($commentAuthorIp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentAuthorIp', array($commentAuthorIp));

        return parent::setCommentAuthorIp($commentAuthorIp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentAuthorIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentAuthorIp', array());

        return parent::getCommentAuthorIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentDate($commentDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentDate', array($commentDate));

        return parent::setCommentDate($commentDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentDate', array());

        return parent::getCommentDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentDateGmt($commentDateGmt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentDateGmt', array($commentDateGmt));

        return parent::setCommentDateGmt($commentDateGmt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentDateGmt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentDateGmt', array());

        return parent::getCommentDateGmt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentContent($commentContent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentContent', array($commentContent));

        return parent::setCommentContent($commentContent);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentContent', array());

        return parent::getCommentContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentKarma($commentKarma)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentKarma', array($commentKarma));

        return parent::setCommentKarma($commentKarma);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentKarma()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentKarma', array());

        return parent::getCommentKarma();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentApproved($commentApproved)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentApproved', array($commentApproved));

        return parent::setCommentApproved($commentApproved);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentApproved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentApproved', array());

        return parent::getCommentApproved();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentAgent($commentAgent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentAgent', array($commentAgent));

        return parent::setCommentAgent($commentAgent);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentAgent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentAgent', array());

        return parent::getCommentAgent();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentType($commentType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentType', array($commentType));

        return parent::setCommentType($commentType);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentType', array());

        return parent::getCommentType();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentParent($commentParent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentParent', array($commentParent));

        return parent::setCommentParent($commentParent);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentParent', array());

        return parent::getCommentParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserId($userId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserId', array($userId));

        return parent::setUserId($userId);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', array());

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getCommentId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentId', array());

        return parent::getCommentId();
    }

}
