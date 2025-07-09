<?php

namespace Main\RatetradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MortgageRates
 */
class MortgageRates
{
    /**
     * @var float
     */
    private $rate;

    /**
     * @var integer
     */
    private $termid;

    /**
     * @var integer
     */
    private $rateTypeid;

    /**
     * @var integer
     */
    private $cityid;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set rate
     *
     * @param float $rate
     * @return MortgageRates
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return float 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set termid
     *
     * @param integer $termid
     * @return MortgageRates
     */
    public function setTermid($termid)
    {
        $this->termid = $termid;

        return $this;
    }

    /**
     * Get termid
     *
     * @return integer 
     */
    public function getTermid()
    {
        return $this->termid;
    }

    /**
     * Set rateTypeid
     *
     * @param integer $rateTypeid
     * @return MortgageRates
     */
    public function setRateTypeid($rateTypeid)
    {
        $this->rateTypeid = $rateTypeid;

        return $this;
    }

    /**
     * Get rateTypeid
     *
     * @return integer 
     */
    public function getRateTypeid()
    {
        return $this->rateTypeid;
    }

    /**
     * Set cityid
     *
     * @param integer $cityid
     * @return MortgageRates
     */
    public function setCityid($cityid)
    {
        $this->cityid = $cityid;

        return $this;
    }

    /**
     * Get cityid
     *
     * @return integer 
     */
    public function getCityid()
    {
        return $this->cityid;
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
