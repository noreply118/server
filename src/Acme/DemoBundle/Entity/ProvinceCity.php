<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProvinceCity
 */
class ProvinceCity
{
    /**
     * @var string
     */
    private $provinceShort;

    /**
     * @var string
     */
    private $city;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set provinceShort
     *
     * @param string $provinceShort
     * @return ProvinceCity
     */
    public function setProvinceShort($provinceShort)
    {
        $this->provinceShort = $provinceShort;

        return $this;
    }

    /**
     * Get provinceShort
     *
     * @return string 
     */
    public function getProvinceShort()
    {
        return $this->provinceShort;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return ProvinceCity
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
