<?php
namespace Main\RatetradeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
$request = Request::createFromGlobals();
use Main\RatetradeBundle\Entity\EmailSubscription;
use Main\RatetradeBundle\Entity\MortgageBrokers;

date_default_timezone_set('America/Toronto');

class DefaultController extends Controller {
    public function homepageAction() {
		
		$em = $this->getDoctrine()->getManager();

        $ratetypes = $em->getRepository('MainRatetradeBundle:MortgageRateTypes')->findAll();

        $terms = $em->getRepository('MainRatetradeBundle:MortgageTerms')->findAll(); 

        $termds = $em->getRepository('MainRatetradeBundle:MortgageHdata')->findAll();

        $comments= $em->getRepository('MainRatetradeBundle:WpComments')->findAll();

       $blogpost= $em->getRepository('MainRatetradeBundle:WpPosts')->findAll();

       $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findByShowFlag("1");
    if($_SERVER['REMOTE_ADDR'] === '125.16.226.163') {
       var_dump($em);
    }
     
       
        return $this->render('MainRatetradeBundle:Default:homepage.html.twig',array('ratetype' => $ratetypes,
                    'terms' => $terms, 'termds' => $termds, 'comments' => $comments, 'blogpost' => $blogpost,
                    'cities' => $cities));
    }
    
    public function getProvinceCityAction($provinceid) {

        $em = $this->getDoctrine()->getManager();
 
        $query = "select c.city from MainRatetradeBundle:CanadaCities c,MainRatetradeBundle:CanadaProvince p where c.provinceId = p.id and p.shortform = '".$provinceid."'";

        $cities = $em->createQuery($query)->getResult();

        echo json_encode($cities);
        
        exit;
    }
    
    public function DetectCityAction() {
        return $this->render('MainRatetradeBundle:Default:citydetct.html.twig');
    }

    public function DynamicPageAction($urlparam) {
        //  var_dump($urlparam);
        
     if($urlparam=='compare-rates'):
        header("Location:compare-mortgage-rates",TRUE,301);
        exit();
      endif;
        $em = $this->getDoctrine()->getManager();

        $educationpage = $em->getRepository('MainRatetradeBundle:EducationCentre')->findOneByPageUrl($urlparam);
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
      
        $province = $em->getRepository('MainRatetradeBundle:CanadaProvince')->findAll();
        
        if (sizeof($educationpage) > 0) {
            if ($educationpage->getParentCategory() == '0') {
                $educationdata = $em->getRepository('MainRatetradeBundle:EducationCentre')->findByParentCategory($educationpage->getId());

                return $this->render('MainRatetradeBundle:Default:ParentGuide.html.twig', array('educationdata' => $educationdata, 'educationall' => $educationpageall,'pgtitle' => $educationpage->getPtitle(),'mdesc' => $educationpage->getMdescription(), 'mkeywords' => $educationpage->getMkeywords(), 
                            'parentcat' => $educationpage));
            } else {
                $parentcatobj = $em->getRepository('MainRatetradeBundle:EducationCentre')->find($educationpage->getParentCategory());
                $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();
            //   return 'okay';
                return $this->render('MainRatetradeBundle:Default:GuideDesc.html.twig', array('cities'=>$cities,'category' => $educationpage->getCategory(), 'guidedesc' => $educationpage->getPageContent(),'pgtitle' => $educationpage->getPtitle(),'mdesc' => $educationpage->getMdescription(),   'mkeywords' => $educationpage->getMkeywords(),
                            'educationall' => $educationpageall, 'cat' => $educationpage, 'parentcat' => $parentcatobj, 'province'=> $province));
            }
        }
    }
    
    public function MortgageRenewalsAction($city) {

        $em = $this->getDoctrine()->getManager();

        $educationpage = $em->getRepository('MainRatetradeBundle:EducationCentre')->findOneByPageUrl("mortgage-renewal-process");
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();

        $target_province = $em->getRepository('MainRatetradeBundle:CanadaProvince')->findOneByProvinceUrl($city);        
        $target_cities = array();

        if (sizeof($target_province) == 0) {
            $target_province = $em->getRepository('MainRatetradeBundle:CanadaCities')->findOneByCityUrl($city);
            $city_d = $target_province->getCity();
            $province_obj = "select p.id
                from MainRatetradeBundle:CanadaProvince p,
                MainRatetradeBundle:CanadaCities c
                where 
                c.provinceId = p.id and c.cityUrl LIKE '" . $city . "' group by p.id";

            $province = $em->createQuery($province_obj)->getResult();
            $target_cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findBy(array('provinceId' => $province[0]['id'], 'urlFlag' => '1'), array('city' => 'ASC'));
        } else {
            $city_d = $target_province->getProvince();
            $target_cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findBy(array('provinceId' => $target_province->getId(), 'urlFlag' => '1'), array('city' => 'ASC'));
        }
        
        $parentcatobj = $em->getRepository('MainRatetradeBundle:EducationCentre')->find($educationpage->getParentCategory());
        return $this->render('MainRatetradeBundle:Default:mortgage-renewals-city.html.twig', 
                array('educationall' => $educationpageall, 'cat' => $educationpage, 
                      'parentcat' => $parentcatobj,'city'=>$city_d,'target_cities'=>$target_cities));
           
    }
    
     public function MortgageRefinancingAction($city) {

        $em = $this->getDoctrine()->getManager();

        $educationpage = $em->getRepository('MainRatetradeBundle:EducationCentre')->findOneByPageUrl("cost-to-refinance");
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();

        $target_province = $em->getRepository('MainRatetradeBundle:CanadaProvince')->findOneByProvinceUrl($city);        
        $target_cities = array();

        if (sizeof($target_province) == 0) {
            $target_province = $em->getRepository('MainRatetradeBundle:CanadaCities')->findOneByCityUrl($city);
            $city_d = $target_province->getCity();
            $province_obj = "select p.id
                from MainRatetradeBundle:CanadaProvince p,
                MainRatetradeBundle:CanadaCities c
                where 
                c.provinceId = p.id and c.cityUrl LIKE '" . $city . "' group by p.id";

            $province = $em->createQuery($province_obj)->getResult();
            $target_cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findBy(array('provinceId' => $province[0]['id'], 'urlFlag' => '1'), array('city' => 'ASC'));
        } else {
            $city_d = $target_province->getProvince();
            $target_cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findBy(array('provinceId' => $target_province->getId(), 'urlFlag' => '1'), array('city' => 'ASC'));
        }
        
        $parentcatobj = $em->getRepository('MainRatetradeBundle:EducationCentre')->find($educationpage->getParentCategory());
        return $this->render('MainRatetradeBundle:Default:mortgage-refinance-city.html.twig', 
                array('educationall' => $educationpageall, 'cat' => $educationpage, 
                      'parentcat' => $parentcatobj,'city'=>$city_d,'target_cities'=>$target_cities));
           
    }
    
    public function ThankyouAction() {
         return $this->render('MainRatetradeBundle:Default:thank-you.html.twig');
    }
    
    public function RealEstateAction() {
         return $this->render('MainRatetradeBundle:Default:real-estate.html.twig');
    }
    public function EmailSubscribeAction(Request $request) {

        $email = $request->request->get('email');
        $name = $request->request->get('name');

        $em = $this->getDoctrine()->getManager();

        $date_obj = new \DateTime(date('d-m-Y H:i:s'));

        $email_obj = new EmailSubscription();
        $email_obj->setFname($name);
        $email_obj->setEmail($email);
        $email_obj->setUpdateDateTime($date_obj);
        $em->persist($email_obj);
        $em->flush();

        $body = 'Email Subscription';
        $body.='Name: ' . $name . '<br/>';
        $body.='Email: ' . $email;


        $message = \Swift_Message::newInstance()
                ->setSubject('Email Subscription')
                ->setFrom('no-reply@ratetrade.ca')
                ->setTo('info@ratetrade.ca')
                ->setBcc('contact@ratetrade.ca')
                ->setBody($body);



        $this->get('mailer')->send($message);

        $bodyuser = 'Thank you for subscribing with us, You will be updated with our latest updates.';


        $messageuser = \Swift_Message::newInstance()
                ->setSubject('Email Subscription')
                ->setFrom('no-reply@ratetrade.ca')
                ->setTo($email)
                ->setBcc('contact@ratetrade.ca')
                ->setBody($bodyuser);



        $this->get('mailer')->send($messageuser);

        echo 'Subscription Sucessful';
        exit;
    }

    public function MortgageRatesAction($ratetype) {

        $em = $this->getDoctrine()->getManager();

        $query = "select r.id, r.rate,t.term,rt.rateType , r.termid
                from MainRatetradeBundle:MortgageRates r,
                MainRatetradeBundle:MortgageTerms t,
                MainRatetradeBundle:MortgageRateTypes rt
                where 
                r.termid = t.id and r.rateTypeid = rt.id order by r.termid";

        $rates = $em->createQuery($query)->getResult();
        //   echo '<pre>';
        //   print_r($rates);
        //   echo '<pre>';
        //   die;
        $terms_arr = $em->getRepository('MainRatetradeBundle:MortgageTerms')->findBy(array('urlFlag' => '1'));

        $terms = array();
        $i = 0;
        if ($ratetype == "variable") {
            foreach ($terms_arr as $t) {
                if ($t->getTerm() == '1-Year' || $t->getTerm() == '3-Year' || $t->getTerm() == '5-Year') {
                    $terms[$i]['term'] = $t->getTerm();
                    $terms[$i]['termUrl'] = $t->getTermUrl();
                    $i++;
                }
            }
        } else {
            foreach ($terms_arr as $t) {
                $terms[$i]['term'] = $t->getTerm();
                $terms[$i]['termUrl'] = $t->getTermUrl();
                $i++;
            }
        }

        $province = $em->getRepository('MainRatetradeBundle:CanadaProvince')->findAll();

        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();

        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();

        return $this->render('MainRatetradeBundle:Default:mortgage-rates.html.twig', array('rates' => $rates, 'educationall' => $educationpageall, 'cities' => $cities,
                    'terms' => $terms, 'province' => $province, 'ratetype' => $ratetype));
    }


    public function MortRatesAction() {

        $em = $this->getDoctrine()->getManager();

        $query = "select r.rate,t.term,rt.rateType
                from MainRatetradeBundle:MortgageRates r,
                MainRatetradeBundle:MortgageTerms t,
                MainRatetradeBundle:MortgageRateTypes rt
                where 
                r.termid = t.id and r.rateTypeid = rt.id order by r.termid";

        $rates = $em->createQuery($query)->getResult();

        $terms_arr = $em->getRepository('MainRatetradeBundle:MortgageTerms')->findBy(array('urlFlag' => '1'));

        $terms = array();
        $i = 0;
        if ($ratetype == "variable") {
            foreach ($terms_arr as $t) {
                if ($t->getTerm() == '1-Year' || $t->getTerm() == '3-Year' || $t->getTerm() == '5-Year') {
                    $terms[$i]['term'] = $t->getTerm();
                    $terms[$i]['termUrl'] = $t->getTermUrl();
                    $i++;
                }
            }
        } else {
            foreach ($terms_arr as $t) {
                $terms[$i]['term'] = $t->getTerm();
                $terms[$i]['termUrl'] = $t->getTermUrl();
                $i++;
            }
        }

        $province = $em->getRepository('MainRatetradeBundle:CanadaProvince')->findAll();

        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();

        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();
        return $this->render('MainRatetradeBundle:Default:mort-rates.html.twig', array('rates' => $rates, 'educationall' => $educationpageall, 'cities' => $cities, 'terms' => $terms, 'province' => $province, 'ratetype' => $ratetype));
    }


    public function CityMortgageRatesAction($target, $term, $ratetype) {
        if($ratetype === 'fixed' || $ratetype === 'variable'){}else{ return;}
        // ;
   
        $em = $this->getDoctrine()->getManager();

        $query = "select r.rate,t.term,rt.rateType
                from MainRatetradeBundle:MortgageRates r,
                MainRatetradeBundle:MortgageTerms t,
                MainRatetradeBundle:MortgageRateTypes rt
                where 
                r.termid = t.id and r.rateTypeid = rt.id order by r.termid";

        $rates = $em->createQuery($query)->getResult();

        $target_province = $em->getRepository('MainRatetradeBundle:CanadaProvince')->findOneByUrlLink($target);
        $target_cities = array();

        if (sizeof($target_province) == 0) {
            $target_province = $em->getRepository('MainRatetradeBundle:CanadaCities')->findOneByUrlLink($target);
             $city = $target_province->getCity();
            $province_obj = "select p.id
                from MainRatetradeBundle:CanadaProvince p,
                MainRatetradeBundle:CanadaCities c
                where 
                c.provinceId = p.id and c.urlLink LIKE '" . $target . "' group by p.id";

            $province = $em->createQuery($province_obj)->getResult();
            $target_cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findBy(array('provinceId' => $province[0]['id'], 'urlFlag' => '1'), array('city' => 'ASC'));
        } else {
            $city = $target_province->getProvince();
            $target_cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findBy(array('provinceId' => $target_province->getId(), 'urlFlag' => '1'), array('city' => 'ASC'));
        }

        $target_term = $em->getRepository('MainRatetradeBundle:MortgageTerms')->findOneByTermUrl($term);
       
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();

        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();

        $meta_data = $em->getRepository('MainRatetradeBundle:MetaData')->findOneByPage('city-term-ratetype');
        
    
        return $this->render('MainRatetradeBundle:Default:city-mortgage-rates.html.twig', array('rates' => $rates, 'educationall' => $educationpageall, 'cities' => $cities,
                    'target' => $city, 'term' => $target_term, 'ratetype' => $ratetype, 'target_cities' => $target_cities, 'metadata' => $meta_data));
    }



   public function CityRatesAction($target, $ratetype) {

        $em = $this->getDoctrine()->getManager();

        $query = "select r.rate,t.term,rt.rateType
                from MainRatetradeBundle:MortgageRates r,
                MainRatetradeBundle:MortgageTerms t,
                MainRatetradeBundle:MortgageRateTypes rt
                where 
                r.termid = t.id and r.rateTypeid = rt.id order by r.termid";

        $rates = $em->createQuery($query)->getResult();

        $target_province = $em->getRepository('MainRatetradeBundle:CanadaProvince')->findOneByUrlLink($target);
        $target_cities = array();

        if (sizeof($target_province) == 0) {
            $target_province = $em->getRepository('MainRatetradeBundle:CanadaCities')->findOneByUrlLink($target);
            $city = $target_province->getCity();
            $province_obj = "select p.id
                from MainRatetradeBundle:CanadaProvince p,
                MainRatetradeBundle:CanadaCities c
                where 
                c.provinceId = p.id and c.urlLink LIKE '" . $target . "' group by p.id";

            $province = $em->createQuery($province_obj)->getResult();
            $target_cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findBy(array('provinceId' => $province[0]['id'], 'urlFlag' => '1'), array('city' => 'ASC'));
        } else {
            $city = $target_province->getProvince();
            $target_cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findBy(array('provinceId' => $target_province->getId(), 'urlFlag' => '1'), array('city' => 'ASC'));
        }

        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();

        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();

        $meta_data = $em->getRepository('MainRatetradeBundle:MetaData')->findOneByPage('city-ratetype');

        return $this->render('MainRatetradeBundle:Default:city-rates.html.twig', array('rates' => $rates, 'educationall' => $educationpageall, 'cities' => $cities,
                    'target' => $city, 'ratetype' => $ratetype, 'target_cities' => $target_cities, 'metadata' => $meta_data));
    }





   public function NcityRatesAction($target) {

        $em = $this->getDoctrine()->getManager();

        $query = "select r.rate,t.term,rt.rateType
                from MainRatetradeBundle:MortgageRates r,
                MainRatetradeBundle:MortgageTerms t,
                MainRatetradeBundle:MortgageRateTypes rt
                where 
                r.termid = t.id and r.rateTypeid = rt.id order by r.termid";

        $rates = $em->createQuery($query)->getResult();

        $target_province = $em->getRepository('MainRatetradeBundle:CanadaProvince')->findOneByUrlLink($target);
        $target_cities = array();

        if (sizeof($target_province) == 0) {
            $target_province = $em->getRepository('MainRatetradeBundle:CanadaCities')->findOneByUrlLink($target);
            $city = $target_province->getCity();
            $province_obj = "select p.id
                from MainRatetradeBundle:CanadaProvince p,
                MainRatetradeBundle:CanadaCities c
                where 
                c.provinceId = p.id and c.urlLink LIKE '" . $target . "' group by p.id";

            $province = $em->createQuery($province_obj)->getResult();
            $target_cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findBy(array('provinceId' => $province[0]['id'], 'urlFlag' => '1'), array('city' => 'ASC'));
        } else {
            $city = $target_province->getProvince();
            $target_cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findBy(array('provinceId' => $target_province->getId(), 'urlFlag' => '1'), array('city' => 'ASC'));
        }

        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();

        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();

        $meta_data = $em->getRepository('MainRatetradeBundle:MetaData')->findOneByPage('ncity');

        return $this->render('MainRatetradeBundle:Default:ncity-rates.html.twig', array('rates' => $rates, 'educationall' => $educationpageall, 'cities' => $cities, 'target' => $city, 'target_cities' => $target_cities, 'metadata' => $meta_data));
    }



    function mortgage_insurance($loan_value) {

        if ($loan_value < 0.0 || $loan_value > 0.95) {
            return -1;
        }

        if ($loan_value <= 0.80) {
            return 0.0;
        } else if ($loan_value <= 0.85) {
            return 0.0180;
        } else if ($loan_value <= 0.90) {
            return 0.0240;
        } else if ($loan_value <= 0.95) {
            return 0.036;
        }
    }

    public function CompareRatesAction(Request $request) {

        $rate = '';
        $term = '';
        $type = '';
        $mortgage = '';
        $insu = '';

        $rate = $request->query->get('rate');
        $term = $request->query->get('term');
        $type = $request->query->get('type');

        if ($rate != '') {
            $insu = (350000 - ((350000 * 5) / 100)) * $this->mortgage_insurance(1 - 5 / 100);

            $number_of_payments = 25 * 12;

            $desired_interest_rate = ($rate / 100) / 12;

            $mortgage = 350000 * (($desired_interest_rate * pow((1 + $desired_interest_rate), $number_of_payments)) / (pow((1 + $desired_interest_rate), $number_of_payments) - 1));
        }

        $em = $this->getDoctrine()->getManager();

        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();

        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();

        return $this->render('MainRatetradeBundle:Default:compare-rate.html.twig', array('educationall' => $educationpageall, 'cities' => $cities, 'rate' => $rate,
                    'term' => $term, 'type' => $type, 'mortgage' => $mortgage, 'insu' => $insu));
    }

    public function ApplyNowAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();

        return $this->render('MainRatetradeBundle:Default:apply-now.html.twig', array('cities' => $cities,
                    'rate' => $request->query->get('rate')));
    }

    public function ContactUsAction() {
  $em = $this->getDoctrine()->getManager();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
              return $this->render('MainRatetradeBundle:Default:contact-us.html.twig', array('educationall' => $educationpageall));
    }

    public function ContactUsUpdateAction(Request $request) {
        $fname = $request->request->get('fname');
        $lname = $request->request->get('lname');
        $email = $request->request->get('email');
        $phone = $request->request->get('phone');
        $message = $request->request->get('message');
        $em = $this->getDoctrine()->getManager();
        $date_obj = new \DateTime(date('d-m-Y H:i:s'));

        $email_obj = new EmailSubscription();
        $email_obj->setFname($fname);
        $email_obj->setLname($lname);
        $email_obj->setEmail($email);
        $email_obj->setPhone($phone);
        $email_obj->setMessage($message);
        $email_obj->setUpdateDateTime($date_obj);
        $em->persist($email_obj);
        $em->flush();

        $body = 'Email Subscription';
        $body.='Name: ' . $fname . " " . $lname . '<br/>';
        $body.='Email: ' . $email;
        $body.='Phone: ' . $phone;
        $body.='Query: ' . $message;


        $messageadmin = \Swift_Message::newInstance()
                ->setSubject('Contact ratetrade.ca ')
                ->setFrom('no-reply@ratetrade.ca')
                ->setTo('info@ratetrade.ca')
                ->setBcc('contact@ratetrade.ca')
                ->setBody($body);



        $this->get('mailer')->send($messageadmin);

        $bodyuser = 'Thank you for subscribing with us, You will be updated with our latest updates.';


        $messageuser = \Swift_Message::newInstance()
                ->setSubject('Contact')
                ->setFrom('no-reply@ratetrade.ca')
                ->setTo($email)
                ->setBcc('contact@ratetrade.ca')
                ->setBody($bodyuser);



        $this->get('mailer')->send($messageuser);

        echo 'Email Submitted';
        exit;
    }

    public function LeadUpdateAction(Request $request) {
        $fname = $request->request->get('fname');
        $location = $request->request->get('location');
        $email = $request->request->get('email');
        $phone = $request->request->get('phone');
        $besttime = $request->request->get('besttime');
        $purpose = $request->request->get('purpose');
        $message = $request->request->get('message');
        $em = $this->getDoctrine()->getManager();
        $date_obj = new \DateTime(date('d-m-Y H:i:s'));
        $email_obj = new EmailSubscription();
        $email_obj->setFname($fname);
        $email_obj->setLocation($location);
        $email_obj->setEmail($email);
        $email_obj->setPhone($phone);
        $email_obj->setBestTime($besttime);
        $email_obj->setPurpose($purpose);
        $email_obj->setMessage($message);
        $email_obj->setUpdateDateTime($date_obj);
        $em->persist($email_obj);
        $em->flush();

        $body = 'Lead Mail';
        $body.='Name: ' . $fname;
        $body.='Email: ' . $email;
        $body.='Phone: ' . $phone;
        $body.='Location: ' . $location;
        $body.='Besttime: ' . $besttime;
        $body.='Purpose: ' . $purpose;
        $body.='Message: ' . $message;


        $messageadmin = \Swift_Message::newInstance()
                ->setSubject('Lead Mail')
                ->setFrom('no-reply@ratetrade.ca')
                ->setTo('info@ratetrade.ca')
                ->setBcc('vr7979@gmail.com')
                ->setBody($body);



        $this->get('mailer')->send($messageadmin);

        echo 'Lead Submitted';
        exit;
    }

    public function BrokerListAction() {

        $em = $this->getDoctrine()->getManager();

        $query = "select b.fname,b.lname,b.brokerageName,b.websiteUrl,b.city,b.email,b.photo
                from MainRatetradeBundle:MortgageBrokers b where b.showFlag='1'";

        $brokers = $em->createQuery($query)->getResult();

        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();

        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();

        return $this->render('MainRatetradeBundle:Default:broker-list.html.twig', array('brokers' => $brokers, 'cities' => $cities,
                    'educationall' => $educationpageall));
    }

    public function BrokerSignUpAction() {
        $em = $this->getDoctrine()->getManager();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:broker-signup.html.twig', array('educationall' => $educationpageall));
    }
 public function BankMortgageRatesAction() {
        $em = $this->getDoctrine()->getManager();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:bank-mortgage-rates.html.twig', array('educationall' => $educationpageall));
    }

    public function BrokerLoginAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $error = $request->query->get("error");

        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:broker-login.html.twig', array('educationall' => $educationpageall, 'error' => $error));
    }

    public function BrokerLoginCheckAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $username = $request->request->get('username');
        $password = $request->request->get('password');

        $broker_obj = $em->getRepository('MainRatetradeBundle:MortgageBrokers')->findOneByEmail($username);

        if ($username != $broker_obj->getEmail()) {
            return $this->redirect($this->generateURL('broker_login', array('error' => 'Please Enter valid Username.')));
        } else {
            if ($password != $broker_obj->getPassword()) {
                return $this->redirect($this->generateURL('broker_login', array('error' => 'Please Enter valid Password.')));
            } else {
                return $this->redirect($this->generateURL('broker_dashboard', array('username' => $username)));
            }
        }
    }

    public function BrokerLogoutAction(Request $request) {
        return $this->redirect($this->generateURL('ratetrade_homepage'));
    }

    public function BrokerDashboardAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $username = $request->query->get('username');

        $broker_obj = $em->getRepository('MainRatetradeBundle:MortgageBrokers')->findOneByEmail($username);

        return $this->render('MainRatetradeBundle:Default:broker-data.html.twig', array('broker' => $broker_obj,"username"=>$username));
    }
    
     public function BrokerRatesAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $username = $request->query->get('username');

        $broker_obj = $em->getRepository('MainRatetradeBundle:MortgageBrokers')->findOneByEmail($username);

        return $this->render('MainRatetradeBundle:Default:broker-rates.html.twig', array('broker' => $broker_obj,"username"=>$username));
    }

    function random_string($length) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

    public function BrokerUpdateAction(Request $request) {
        $fname = $request->request->get('fname');
        $lname = $request->request->get('lname');
        $email = $request->request->get('email');
        $phone = $request->request->get('phone');
        $city = $request->request->get('city');
        $brokerageName = $request->request->get('brokerage_name');
        $brokerage_licence = $request->request->get('brokerage_licence');
        $mortgage_reg_no = $request->request->get('mortgage_reg_no');
        $mortgage_auth = $request->request->get('mortgage_auth');
        $websiteUrl = $request->request->get('weburl');
        $variable = $request->request->get('variable');
        $fixed = $request->request->get('fixed');
        $message = $request->request->get('message');

        $em = $this->getDoctrine()->getManager();

        $date_obj = new \DateTime(date('d-m-Y H:i:s'));

        $password = $this->random_string(8);

        $email_obj = new MortgageBrokers();
        $email_obj->setFname($fname);
        $email_obj->setLname($lname);
        $email_obj->setEmail($email);
        $email_obj->setPassword($password);
        $email_obj->setPhone($phone);
        $email_obj->setCity($city);
        $email_obj->setBrokerageName($brokerageName);
        $email_obj->setBrokerageLic($brokerage_licence);
        $email_obj->setCiscoRegNum($mortgage_reg_no);
        $email_obj->setLifeRegAuth($mortgage_auth);
        $email_obj->setWebsiteUrl($websiteUrl);
        $email_obj->setVariableRateFive($variable);
        $email_obj->setFixedRateFive($fixed);
        $email_obj->setAbout($message);
        $email_obj->setUpdateDateTime($date_obj);
        $email_obj->setShowFlag("0");
        $em->persist($email_obj);
        $em->flush();
        $messageuser =  \Swift_Message::newInstance()
                ->setSubject('Contact')
                ->setFrom('no-reply@ratetrade.ca')
                ->setTo($email)
                ->setBcc('contact@ratetrade.ca')
                ->setBody($this->renderView('MainRatetradeBundle:Default:brokerlogininfo.html.twig', array('username' => $email, 'password' => $password)), 'text/html');
                $this->get('mailer')->send($messageuser);
        echo 'Broker Data Updated';
        exit;
    }

    public function BrokerLoginUpdateAction(Request $request) {
        $id = $request->request->get('id');
        $fname = $request->request->get('fname');
        $lname = $request->request->get('lname');
        $email = $request->request->get('email');
        $phone = $request->request->get('phone');
        $city = $request->request->get('city');
        $brokerageName = $request->request->get('brokerage_name');
        $websiteUrl = $request->request->get('weburl');
        $message = $request->request->get('message');

        $em = $this->getDoctrine()->getManager();

        $date_obj = new \DateTime(date('d-m-Y H:i:s'));

        $email_obj = $em->getRepository('MainRatetradeBundle:MortgageBrokers')->find($id);
        $email_obj->setFname($fname);
        $email_obj->setLname($lname);
        $email_obj->setEmail($email);
        $email_obj->setPhone($phone);
        $email_obj->setCity($city);
        $email_obj->setBrokerageName($brokerageName);
        $email_obj->setWebsiteUrl($websiteUrl);
        $email_obj->setAbout($message);
        $email_obj->setUpdateDateTime($date_obj);
        $em->persist($email_obj);
        $em->flush();

        echo 'Broker Data Updated';
        exit;
    }
    
    public function BrokerRateUpdateAction(Request $request) {
        $id = $request->request->get('id');
        $variable = $request->request->get('variable');
        $fixed = $request->request->get('fixed');


        $fixed_arr = explode(",", $fixed);
        $variable_arr = explode(",", $variable);

        $em = $this->getDoctrine()->getManager();

        $date_obj = new \DateTime(date('d-m-Y H:i:s'));

        $email_obj = $em->getRepository('MainRatetradeBundle:MortgageBrokers')->find($id);
        $email_obj->setVariableRateOne($variable_arr['0']);
        $email_obj->setFixedRateOne($fixed_arr['0']);
        $email_obj->setVariableRateTwo($variable_arr['1']);
        $email_obj->setFixedRateTwo($fixed_arr['1']);
        $email_obj->setVariableRateThree($variable_arr['2']);
        $email_obj->setFixedRateThree($fixed_arr['2']);
        $email_obj->setVariableRateFour($variable_arr['3']);
        $email_obj->setFixedRateFour($fixed_arr['3']);
        $email_obj->setVariableRateFive($variable_arr['4']);
        $email_obj->setFixedRateFive($fixed_arr['4']);
        $email_obj->setVariableRateSix($variable_arr['5']);
        $email_obj->setFixedRateSix($fixed_arr['5']);
        $email_obj->setVariableRateSeven($variable_arr['6']);
        $email_obj->setFixedRateSeven($fixed_arr['6']);
        $email_obj->setVariableRateEight($variable_arr['7']);
        $email_obj->setFixedRateEight($fixed_arr['7']);
        $email_obj->setVariableRateNine($variable_arr['8']);
        $email_obj->setFixedRateNine($fixed_arr['8']);
        $email_obj->setVariableRateTen($variable_arr['9']);
        $email_obj->setFixedRateTen($fixed_arr['9']);
        $email_obj->setUpdateDateTime($date_obj);
        $em->persist($email_obj);
        $em->flush();

        echo 'Broker Rate Updated';
        exit;
    }

    public function PaymentAction() {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:mortgage-payment.html.twig', array('cities' => $cities, 'educationall' => $educationpageall));
    }

    public function PaymentAnalyzerAction() {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:payment-analyzer.html.twig', array('cities' => $cities, 'educationall' => $educationpageall));
    }

    public function IncomeCalAction() {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:income-cal.html.twig', array('cities' => $cities, 'educationall' => $educationpageall));
    }

    public function AffordabilityAction() {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:affordability-cal.html.twig', array('cities' => $cities, 'educationall' => $educationpageall));
    }

    public function LandTransferTaxAction() {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:land-transfer-tax.html.twig', array('cities' => $cities, 'educationall' => $educationpageall));
    }

    public function getRefinancePenaltyAction() {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:penalty.html.twig', array('cities' => $cities, 'educationall' => $educationpageall));
    }

    public function getRefinanceEquityAction() {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:equity_cal.html.twig', array('cities' => $cities, 'educationall' => $educationpageall));
    }

    public function ChmcCalculatorAction() {
        $em = $this->getDoctrine()->getManager();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:cmhc-insurance.html.twig', array('educationall' => $educationpageall));
    }

    public function DebtConsolidationAction() {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:debt-console.html.twig', array('cities' => $cities, 'educationall' => $educationpageall));
    }

    public function MortgageRefinanceAction() {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('MainRatetradeBundle:CanadaCities')->findAll();
        $educationpageall = $em->getRepository('MainRatetradeBundle:EducationCentre')->findAll();
        return $this->render('MainRatetradeBundle:Default:mortgage-refinance.html.twig', array('cities' => $cities, 'educationall' => $educationpageall));
    }

    public function HeaderAction() {
        return $this->render('MainRatetradeBundle:Default:header.html.twig');
    }

    public function FooterAction() {
        return $this->render('MainRatetradeBundle:Default:footer.html.twig');
    }
    
    public function NewRateAction(){
        return 'okay';
    }

}
