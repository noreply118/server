<?php

namespace Main\RatetradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CanadaProvince
 */
class CanadaProvince
{
    /**
     * @var string
     */
    private $province;

    /**
     * @var string
     */
    private $provinceUrl;

    /**
     * @var string
     */
    private $shortform;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set province
     *
     * @param string $province
     * @return CanadaProvince
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string 
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set provinceUrl
     *
     * @param string $provinceUrl
     * @return CanadaProvince
     */
    public function setProvinceUrl($provinceUrl)
    {
        $this->provinceUrl = $provinceUrl;

        return $this;
    }

    /**
     * Get provinceUrl
     *
     * @return string 
     */
    public function getProvinceUrl()
    {
        return $this->provinceUrl;
    }

    /**
     * Set shortform
     *
     * @param string $shortform
     * @return CanadaProvince
     */
    public function setShortform($shortform)
    {
        $this->shortform = $shortform;

        return $this;
    }

    /**
     * Get shortform
     *
     * @return string 
     */
    public function getShortform()
    {
        return $this->shortform;
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
    /**
     * @var integer
     */
    private $urlFlag;


    /**
     * Set urlFlag
     *
     * @param integer $urlFlag
     * @return CanadaProvince
     */
    public function setUrlFlag($urlFlag)
    {
        $this->urlFlag = $urlFlag;

        return $this;
    }

    /**
     * Get urlFlag
     *
     * @return integer 
     */
    public function getUrlFlag()
    {
        return $this->urlFlag;
    }
    /**
     * @var string
     */
    private $urlLink;


    /**
     * Set urlLink
     *
     * @param string $urlLink
     * @return CanadaProvince
     */
    public function setUrlLink($urlLink)
    {
        $this->urlLink = $urlLink;

        return $this;
    }

    /**
     * Get urlLink
     *
     * @return string 
     */
    public function getUrlLink()
    {
        return $this->urlLink;
    }
}
