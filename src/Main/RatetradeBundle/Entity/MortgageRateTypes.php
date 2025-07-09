<?php

namespace Main\RatetradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MortgageRateTypes
 */
class MortgageRateTypes
{
    /**
     * @var string
     */
    private $rateType;

    /**
     * @var string
     */
    private $rateTypeUrl;

    /**
     * @var \DateTime
     */
    private $updateDateTime;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set rateType
     *
     * @param string $rateType
     * @return MortgageRateTypes
     */
    public function setRateType($rateType)
    {
        $this->rateType = $rateType;

        return $this;
    }

    /**
     * Get rateType
     *
     * @return string 
     */
    public function getRateType()
    {
        return $this->rateType;
    }

    /**
     * Set rateTypeUrl
     *
     * @param string $rateTypeUrl
     * @return MortgageRateTypes
     */
    public function setRateTypeUrl($rateTypeUrl)
    {
        $this->rateTypeUrl = $rateTypeUrl;

        return $this;
    }

    /**
     * Get rateTypeUrl
     *
     * @return string 
     */
    public function getRateTypeUrl()
    {
        return $this->rateTypeUrl;
    }

    /**
     * Set updateDateTime
     *
     * @param \DateTime $updateDateTime
     * @return MortgageRateTypes
     */
    public function setUpdateDateTime($updateDateTime)
    {
        $this->updateDateTime = $updateDateTime;

        return $this;
    }

    /**
     * Get updateDateTime
     *
     * @return \DateTime 
     */
    public function getUpdateDateTime()
    {
        return $this->updateDateTime;
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
