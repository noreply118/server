<?php

namespace Main\RatetradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailSubscription
 */
class EmailSubscription
{
    /**
     * @var string
     */
    private $fname;

    /**
     * @var string
     */
    private $lname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;
    
    /**
     * @var string
     */
    private $bestTime;
    
    /**
     * @var string
     */
    private $location;
    
    /**
     * @var string
     */
    private $purpose;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $updateDateTime;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set fname
     *
     * @param string $fname
     * @return EmailSubscription
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     * @return EmailSubscription
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return EmailSubscription
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return EmailSubscription
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
     /**
     * Set phone
     *
     * @param string $phone
     * @return EmailSubscription
     */
    public function setBestTime($bestTime)
    {
        $this->bestTime = $bestTime;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getBestTime()
    {
        return $this->bestTime;
    }
    
     /**
     * Set phone
     *
     * @param string $phone
     * @return EmailSubscription
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }
    
     /**
     * Set phone
     *
     * @param string $phone
     * @return EmailSubscription
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPurpose()
    {
        return $this->purpose;
    }
        

    /**
     * Set message
     *
     * @param string $message
     * @return EmailSubscription
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set updateDateTime
     *
     * @param \DateTime $updateDateTime
     * @return EmailSubscription
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
