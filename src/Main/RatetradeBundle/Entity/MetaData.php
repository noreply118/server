<?php

namespace Main\RatetradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CanadaCities
 */
class MetaData
{
    /**
     * @var string
     */
    private $page;

    /**
     * @var string
     */
    private $pageTitle;
    
    private $pageMetaDesc;

    /**
     * @var integer
     */
    private $pageMetaKey;

    /**
     * @var integer
     */
    private $pageContent;

    /**
     * @var integer
     */
    private $id;


    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    public function getPage()
    {
        return $this->page;
    }
    
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    public function setPageMetaDesc($pageMetaDesc)
    {
        $this->pageMetaDesc = $pageMetaDesc;

        return $this;
    }

    public function getPageMetaDesc()
    {
        return $this->pageMetaDesc;
    }

    public function setPageMetaKey($pageMetaKey)
    {
        $this->pageMetaKey = $pageMetaKey;

        return $this;
    }

    public function getPageMetaKey()
    {
        return $this->pageMetaKey;
    }

    public function setPageContent($pageContent)
    {
        $this->pageContent = $pageContent;

        return $this;
    }

    public function getPageContent()
    {
        return $this->pageContent;
    }

    public function getId()
    {
        return $this->id;
    }
}
