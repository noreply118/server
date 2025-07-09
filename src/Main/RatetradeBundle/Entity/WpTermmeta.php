<?php

namespace Main\RatetradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpTermmeta
 */
class WpTermmeta
{
    /**
     * @var integer
     */
    private $termId;

    /**
     * @var string
     */
    private $metaKey;

    /**
     * @var string
     */
    private $metaValue;

    /**
     * @var integer
     */
    private $metaId;


    /**
     * Set termId
     *
     * @param integer $termId
     * @return WpTermmeta
     */
    public function setTermId($termId)
    {
        $this->termId = $termId;

        return $this;
    }

    /**
     * Get termId
     *
     * @return integer 
     */
    public function getTermId()
    {
        return $this->termId;
    }

    /**
     * Set metaKey
     *
     * @param string $metaKey
     * @return WpTermmeta
     */
    public function setMetaKey($metaKey)
    {
        $this->metaKey = $metaKey;

        return $this;
    }

    /**
     * Get metaKey
     *
     * @return string 
     */
    public function getMetaKey()
    {
        return $this->metaKey;
    }

    /**
     * Set metaValue
     *
     * @param string $metaValue
     * @return WpTermmeta
     */
    public function setMetaValue($metaValue)
    {
        $this->metaValue = $metaValue;

        return $this;
    }

    /**
     * Get metaValue
     *
     * @return string 
     */
    public function getMetaValue()
    {
        return $this->metaValue;
    }

    /**
     * Get metaId
     *
     * @return integer 
     */
    public function getMetaId()
    {
        return $this->metaId;
    }
}
