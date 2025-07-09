<?php 
        $name= $_POST['fname'];
         $email= $_POST['email'];
        $phone=$_POST['phone'];
        $location=$_POST['location'];
        $besttime=$_POST['besttime'];
         $purpose=$_POST['purpose'];
         $messages=$_POST['message'];
        if($name!='' && $email!='' && $location!='' && $besttime!='' && $purpose!='' && $messages!='')
        {
        $to = "admin@ratetrade.ca,golden.mortgages@gmail.com";
        $imageurl="https://www.ratetrade.ca/bundles/assets/img/logo.png";
        $subject = isset($subject) ? $subject : 'New Message || lead';
    	$header = "From: info@ratetrade.ca" . "\r\n" . "Reply-To: $email" . "\r\n" . "Content-type:text/html;charset=iso-8859-1" . "\r\n"."X-Mailer: PHP/" . phpversion ();
    	$message = "<html><body >";
    	$message .= "<div style='background:#dcdcdc; width:499px; padding:4px 5px;'>
    				<table style='width:500px; background-color:#fff;border:0; padding:10px; margin:0 auto;' cellpadding='0' cellpadding='0'>
    				<tr><td colspan='2'><table width='100%' cellpadding='0' cellspacing='0' border='0'>
    				<tr><td style='color:#0eabd4;padding:10px 0;border-bottom: 2px solid #eee;border-top: 2px solid #eee;border-left: 2px solid #eee;border-right: 2px solid #eee;padding: 5px;text-align: center;'><img src='".$imageurl."' alt='Logo'style='max-width:186px;text-align:center;'></td>
    				</tr></table></td></tr>";
    	$message .= "<tr>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Name</td>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $name. PHP_EOL . "</td> </tr>";
    	
    	$message .= "<tr>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Email</td>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $email . PHP_EOL . "</td> </tr>";
    	$message .= "<tr>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Phone No-</td>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $phone . PHP_EOL . "</td> </tr>";				
        $message .= "<tr>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Location</td>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $location . PHP_EOL . "</td> </tr>";				
        $message .= "<tr>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Best Time</td>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $besttime . PHP_EOL . "</td> </tr>";				
    
    	$message .= "<tr>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Purpose</td>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $purpose . PHP_EOL . "</td> </tr>";
    				
    	$message .= "<tr>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Message To</td>
    					<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $messages . PHP_EOL . "</td> </tr>";				
    	$message .= "</table></div>";
    	$message .= "</body></html>";
    	mail ( $to, $subject, $message, $header );
        }

?>