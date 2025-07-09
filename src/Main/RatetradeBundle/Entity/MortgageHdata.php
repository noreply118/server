<?php

namespace Main\RatetradeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MortgageHdata
 */
class MortgageHdata
{
    /**
     * @var string
     */
    
private $ptitle;

    /**
     * @var string
     */

private $mdescription;

    /**
     * @var string
     */

  private $id;
 public function getId()
    {
        return $this->id;
    }
    /**
     * @var integer
     */

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




}
