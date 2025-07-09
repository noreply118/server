<?php

namespace Main\RatetradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MortgageBrokers
 */
class MortgageBrokers
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
    private $photo;

    /**
     * @var integer
     */
    private $city;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $email;
    
     /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $brokerageName;

    /**
     * @var string
     */
    private $websiteUrl;
    
     /**
     * @var string
     */
    private $variableRateFive;
    
     /**
     * @var string
     */
    private $fixedRateFive;

    /**
     * @var string
     */
    private $about;

    /**
     * @var \DateTime
     */
    private $updateDateTime;
    
    /**
     * @var \DateTime
     */
    private $showFlag;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set fname
     *
     * @param string $fname
     * @return MortgageBrokers
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
     * Set fname
     *
     * @param string $fname
     * @return MortgageBrokers
     */
    public function setShowFlag($showFlag)
    {
        $this->showFlag = $showFlag;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getShowFlag()
    {
        return $this->showFlag;
    }

    /**
     * Set lname
     *
     * @param string $lname
     * @return MortgageBrokers
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
     * Set lname
     *
     * @param string $lname
     * @return MortgageBrokers
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    
    /**
     * Set city
     *
     * @param integer $city
     * @return MortgageBrokers
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return integer 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return MortgageBrokers
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
     * Set email
     *
     * @param string $email
     * @return MortgageBrokers
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
    
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set brokerageName
     *
     * @param string $brokerageName
     * @return MortgageBrokers
     */
    public function setBrokerageName($brokerageName)
    {
        $this->brokerageName = $brokerageName;

        return $this;
    }

    /**
     * Get brokerageName
     *
     * @return string 
     */
    public function getBrokerageName()
    {
        return $this->brokerageName;
    }

    /**
     * Set websiteUrl
     *
     * @param string $websiteUrl
     * @return MortgageBrokers
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;

        return $this;
    }

    /**
     * Get websiteUrl
     *
     * @return string 
     */
    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }
    
    public function setVariableRateFive($variableRateFive)
    {
        $this->variableRateFive = $variableRateFive;

        return $this;
    }

    /**
     * Get websiteUrl
     *
     * @return string 
     */
    public function getVariableRateFive()
    {
        return $this->variableRateFive;
    }
    
    public function setFixedRateFive($fixedRateFive)
    {
        $this->fixedRateFive = $fixedRateFive;

        return $this;
    }

    /**
     * Get websiteUrl
     *
     * @return string 
     */
    public function getFixedRateFive()
    {
        return $this->fixedRateFive;
    }

    /**
     * Set about
     *
     * @param string $about
     * @return MortgageBrokers
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set updateDateTime
     *
     * @param \DateTime $updateDateTime
     * @return MortgageBrokers
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
    private $variableRateOne;

    /**
     * @var integer
     */
    private $fixedRateOne;

    /**
     * @var integer
     */
    private $variableRateTwo;

    /**
     * @var integer
     */
    private $fixedRateTwo;

    /**
     * @var integer
     */
    private $variableRateThree;

    /**
     * @var integer
     */
    private $fixedRateThree;

    /**
     * @var integer
     */
    private $variableRateFour;

    /**
     * @var integer
     */
    private $fixedRateFour;

    /**
     * @var integer
     */
    private $variableRateSix;

    /**
     * @var integer
     */
    private $fixedRateSix;

    /**
     * @var integer
     */
    private $variableRateSeven;

    /**
     * @var integer
     */
    private $fixedRateSeven;

    /**
     * @var integer
     */
    private $variableRateEight;

    /**
     * @var integer
     */
    private $fixedRateEight;

    /**
     * @var integer
     */
    private $variableRateNine;

    /**
     * @var integer
     */
    private $fixedRateNine;

    /**
     * @var integer
     */
    private $variableRateTen;

    /**
     * @var integer
     */
    private $fixedRateTen;


    /**
     * Set variableRateOne
     *
     * @param integer $variableRateOne
     * @return MortgageBrokers
     */
    public function setVariableRateOne($variableRateOne)
    {
        $this->variableRateOne = $variableRateOne;

        return $this;
    }

    /**
     * Get variableRateOne
     *
     * @return integer 
     */
    public function getVariableRateOne()
    {
        return $this->variableRateOne;
    }

    /**
     * Set fixedRateOne
     *
     * @param integer $fixedRateOne
     * @return MortgageBrokers
     */
    public function setFixedRateOne($fixedRateOne)
    {
        $this->fixedRateOne = $fixedRateOne;

        return $this;
    }

    /**
     * Get fixedRateOne
     *
     * @return integer 
     */
    public function getFixedRateOne()
    {
        return $this->fixedRateOne;
    }

    /**
     * Set variableRateTwo
     *
     * @param integer $variableRateTwo
     * @return MortgageBrokers
     */
    public function setVariableRateTwo($variableRateTwo)
    {
        $this->variableRateTwo = $variableRateTwo;

        return $this;
    }

    /**
     * Get variableRateTwo
     *
     * @return integer 
     */
    public function getVariableRateTwo()
    {
        return $this->variableRateTwo;
    }

    /**
     * Set fixedRateTwo
     *
     * @param integer $fixedRateTwo
     * @return MortgageBrokers
     */
    public function setFixedRateTwo($fixedRateTwo)
    {
        $this->fixedRateTwo = $fixedRateTwo;

        return $this;
    }

    /**
     * Get fixedRateTwo
     *
     * @return integer 
     */
    public function getFixedRateTwo()
    {
        return $this->fixedRateTwo;
    }

    /**
     * Set variableRateThree
     *
     * @param integer $variableRateThree
     * @return MortgageBrokers
     */
    public function setVariableRateThree($variableRateThree)
    {
        $this->variableRateThree = $variableRateThree;

        return $this;
    }

    /**
     * Get variableRateThree
     *
     * @return integer 
     */
    public function getVariableRateThree()
    {
        return $this->variableRateThree;
    }

    /**
     * Set fixedRateThree
     *
     * @param integer $fixedRateThree
     * @return MortgageBrokers
     */
    public function setFixedRateThree($fixedRateThree)
    {
        $this->fixedRateThree = $fixedRateThree;

        return $this;
    }

    /**
     * Get fixedRateThree
     *
     * @return integer 
     */
    public function getFixedRateThree()
    {
        return $this->fixedRateThree;
    }

    /**
     * Set variableRateFour
     *
     * @param integer $variableRateFour
     * @return MortgageBrokers
     */
    public function setVariableRateFour($variableRateFour)
    {
        $this->variableRateFour = $variableRateFour;

        return $this;
    }

    /**
     * Get variableRateFour
     *
     * @return integer 
     */
    public function getVariableRateFour()
    {
        return $this->variableRateFour;
    }

    /**
     * Set fixedRateFour
     *
     * @param integer $fixedRateFour
     * @return MortgageBrokers
     */
    public function setFixedRateFour($fixedRateFour)
    {
        $this->fixedRateFour = $fixedRateFour;

        return $this;
    }

    /**
     * Get fixedRateFour
     *
     * @return integer 
     */
    public function getFixedRateFour()
    {
        return $this->fixedRateFour;
    }

    /**
     * Set variableRateSix
     *
     * @param integer $variableRateSix
     * @return MortgageBrokers
     */
    public function setVariableRateSix($variableRateSix)
    {
        $this->variableRateSix = $variableRateSix;

        return $this;
    }

    /**
     * Get variableRateSix
     *
     * @return integer 
     */
    public function getVariableRateSix()
    {
        return $this->variableRateSix;
    }

    /**
     * Set fixedRateSix
     *
     * @param integer $fixedRateSix
     * @return MortgageBrokers
     */
    public function setFixedRateSix($fixedRateSix)
    {
        $this->fixedRateSix = $fixedRateSix;

        return $this;
    }

    /**
     * Get fixedRateSix
     *
     * @return integer 
     */
    public function getFixedRateSix()
    {
        return $this->fixedRateSix;
    }

    /**
     * Set variableRateSeven
     *
     * @param integer $variableRateSeven
     * @return MortgageBrokers
     */
    public function setVariableRateSeven($variableRateSeven)
    {
        $this->variableRateSeven = $variableRateSeven;

        return $this;
    }

    /**
     * Get variableRateSeven
     *
     * @return integer 
     */
    public function getVariableRateSeven()
    {
        return $this->variableRateSeven;
    }

    /**
     * Set fixedRateSeven
     *
     * @param integer $fixedRateSeven
     * @return MortgageBrokers
     */
    public function setFixedRateSeven($fixedRateSeven)
    {
        $this->fixedRateSeven = $fixedRateSeven;

        return $this;
    }

    /**
     * Get fixedRateSeven
     *
     * @return integer 
     */
    public function getFixedRateSeven()
    {
        return $this->fixedRateSeven;
    }

    /**
     * Set variableRateEight
     *
     * @param integer $variableRateEight
     * @return MortgageBrokers
     */
    public function setVariableRateEight($variableRateEight)
    {
        $this->variableRateEight = $variableRateEight;

        return $this;
    }

    /**
     * Get variableRateEight
     *
     * @return integer 
     */
    public function getVariableRateEight()
    {
        return $this->variableRateEight;
    }

    /**
     * Set fixedRateEight
     *
     * @param integer $fixedRateEight
     * @return MortgageBrokers
     */
    public function setFixedRateEight($fixedRateEight)
    {
        $this->fixedRateEight = $fixedRateEight;

        return $this;
    }

    /**
     * Get fixedRateEight
     *
     * @return integer 
     */
    public function getFixedRateEight()
    {
        return $this->fixedRateEight;
    }

    /**
     * Set variableRateNine
     *
     * @param integer $variableRateNine
     * @return MortgageBrokers
     */
    public function setVariableRateNine($variableRateNine)
    {
        $this->variableRateNine = $variableRateNine;

        return $this;
    }

    /**
     * Get variableRateNine
     *
     * @return integer 
     */
    public function getVariableRateNine()
    {
        return $this->variableRateNine;
    }

    /**
     * Set fixedRateNine
     *
     * @param integer $fixedRateNine
     * @return MortgageBrokers
     */
    public function setFixedRateNine($fixedRateNine)
    {
        $this->fixedRateNine = $fixedRateNine;

        return $this;
    }

    /**
     * Get fixedRateNine
     *
     * @return integer 
     */
    public function getFixedRateNine()
    {
        return $this->fixedRateNine;
    }

    /**
     * Set variableRateTen
     *
     * @param integer $variableRateTen
     * @return MortgageBrokers
     */
    public function setVariableRateTen($variableRateTen)
    {
        $this->variableRateTen = $variableRateTen;

        return $this;
    }

    /**
     * Get variableRateTen
     *
     * @return integer 
     */
    public function getVariableRateTen()
    {
        return $this->variableRateTen;
    }

    /**
     * Set fixedRateTen
     *
     * @param integer $fixedRateTen
     * @return MortgageBrokers
     */
    public function setFixedRateTen($fixedRateTen)
    {
        $this->fixedRateTen = $fixedRateTen;

        return $this;
    }

    /**
     * Get fixedRateTen
     *
     * @return integer 
     */
    public function getFixedRateTen()
    {
        return $this->fixedRateTen;
    }
    /**
     * @var string
     */
    private $brokerageLic;

    /**
     * @var string
     */
    private $ciscoRegNum;

    /**
     * @var string
     */
    private $lifeRegAuth;


    /**
     * Set brokerageLic
     *
     * @param string $brokerageLic
     * @return MortgageBrokers
     */
    public function setBrokerageLic($brokerageLic)
    {
        $this->brokerageLic = $brokerageLic;

        return $this;
    }

    /**
     * Get brokerageLic
     *
     * @return string 
     */
    public function getBrokerageLic()
    {
        return $this->brokerageLic;
    }

    /**
     * Set ciscoRegNum
     *
     * @param string $ciscoRegNum
     * @return MortgageBrokers
     */
    public function setCiscoRegNum($ciscoRegNum)
    {
        $this->ciscoRegNum = $ciscoRegNum;

        return $this;
    }

    /**
     * Get ciscoRegNum
     *
     * @return string 
     */
    public function getCiscoRegNum()
    {
        return $this->ciscoRegNum;
    }

    /**
     * Set lifeRegAuth
     *
     * @param string $lifeRegAuth
     * @return MortgageBrokers
     */
    public function setLifeRegAuth($lifeRegAuth)
    {
        $this->lifeRegAuth = $lifeRegAuth;

        return $this;
    }

    /**
     * Get lifeRegAuth
     *
     * @return string 
     */
    public function getLifeRegAuth()
    {
        return $this->lifeRegAuth;
    }
}
