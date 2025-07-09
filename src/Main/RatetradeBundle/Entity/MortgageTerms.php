<?php

namespace Main\RatetradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MortgageTerms
 */
class MortgageTerms
{
    /**
     * @var string
     */
    private $term;

    /**
     * @var string
     */
    private $termUrl;

    /**
     * @var \DateTime
     */
    private $updateDateTime;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set term
     *
     * @param string $term
     * @return MortgageTerms
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return string 
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set termUrl
     *
     * @param string $termUrl
     * @return MortgageTerms
     */
    public function setTermUrl($termUrl)
    {
        $this->termUrl = $termUrl;

        return $this;
    }

    /**
     * Get termUrl
     *
     * @return string 
     */
    public function getTermUrl()
    {
        return $this->termUrl;
    }

    /**
     * Set updateDateTime
     *
     * @param \DateTime $updateDateTime
     * @return MortgageTerms
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
    /**
     * @var integer
     */
    private $urlFlag;


    /**
     * Set urlFlag
     *
     * @param integer $urlFlag
     * @return MortgageTerms
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
