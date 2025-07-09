<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Session\Session;

class MortgageController extends Controller
{
    
    public function TestAction() {       
        return $this->render('AcmeDemoBundle:Demo:test.html.twig');
    }
    
    public function headerAction() {       
        return $this->render('AcmeDemoBundle:Demo:header.html.twig');
    }
    
    public function footerAction() {       
        return $this->render('AcmeDemoBundle:Demo:footer.html.twig');
    }
    
     public function MortgageAction() {       
        return $this->render('AcmeDemoBundle:Demo:mortgage.html.twig');
    }
    
     public function CalculatorAction() {       
        return $this->render('AcmeDemoBundle:Demo:calculator.html.twig');
    }
        
    public function AboutAction() {       
        return $this->render('AcmeDemoBundle:Demo:about.html.twig');
    }
    
    public function ContactAction() {       
        return $this->render('AcmeDemoBundle:Demo:contact.html.twig');
    }
    
    public function LoginAction(Request $request) {  
        $error = $request->query->get('error');
        return $this->render('AcmeDemoBundle:Demo:login.html.twig',array('error'=>$error));
    }
    
    public function BrokerSignUpAction(Request $request) {  
        return $this->render('AcmeDemoBundle:Demo:broker-signup.html.twig');
    }
      public function BankMortgageRatesAction(Request $request) {  
        return $this->render('AcmeDemoBundle:Demo:bank-mortgage-rates.html.twig');
    }
    
    public function JSONAction() { 
    $response = array('username'=> 'testuser', 'password'=> 'testpass');

    $fp = fopen('credentials.json', 'w');
    fwrite($fp, json_encode($response));
    fclose($fp);

    echo 'success';
    }
 
public function LoginCheckAction(Request $request) {
 
   $username = $request->request->get('_username');
   $pass = $request->request->get('_password');
 
$file = fopen('credentials.json', 'r');
$cread=json_decode(fread($file,filesize("credentials.json")));
fclose($file);

     if($username != '' && $pass != '')
     {
          if($username == $cread->username)
          {
            if($pass == $cread->password)
           {
              $session = new Session();
              $session->start();

              // set and get session attributes
              $session->set('username', $username);
              return $this->redirect($this->generateURL('rateform'));
           }
             else
             {
                return $this->redirect($this->generateURL('login',array('error'=>'Please enter valid credentials'))); 
             }
          }
          
     }
     else
     {
         return $this->redirect($this->generateURL('login',array('error'=>'Please enter credentials')));
     }
    
}  
    public function RateEntryFormAction(Request $request) {  
	$session = $request->getSession();           
       
        if($session->get('username') != '')
        {
          return $this->render('AcmeDemoBundle:Demo:rate-entry-form.html.twig');
        }
        else
        {
          return $this->redirect($this->generateURL('login')); 
        }
    }
    
     public function LogoutAction(Request $request) {  
         $session = $request->getSession();         
         $session->set('username', '');
         return $this->render('AcmeDemoBundle:Demo:logout.html.twig');
     }
    
    public function RateEntryFormUpdateAction(Request $request) {  
	
        $province = $request->request->get('province');
        $city = $request->request->get('city');
        $mort_rate = $request->request->get('mort-rate');
        $rate_type = $request->request->get('rate-type');
        $terms = $request->request->get('terms-length');
        $rate = $request->request->get('rate');  
          
      
       if(filesize('rates.json') > 0)
       {
         $rate_data_input = array();
         $rate_data_input['province'] = $province;
         $rate_data_input['city'] = $city;
         $rate_data_input['mort_rate'] = $mort_rate;
         $rate_data_input['rate_type'] = $rate_type;
         $rate_data_input['terms'] = $terms;
         $rate_data_input['rate'] = $rate; 
          
         $rate_data_arr = array();
         array_push($rate_data_arr, $rate_data_input);
           
         $file = fopen('rates.json', 'r');
         $rate_data=json_decode(fread($file,filesize('rates.json')));
         fclose($file);
         
         foreach($rate_data as $r)
         {
            array_push($rate_data_arr, $r); 
         }
         
         $myfile = fopen('rates.json', "w");
         fwrite($myfile, json_encode($rate_data_arr));
         fclose($myfile);
       }
       else
       {
         $rate_data_input = array();
         $rate_data_input['province'] = $province;
         $rate_data_input['city'] = $city;
         $rate_data_input['mort_rate'] = $mort_rate;
         $rate_data_input['rate_type'] = $rate_type;
         $rate_data_input['terms'] = $terms;
         $rate_data_input['rate'] = $rate;
         
         $rate_data_arr = array();
         array_push($rate_data_arr, $rate_data_input);
         
         $myfile = fopen('rates.json', "w");
         fwrite($myfile, json_encode($rate_data_arr));
         fclose($myfile);         
       }
        
       echo 'New Rate Added Successfully';
       exit;
    }
    
    public function AllRatesAction(Request $request) { 

         $file = fopen('rates.json', 'r');
         $rate_data=json_decode(fread($file,filesize('rates.json')));
         fclose($file);
        
       return $this->render('AcmeDemoBundle:Demo:all-rates.html.twig',
               array('rates'=>$rate_data));
    }
    
    public function LoanToolsAction(Request $request) {
       return $this->render('AcmeDemoBundle:Demo:loan-tools.html.twig'); 
    }
	
	
    public function PaymentAction() {       
        return $this->render('AcmeDemoBundle:Demo:mortgage-payment.html.twig');
    }
    
    public function PaymentGoldenAction() {
        return $this->render('AcmeDemoBundle:Demo:mortgage-payment-golden.html.twig');
    }
    
    public function PaymentRatetradeAction() {
        return $this->render('AcmeDemoBundle:Demo:mortgage-payment-ratetrade.html.twig');
    }
    
    public function IncomeRatetradeAction() {
       return $this->render('AcmeDemoBundle:Demo:income-ratetrade.html.twig');
    }
    
     public function PaymentAnalyzerRatetradeAction() {
       return $this->render('AcmeDemoBundle:Demo:payment-analyzer-ratetrade.html.twig');
    }
    
    public function Payment1Action() {       
        return $this->render('AcmeDemoBundle:Demo:mortgage-payment.html_1.twig');
    }
    
    public function indexAction() { 
        return $this->render('AcmeDemoBundle:Demo:home.html.twig');
    }
    
     public function ChmcCalculatorAction() {       
        return $this->render('AcmeDemoBundle:Demo:cmhc-insurance.html.twig');
    }
    
     public function ChmcCalculatorGoldenAction() {       
        return $this->render('AcmeDemoBundle:Demo:cmhc-insurance-golden.html.twig');
    }
    
    public function ChmcCalculatorRatetradeAction() {       
        return $this->render('AcmeDemoBundle:Demo:cmhc-insurance-ratetrade.html.twig');
    }
    
     public function getProvinceCityAction(Request $request) {       
        
         $em = $this->getDoctrine()->getManager();
         
         $cities = $em->createQuery("select p.city 
         from 
         AcmeDemoBundle:ProvinceCity p
         where 
         p.provinceShort = '".$request->request->get('province')."'");
        
        $cities_arr = $cities->getArrayResult();
        
        echo json_encode($cities_arr);
        
        exit;
    }
    
    
    public function getMortgageAction(Request $request) { 
        
        $mortgages = array();
        
        $askprice=$request->request->get('askprice');
        $downpays=$request->request->get('downpays');
        
        $downpays_arr = explode("|", $downpays);
        
        foreach ($downpays_arr as $key=>$d)
        {
            $per = trim(trim($d),"%");
            $mortgages[$key]['downpayment'] = round($askprice * ($per / 100));
            $insurence_per=$this->mortgage_insurance(1 - ($per / 100));
            $mortgages[$key]['insurance'] = round(($askprice-$mortgages[$key]['downpayment']) * $insurence_per);
            $mortgages[$key]['reqdmortgage'] = round($askprice-$mortgages[$key]['downpayment']+ ($askprice-$mortgages[$key]['downpayment']) * $insurence_per);
        }
        
        echo json_encode($mortgages);
        exit;        
    }
    
    
    function mortgage_insurance($loan_value)  {
    
        if ($loan_value < 0.0 || $loan_value > 0.95)
        {return -1;}

	if($loan_value <= 0.80)
        {return 0.0;}
	else if ($loan_value <= 0.85)
        {return 0.0180;}
	else if ($loan_value <= 0.90)
        {return 0.0240;}
	else if ($loan_value <= 0.95)
        {return 0.036;}
        
     }
     
     
     
        function get_pay_periods($payment_frequency) {
	    if ($payment_frequency === "monthly") {
		return 12;
	    } else if ($payment_frequency === "semi_monthly") {
		return 12*2;
	    } else if ($payment_frequency === "acc_bi_weekly") {
		return 52/2;
	    }else if ($payment_frequency === "weekly") {
		return 52;
	    }else {
		return 1;
	    }
        }

        //m=p(i(1+i)^n/(1+i)^n-1)
        
        public function getMortgageInstallmentAction(Request $request)
        {
            $principal=$request->request->get('principal');
            $num_years=$request->request->get('years');
            $rate=$request->request->get('rate');
            $payment_frequency=$request->request->get('freq');
            
            
            $principals = explode("|",$principal);
            $num_yearss = explode("|",$num_years);
            $rates = explode("|",$rate);
            
            $installments = array();
            
            for($i=0;$i<sizeof($principals);$i++) {
               
                $installments[$i]['emi'] = $this->getMortgageInstallment($principals[$i], $num_yearss[$i], $rates[$i], $payment_frequency);               
            }
            
            echo json_encode($installments);
            
            exit;            
        }
        
        
        public function getMortgageInstallment($principal,$num_years,$rate,$payment_frequency)
        {
  
            $number_of_payments = $num_years * $this->get_pay_periods($payment_frequency);
            
            $desired_interest_rate = ($rate / 100) / $this->get_pay_periods($payment_frequency);
            
            $installment = $principal * (($desired_interest_rate*pow((1+$desired_interest_rate),$number_of_payments))/(pow((1+$desired_interest_rate),$number_of_payments)-1));
            
            return round($installment,2);
        }
        
        
         public function getAmortizationTableAction($principal,$num_years,$rate,$payment_frequency)
        {
  
            $number_of_payments = $num_years * $this->get_pay_periods($payment_frequency);
            
            $desired_interest_rate = round(($rate / 100) / $this->get_pay_periods($payment_frequency),4);
            
            $installment = $this->getMortgageInstallment($principal, $num_years, $rate, $payment_frequency);
            
            $balance = $principal;
            $m = 0;
            $y=0;
            $total_principal = 0;
            $total_interest = 0;
            $annual_payment = 0;
            $annual_interest = 0;
	        $annual_principal = 0;
            $loan_returned = 0;
            $loan_returned_month =0;
            $month_data = array();
            $all_data= array();
            $t=0;
            
            // Need to be dynamic
            $year = date("Y");
            $month = date("m");
            
            $done = false;
           
             for ($i = $month; $i <= ($number_of_payments + $month) && !$done; ++$i) {		
                $interest = $balance * $desired_interest_rate;
	          	$dprincipal = $installment - $interest;
            		if ($dprincipal > $balance) {
                                    $installment -= ($dprincipal - $balance);
            			$dprincipal = $balance;
            			$done = true;
            		}
                
            $balance -= $dprincipal;
            $annual_payment += $installment;
    		$annual_interest += $interest;
    		$annual_principal += $dprincipal;
    		$loan_returned_month +=($dprincipal * 100)/$principal;
    		$month_data[$m]['month'] = date("F", mktime(0, 0, 0, $month, 10));
    		$month_data[$m]['principal'] = round($dprincipal,2);
    		$month_data[$m]['interest'] = round($interest,2);
    		$month_data[$m]['installment'] = $installment;
    		$month_data[$m]['balance'] = round($balance,2);
    		$month_data[$m]['loan_returned_month'] = round($loan_returned_month,2);
    		$m++;
    		$month++;
    	
    	if ($i % ($this->get_pay_periods($payment_frequency)) == 0 || $done) {
    		    $loan_returned +=($annual_principal * 100)/$principal;
    		    $all_data[$y]['year'] = $year;
    		    $all_data[$y]['yprincipal'] = round($annual_principal,2);
    		    $all_data[$y]['interest'] = round($annual_interest,2);
    		    $all_data[$y]['installment'] = round($annual_payment,2);
    		    $all_data[$y]['balance'] = round($balance,2);
    		    $all_data[$y]['loan_returned'] = round($loan_returned,2);
    		    $all_data[$y]['months'] = $month_data;
    		    $y++;
    		    $year++;
    		    $total_principal += $annual_principal;
    		    $total_interest += $annual_interest;
    		    $annual_payment = 0;
    		    $annual_interest = 0;
    		    $annual_principal = 0;
    		    $month_data = null;
    		    $m=0;
    		    $month=1;
		    }
		    $total_data = array();
		    $total_data['breakup']['total-principal'] = $total_principal;
		    $total_data['breakup']['total-interest'] = $total_interest;
		    $total_data['schedule'] = $all_data; 
        }
        // die;
        echo json_encode($total_data);
         exit;
            
        }
        
        
        
        
        public function LandTransferTaxAction() {       
            return $this->render('AcmeDemoBundle:Demo:land-transfer-tax.html.twig');
        }
        
         public function LandTransferTaxGoldenAction() {       
            return $this->render('AcmeDemoBundle:Demo:land-transfer-tax-golden.html.twig');
        }
        
        
        public function getLandTransferTaxAction(Request $request) {       
            $principal=$request->request->get('askprice');
            $province=$request->request->get('province');
            $first=$request->request->get('first-time');
            $nonres=$request->request->get('non-res');
            
            $ltt = array();
            
            if($province === "AL")
            {
               $ltt = $this->get_ltt_AL($principal,$first,$nonres);
            }
            else if($province === "BC")
            {
               $ltt = $this->get_ltt_BC($principal,$first,$nonres);  
            }
            else if($province === "MA")
            {
               $ltt = $this->get_ltt_MA($principal,$first,$nonres); 
            }
            else if($province === "NB")
            {
               $ltt = $this->get_ltt_NB($principal,$first,$nonres); 
            }
            else if($province === "NE")
            {
               $ltt = $this->get_ltt_NE($principal,$first,$nonres); 
            }
            else if($province === "NS")
            {
               $ltt = $this->get_ltt_NS($principal,$first,$nonres); 
            }
            else if($province === "NT")
            {
               $ltt = $this->get_ltt_NT($principal,$first,$nonres); 
            }
            else if($province === "NU")
            {
               $ltt = $this->get_ltt_NU($principal,$first,$nonres); 
            }
            else if($province === "ON")
            {
               $ltt = $this->get_ltt_ON($principal,$first,$nonres); 
            }
            else if($province === "PE")
            {
               $ltt = $this->get_ltt_PE($principal,$first,$nonres); 
            }
            else if($province === "QU")
            {
               $ltt = $this->get_ltt_QU($principal,$first,$nonres); 
            }
            else if($province === "SK")
            {
               $ltt = $this->get_ltt_SK($principal,$first,$nonres); 
            }
            else if($province === "YU")
            {
               $ltt = $this->get_ltt_YU($principal,$first,$nonres); 
            }
            
            echo json_encode($ltt);
            exit;
        }
        
        
        function get_ltt_AL($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = 0;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
            return $ltt;
        }
        
        function get_ltt_BC($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = 0;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
            if($principal > 200000)
            {
              $ltt['pro']= (200000 * 0.01) + (($principal-200000) * 0.02); 
            }
            else {
               $ltt['pro']= ($principal * 0.01);
            }
            
            if($first == '1')
            {
                if($principal < 475000)
                {
                   $ltt['reb'] = $ltt['pro']; 
                }
                else if($principal <= 500000)
                {
                  $ltt['reb'] = ((500000-$principal)/25000) * $ltt['pro']; 
                }
            }
            
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            
            return $ltt;
        }
        
        function get_ltt_MA($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = 0;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
            if($principal > 200000)
            {
              $ltt['pro']= ($principal-200000) * 0.02 + 1720; 
            }
            else if($principal > 150000)
            {
              $ltt['pro']= ($principal-150000) * 0.015 + 970; 
            }
            else if($principal > 90000)
            {
              $ltt['pro']= ($principal-90000) * 0.01 + 370; 
            }
            else if($principal > 30000)
            {
              $ltt['pro']= ($principal-30000) * 0.005 + 70; 
            }
            else {
               $ltt['pro']= 70;
            }
           
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            return $ltt;
        }
        
        function get_ltt_NB($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = $principal * 0.005;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
                        
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            return $ltt;
        }
        
        function get_ltt_NE($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = 0;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
            if ($principal > 500)
	    {
               $ltt['pro'] = ($principal - 500) * 0.004 + 100;
            }
	    else
            {
                $ltt['pro'] = 100;
            }
            
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            return $ltt;
        }
        
        function get_ltt_NS($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = $principal * 0.015;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            return $ltt;
        }
        
        function get_ltt_NT($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = 0;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
            if($principal < 1000000)
            {
               $ltt['pro'] = ($principal - 1000000) * 0.001 + 1500; 
            }
           else {
               $ltt['pro'] = $principal * 0.0015;
            }
            
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            return $ltt;
        }
        
        function get_ltt_NU($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = 0;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
            if($principal < 1000000)
            {
               $ltt['pro'] = $principal * 0.0015; 
            }
           else {
               $ltt['pro'] = $principal * 0.001;
            }
            
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            return $ltt;
        }
        
        function get_ltt_ON($principal,$first,$nonres)
        {
            
            $ltt = array();
            
            $ltt['pro'] = 0;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
             if($principal <= 55000)
            {
              $ltt['pro']= $principal * 0.005; 
            }
            else if($principal > 55000 && $principal <= 250000)
            {
              $ltt['pro']= (55000 * 0.005) + ($principal-55000) * 0.01; 
            }
            else if($principal > 250000 && $principal <= 400000)
            {
              $ltt['pro']= (55000 * 0.005) + (195000 * 0.01) + ($principal-250000) * 0.015; 
            }
            else {
               $ltt['pro']= (55000 * 0.005) + (195000 * 0.01) + (150000 * 0.015) + (($principal-400000) * 0.02);
            }
            
            
            if($nonres === '1')
            {
               if($principal <= 55000)
               {
                 $ltt['mum']= ($principal * 0.005); 
               }
               else if($principal > 55000 && $principal <= 400000)
               {
                 $ltt['mum']= (55000 * 0.005) + (195000 * 0.01) + ($principal-250000) * 0.015;; 
               }
               else {
               $ltt['mum']= (55000 * 0.005) + (345000 * 0.01) + (($principal-400000) * 0.02);
               }
               
                   if($first == '1')
                   {
                       if($principal <= 55000)
                       {
                         $ltt['reb']= ($principal * 0.005); 
                       }
                       else if($principal > 55000 && $principal <= 400000)
                       {
                         $ltt['reb']= (55000 * 0.005) + ($principal-55000) * 0.01; 
                   }
               }
               
            }
            else {
                
               if($first == '1')
               {
                  if($principal <= 55000)
                 {
                   $ltt['reb']= ($principal * 0.005); 
                 }
                 else if($principal > 55000 && $principal <= 227500)
                 {
                  $ltt['reb']= (55000 * 0.005) + ($principal-55000) * 0.01; 
                 }
               }
                 
            }
            
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            return $ltt;
        }
        
        function get_ltt_PE($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = 0;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
            if($principal < 30000)
            {
              $ltt['pro']= $principal * 0; 
            }
            else {
               $ltt['pro']= $principal * 0.01;
            }
            
               if($first == '1')
               {
                  if($principal <= 200000)
                  {
                     $ltt['reb']= $ltt['pro']; 
                  }
               }
            
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            return $ltt;
        }
        
        function get_ltt_QU($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = 0;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
               if($principal <= 50000)
               {
                 $ltt['mum']= (55000 * 0.005); 
               }
               else if($principal > 50000 && $principal <= 250000)
               {
                 $ltt['mum']= (50000 * 0.005) + ($principal-50000) * 0.01; 
               }
               else {
               $ltt['mum']= (50000 * 0.005) + (200000 * 0.01) + (($principal-250000) * 0.015);
               }
            
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            return $ltt;
        }
        
        function get_ltt_SK($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = 0;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            return $ltt;
        }
        
        function get_ltt_YU($principal,$first,$nonres)
        {
            $ltt = array();
            
            $ltt['pro'] = 0;
            $ltt['mum'] = 0;
            $ltt['reb'] = 0;
            $ltt['tot'] = 0;
            
        if ($principal > 25000)
	{	 $ltt['pro'] =($principal - 25000) * 0.00025 + 42.75;
        }
	else if ($principal > 10000)
	{	 $ltt['pro'] = ($principal - 10000) * 0.00075 + 31.5;
        }
	else if ($principal > 5000)
	{	 $ltt['pro'] = (home_price - 5000) * 0.002 + 24;
        }
	else if ($principal > 3000)
	{	 $ltt['pro'] = 24;
        }
	else if ($principal > 1000)
	{	 $ltt['pro'] = 13.5;
        }
	else
        {	 $ltt['pro'] = 6;}
            
            
            $ltt['tot']  = $ltt['pro'] + $ltt['mum'] - $ltt['reb'];
            return $ltt;
        }
  
 /*public function getCitiesAction(){
     
     $em = $this->getDoctrine()->getManager();
     
     $prov_obj = $em->createQuery("select p.provinceShort 
         from 
         AcmeDemoBundle:ProvinceCity p group by p.provinceShort");
     
     $prov_arr = $prov_obj->getArrayResult();
     
     $main_arr = array();
     
     foreach ($prov_arr as $p)
     {
         $city_obj = $em->createQuery("select p.city 
         from 
         AcmeDemoBundle:ProvinceCity p where p.provinceShort='".$p['provinceShort']."'");
     
         $city_arr = $city_obj->getArrayResult();
              
         $main_arr[$p['provinceShort']] = $city_arr;        
     }
     
     print_r(json_encode($main_arr));
     
     exit;
     
 }       */
        
 public function getPropTaxAction(Request $req) {
     
     $province = $req->request->get('province');
     $city = $req->request->get('city');
     $askprice = $req->request->get('askprice');

	if ($province == "BC")
		echo ($this->bc_prop_tax($city) * $askprice / 12);

	else if ($province == "AL")
		echo ($this->ab_prop_tax($city) * $askprice / 12);

	else if ($province == "SK")
		echo ($this->sk_prop_tax($city) * $askprice / 12);

	else if ($province == "MA")
		echo ($this->mb_prop_tax($city) * $askprice / 12);

	else if ($province == "ON")
		echo ($this->on_prop_tax($city) * $askprice / 12);

	else if ($province == "QU")
		echo ($this->qc_prop_tax($city) * $askprice / 12);

	else if ($province == "NB")
		echo ($this->nb_prop_tax($city) * $askprice / 12);

	else if ($province == "NS")
		echo ($this->ns_prop_tax($city) * $askprice / 12);

	else if ($province == "PE")
		echo ($this->pe_prop_tax($city) * $askprice / 12);

	else if ($province == "NE")
		echo ($this->nl_prop_tax($city) * $askprice / 12);

	else if ($province == "YU")
		echo ($this->yk_prop_tax($city) * $askprice / 12);

	else if ($province == "NT")
		 echo ($this->nt_prop_tax($city) * $askprice / 12);

	else
	    echo 0;
        
        exit;
}

function bc_prop_tax($city) {

	if ($city == "Vancouver")
		return 0.0042;

	else
		return 0.0054;
}

function ab_prop_tax($city) {
	return 0.0059;
}

function sk_prop_tax($city) {
       return 0.0164;
}

function mb_prop_tax($city) {
       return 0.0143;
}

function on_prop_tax($city) {

	if ($city == "Ajax")
		return 0.01381;

	else if ($city == "Aurora")
		return 0.0108;

	else if ($city == "Barrie")
		return 0.0134;

	else if ($city == "Brampton")
		return 0.0048;

	else if ($city == "Toronto")
		return 0.0083;

	else
		return 0.0122;
}

function qc_prop_tax($city) {
     return 0.0095;
}

function nb_prop_tax($city) {
    return 0.0144;
}


function pe_prop_tax($city) {
    return 0.01670;
}

function ns_prop_tax($city) {
     return 0.0127;
}

function nl_prop_tax($city) {

	return 0.0101;
}

function yk_prop_tax($city) {

	return 0.0101;
}

function nt_prop_tax($city) {

	return 0.0101;
}

function nu_prop_tax($city) {

	return 0.0101;
}


   public function AffordabiltyCalAction() {       
        return $this->render('AcmeDemoBundle:Demo:affordability-cal.html.twig');
    }

   public function getAffordabilityTableAction(Request $request) {       
               
       $annual_income = $request->request->get('annual_income');
       $co_income = $request->request->get('co_income');
       $prop_tax = $request->request->get('prop_tax');
       $condo = $request->request->get('condo');
       $heating = $request->request->get('heating');
       $prop_tax_flag = $request->request->get('property-tax-check');
       $condo_flag = $request->request->get('condo');
       $heating_flag = $request->request->get('heating-cost-check');
       $monthly_finance = $request->request->get('monthly_finance');
       $province = $request->request->get('province');
       $city = $request->request->get('city');
       
       $total_income = $annual_income + $co_income;
       
       if($prop_tax_flag == '1')
       {
           $prop_tax = 1;
       }
       
       if($heating_flag == '1')
       {
           $heating = 156;
       }
       
       $monthly_living = $prop_tax + $condo + $heating;
       
       
       $gds =  ($total_income / 12) - $monthly_living;
       $tds =  ($total_income / 12) - ($monthly_living + $monthly_finance);
       
     
       $temp_installment= ($gds < $tds) ? $gds : $tds;
      
       $number_of_payments = 30 * 12;
            
       $desired_interest_rate = (0.99 / 100) / 12;
            
       $principal = $temp_installment / (($desired_interest_rate*pow((1+$desired_interest_rate),$number_of_payments))/(pow((1+$desired_interest_rate),$number_of_payments)-1));
            
       $askprice = ($principal * 100)/80;
       
       if ($province == "BC")
		 $prop_tax = $this->bc_prop_tax($city) * $askprice / 12;

	else if ($province == "AL")
		$prop_tax=$this->ab_prop_tax($city) * $askprice / 12;

	else if ($province == "SK")
		echo ($this->sk_prop_tax($city) * $askprice / 12);

	else if ($province == "MA")
		$prop_tax=$this->mb_prop_tax($city) * $askprice / 12;

	else if ($province == "ON")
		$prop_tax=$this->on_prop_tax($city) * $askprice / 12;

	else if ($province == "QU")
		$prop_tax=$this->qc_prop_tax($city) * $askprice / 12;

	else if ($province == "NB")
		$prop_tax=$this->nb_prop_tax($city) * $askprice / 12;

	else if ($province == "NS")
		$prop_tax=$this->ns_prop_tax($city) * $askprice / 12;

	else if ($province == "PE")
		$prop_tax=$this->pe_prop_tax($city) * $askprice / 12;

	else if ($province == "NE")
		$prop_tax=$this->nl_prop_tax($city) * $askprice / 12;

	else if ($province == "YU")
		$prop_tax=$this->yk_prop_tax($city) * $askprice / 12;

	else if ($province == "NT")
		 $prop_tax=$this->nt_prop_tax($city) * $askprice / 12;

	else
	    echo 0;
        
        $actual_monthly_living = $prop_tax + $condo + $heating;
       
       
       $actual_gds = 0.39 * ($total_income / 12) - $actual_monthly_living;
       $actual_tds = 0.44 * ($total_income / 12) - ($actual_monthly_living + $monthly_finance);

       $installment= ($actual_gds < $actual_tds) ? $actual_gds : $actual_tds;
       
       $actual_principal = $installment / (($desired_interest_rate*pow((1+$desired_interest_rate),$number_of_payments))/(pow((1+$desired_interest_rate),$number_of_payments)-1));
            
       $actual_askprice = ($actual_principal * 100)/80;
       
       $downpay = $actual_askprice * 0.2;
      
       $all_data = array();
       
       $all_data['askprice'] = $actual_askprice;
       $all_data['downpay'] = $downpay;
       $all_data['insurance'] = 0;
       $all_data['principal'] = $actual_principal;
       $all_data['installment'] = $installment;
       $all_data['prop_tax'] = $prop_tax;
       $all_data['condo'] = $condo;
       $all_data['heating'] = $heating;
       
       echo json_encode($all_data);
       exit;
       
    }
    
   public function getAffordabilityDownAction(Request $request) {       
               
       $annual_income = $request->request->get('annual_income');
       $co_income = $request->request->get('co_income');
       $prop_tax = $request->request->get('prop_tax');
       $condo = $request->request->get('condo');
       $heating = $request->request->get('heating');
       $prop_tax_flag = $request->request->get('property-tax-check');
       $condo_flag = $request->request->get('condo');
       $heating_flag = $request->request->get('heating-cost-check');
       $monthly_finance = $request->request->get('monthly_finance');
       $province = $request->request->get('province');
       $city = $request->request->get('city');
       $downpayment = $request->request->get('downpayment');
       $years = $request->request->get('years');
       $rate = $request->request->get('rate');
       
       $total_income = $annual_income + $co_income;
       
       if($prop_tax_flag == '1')
       {
           $prop_tax = 1;
       }
       
       if($heating_flag == '1')
       {
           $heating = round($this->utilities_estimate($total_income, $province) / 2);
       }
       
       $monthly_living = $prop_tax + $condo + $heating;
       
       
       $gds = 0.39 * ($total_income / 12) - $monthly_living;
       $tds = 0.44 * ($total_income / 12) - ($monthly_living + $monthly_finance);
       
     
       $temp_installment= ($gds < $tds) ? $gds : $tds;
      
       $number_of_payments = $years * 12;
            
       $desired_interest_rate = ($rate / 100) / 12;
            
       $principal = $temp_installment / (($desired_interest_rate*pow((1+$desired_interest_rate),$number_of_payments))/(pow((1+$desired_interest_rate),$number_of_payments)-1));
        
       $downpayment_percent = $downpayment / ($principal + $downpayment);
       
       $askprice = $principal/$downpayment_percent;
       
       if ($province == "BC")
		 $prop_tax = $this->bc_prop_tax($city) * $askprice / 12;

	else if ($province == "AL")
		$prop_tax=$this->ab_prop_tax($city) * $askprice / 12;

	else if ($province == "SK")
		echo ($this->sk_prop_tax($city) * $askprice / 12);

	else if ($province == "MA")
		$prop_tax=$this->mb_prop_tax($city) * $askprice / 12;

	else if ($province == "ON")
		$prop_tax=$this->on_prop_tax($city) * $askprice / 12;

	else if ($province == "QU")
		$prop_tax=$this->qc_prop_tax($city) * $askprice / 12;

	else if ($province == "NB")
		$prop_tax=$this->nb_prop_tax($city) * $askprice / 12;

	else if ($province == "NS")
		$prop_tax=$this->ns_prop_tax($city) * $askprice / 12;

	else if ($province == "PE")
		$prop_tax=$this->pe_prop_tax($city) * $askprice / 12;

	else if ($province == "NE")
		$prop_tax=$this->nl_prop_tax($city) * $askprice / 12;

	else if ($province == "YU")
		$prop_tax=$this->yk_prop_tax($city) * $askprice / 12;

	else if ($province == "NT")
		 $prop_tax=$this->nt_prop_tax($city) * $askprice / 12;

	else
	    echo 0;
        
        $actual_monthly_living = $prop_tax + $condo + $heating;
       
       
       $actual_gds = 0.39 * ($total_income / 12) - $actual_monthly_living;
       $actual_tds = 0.44 * ($total_income / 12) - ($actual_monthly_living + $monthly_finance);

       $installment= ($actual_gds < $actual_tds) ? $actual_gds : $actual_tds;
       
       $actual_principal = $installment / (($desired_interest_rate*pow((1+$desired_interest_rate),$number_of_payments))/(pow((1+$desired_interest_rate),$number_of_payments)-1));
         
       $downpayment_percent = $downpayment / ($actual_principal + $downpayment);
       
       $actual_askprice = $actual_principal/$downpayment_percent;
       
       $all_data = array();
       
       $all_data['askprice'] = $actual_askprice;
       $all_data['downpay'] = $downpayment;
       $all_data['insurance'] = $this->mortgage_insurance(1 - $downpayment_percent);
       $all_data['principal'] = $actual_principal;
       $all_data['installment'] = $installment;
      
       echo json_encode($all_data);
       exit;
       
    }
    
    
   
public function utilities_estimate($income, $province) {
    
    $utilities_estimate_table = array( "AL" => array(190, 215, 257, 289, 263, 315, 356),
		"BC" => array(131, 155, 202, 178, 191, 224, 259),
		"SK" => array(158, 223, 239, 277, 275, 290, 341),
		"MA" => array(158, 223, 239, 277, 275, 290, 341),
		"NB" => array(245, 285, 319, 347, 333, 316, 339),
		"NE" => array(245, 285, 319, 347, 333, 316, 339),
		"NS" => array(245, 285, 319, 347, 333, 316, 339),
		"PE" => array(245, 285, 319, 347, 333, 316, 339),
		"ON" => array(203, 276, 294, 311, 308, 390, 425),
		"QU" => array(94, 135, 168, 174, 187, 210, 235)
	);

    
	if ($income == null || $province == null)
		return 0;

	$bracket = null;
        
	if ($income > 150000)
		$bracket = 6;
	else if ($income > 100000)
		$bracket = 5;
	else if ($income > 80000)
		$bracket = 4;
	else if ($income > 60000)
		$bracket = 3;
	else if ($income > 40000)
		$bracket = 2;
	else if (income > 20000)
		$bracket = 1;
	else
		$bracket = 0;

	return $utilities_estimate_table[$province][$bracket];
}


public function getRefinanceEquity1Action() {       
        return $this->render('AcmeDemoBundle:Demo:max-equity-refinance1.html.twig');
}

public function getRefinanceEquityGoldenAction() {       
        return $this->render('AcmeDemoBundle:Demo:max-equity-refinance-golden.html.twig');
}

public function getRefinanceEquityAction() {       
        return $this->render('AcmeDemoBundle:Demo:max-equity-refinance.html.twig');
}

public function getRefinancePenalty1Action() {       
        return $this->render('AcmeDemoBundle:Demo:refinance-penalty1.html.twig');
}

public function getRefinancePenaltyAction() {       
        return $this->render('AcmeDemoBundle:Demo:refinance-penalty.html.twig');
}

public function getRefinancePenaltyGoldenAction() {       
        return $this->render('AcmeDemoBundle:Demo:refinance-penalty-golden.html.twig');
}

public function RefinanceCalculator1Action() {       
        return $this->render('AcmeDemoBundle:Demo:refinance-calculator1.html.twig');
}

public function RefinanceCalculatorAction() {       
        return $this->render('AcmeDemoBundle:Demo:refinance-calculator.html.twig');
}

public function RefinanceCalculatorGoldenAction() {       
        return $this->render('AcmeDemoBundle:Demo:refinance-calculator-golden.html.twig');
}

public function RefinanceCalculatorRatetradeAction() {       
        return $this->render('AcmeDemoBundle:Demo:refinance-calculator-ratetrade.html.twig');
}

public function DebtConsolidationAction() {       
        return $this->render('AcmeDemoBundle:Demo:debt-console.html.twig');
}

     
}
