<?php

namespace Main\RatetradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CanadaCities
 */
class CanadaCities
{
    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $cityUrl;

    /**
     * @var integer
     */
    private $provinceId;

    /**
     * @var integer
     */
    private $showFlag;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set city
     *
     * @param string $city
     * @return CanadaCities
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set cityUrl
     *
     * @param string $cityUrl
     * @return CanadaCities
     */
    public function setCityUrl($cityUrl)
    {
        $this->cityUrl = $cityUrl;

        return $this;
    }

    /**
     * Get cityUrl
     *
     * @return string 
     */
    public function getCityUrl()
    {
        return $this->cityUrl;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return CanadaCities
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId = $provinceId;

        return $this;
    }

    /**
     * Get provinceId
     *
     * @return integer 
     */
    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * Set showFlag
     *
     * @param integer $showFlag
     * @return CanadaCities
     */
    public function setShowFlag($showFlag)
    {
        $this->showFlag = $showFlag;

        return $this;
    }

    /**
     * Get showFlag
     *
     * @return integer 
     */
    public function getShowFlag()
    {
        return $this->showFlag;
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
     * @var string
     */
    private $urlLink;

    /**
     * @var integer
     */
    private $urlFlag;


    /**
     * Set urlLink
     *
     * @param string $urlLink
     * @return CanadaCities
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

    /**
     * Set urlFlag
     *
     * @param integer $urlFlag
     * @return CanadaCities
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
}
