<?php

namespace Main\RatetradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EducationCentre
 */
class EducationCentre
{
    /**
     * @var string
     */
    private $category;

    /**
     * @var integer
     */
    private $parentCategory;
    
    private $image;

    /**
     * @var string
     */
    private $pageUrl;

    /**
     * @var string
     */
    private $pageMeta;

    /**
     * @var string
     */
    private $pageContent;

    /**
     * @var \DateTime
     */
private $ptitle;

    /**
     * @var string
     */
private $mdescription;

    /**
     * @var string
     */
private $mkeywords;

    /**
     * @var string
     */
    private $updateDateTime;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set category
     *
     * @param string $category
     * @return EducationCentre
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set parentCategory
     *
     * @param integer $parentCategory
     * @return EducationCentre
     */
    public function setParentCategory($parentCategory)
    {
        $this->parentCategory = $parentCategory;

        return $this;
    }

    /**
     * Get parentCategory
     *
     * @return integer 
     */
    public function getParentCategory()
    {
        return $this->parentCategory;
    }
    
    /**
     * Set parentCategory
     *
     * @param integer $parentCategory
     * @return EducationCentre
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get parentCategory
     *
     * @return integer 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set pageUrl
     *
     * @param string $pageUrl
     * @return EducationCentre
     */
    public function setPageUrl($pageUrl)
    {
        $this->pageUrl = $pageUrl;

        return $this;
    }

    /**
     * Get pageUrl
     *
     * @return string 
     */
    public function getPageUrl()
    {
        return $this->pageUrl;
    }

    /**
     * Set pageMeta
     *
     * @param string $pageMeta
     * @return EducationCentre
     */
    public function setPageMeta($pageMeta)
    {
        $this->pageMeta = $pageMeta;

        return $this;
    }

    /**
     * Get pageMeta
     *
     * @return string 
     */
    public function getPageMeta()
    {
        return $this->pageMeta;
    }

    /**
     * Set pageContent
     *
     * @param string $pageContent
     * @return EducationCentre
     */
    public function setPageContent($pageContent)
    {
        $this->pageContent = $pageContent;

        return $this;
    }

    /**
     * Get pageContent
     *
     * @return string 
     */
    public function getPageContent()
    {
        return $this->pageContent;
    }

 public function setPtitle($ptitle)
    {
        $this->ptitle = $ptitle;

        return $this;
    }



 public function getPtitle()
    {
        return $this->ptitle;
    }



public function setMdescription($mdescription)
    {
        $this->mdescription= $mdescription;

        return $this;
    }



 public function getMdescription()
    {
        return $this->mdescription;
    }



public function setMkeywords($mkeywords)
    {
        $this->mkeywords = $mkeywords;

        return $this;
    }



 public function getMkeywords()
    {
        return $this->mkeywords;
    }

    /**
     * Set updateDateTime
     *
     * @param \DateTime $updateDateTime
     * @return EducationCentre
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
     * @var string
     */
    private $parentPageContent;


    /**
     * Set parentPageContent
     *
     * @param string $parentPageContent
     * @return EducationCentre
     */
    public function setParentPageContent($parentPageContent)
    {
        $this->parentPageContent = $parentPageContent;

        return $this;
    }

    /**
     * Get parentPageContent
     *
     * @return string 
     */
    public function getParentPageContent()
    {
        return $this->parentPageContent;
    }
}
