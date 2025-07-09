<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$baseurl = "https://www.ratetrade.ca/";
$hostname = "localhost";
$username = "ratetrad_webs";
$password = "ratetrade@123";
$dbname = "ratetrad_webs";
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$name= '';
$email= '';
$phone= '';
$subject='';
$messages='';

$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$subject=$_POST['subject'];
$messages=$_POST['message'];
$mail = new PHPMailer(true);
if($name!='' && $email!='' && $subject!='' && $phone!='' &&  $messages!='') 
{
    
    
    try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
            $mail->isSMTP();                                            
            $mail->Host       = 'mail.ratetrade.ca';                    
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = 'admin@ratetrade.ca';                     
            $mail->Password   = 'lPvf?Cjd9T,J';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465; 
            // $to = "admin@ratetrade.ca,golden.mortgages@gmail.com";
            // $subject = isset($subject) ? $subject : 'New Message || Contact Form Enquiry';
            // $header = "From: info@ratetrade.ca" . "\r\n" . "Reply-To: $email" . "\r\n" . "Content-type:text/html;charset=iso-8859-1" . "\r\n"."X-Mailer: PHP/" . phpversion ();
        
            $name= $_POST['name'];
            $email= $_POST['email'];
            $phone= $_POST['phone'];
            $subject=$_POST['subject'];
            $messages=$_POST['message'];
            $subject = isset($subject) ? $subject : 'New Message || Contact Form Enquiry';
            $mailSubject = 'Confirmation of Form Submission - Thank you for choosing'; 

            mysqli_query($conn, "INSERT INTO `contact_us`(`name`, `email`,`number`, `subject`, `messages`) VALUES ('".$name."','".$email."','".$phone."','".$subject."','".$messages."')");

            $imageurl="https://www.ratetrade.ca/bundles/assets/img/logo.png";
            $message = "<html><body >";
            $message .= "<div style='background:#dcdcdc; width:499px; padding:4px 5px;'><table style='width:500px; background-color:#fff;border:0; padding:10px; margin:0 auto;' cellpadding='0' cellpadding='0'><tr><td colspan='2'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='color:#0eabd4;background:#68c1dc;padding:10px 0;border-bottom: 2px solid #eee;border-top: 2px solid #eee;border-left: 2px solid #eee;border-right: 2px solid #eee;padding: 5px;text-align: center;'> <input type='image' src='$imageurl' /></td></tr></table></td></tr>";
            $message .= "<tr><td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Name</td><td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $name. PHP_EOL . "</td> </tr>";
            $message .= "<tr><td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Email</td><td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $email . PHP_EOL . "</td> </tr>";
            $message .= "<tr><td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Phone Contact</td><td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $phone . PHP_EOL . "</td> </tr>";
            $message .= "<tr><td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Subject</td><td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $subject . PHP_EOL . "</td> </tr>";
            $message .= "<tr><td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Message To</td><td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $messages . PHP_EOL . "</td> </tr>";
            $message .= "</table></div>";
            $message .= "</body></html>";
            
            $Sendmessage = '<html><head><meta charset=UTF-8><title>Confirmation of Form Submission</title></head><body style=font-family:Arial,sans-serif;background-color:#f4f4f4><div style="width:600px;margin:0 auto;background-color:#fff;padding:20px;border-radius:4px;box-shadow:0 0 10px rgba(0,0,0,.1)"><div style=background:#69c0dc;text-align:center;margin-bottom:20px><img alt="RateTrade Logo"src="https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/ratetrade.jpg?format=webg"style=width:200px></div><h3 style=color:#333;font-size:24px;margin-bottom:20px>Dear ' . $name . ',</h3><p style=color:#555;font-size:16px;margin-bottom:20px>Thank you for submitting the form on our website. We have received your information and appreciate your interest in Ratetrade.ca<div style=text-align:center><a href=https://www.ratetrade.ca style="background-color:#4caf50;color:#fff;padding:10px 20px;text-decoration:none;display:inline-block;border-radius:5px">Visit Website</a></div><p style=color:#555;font-size:16px;margin-bottom:20px>If you have any additional questions or require further assistance, please feel free to reach out to us. We will be happy to help you.<p style=color:#555;font-size:16px;margin-bottom:20px>Thank you again for choosing RateTrade!</p><br><br><span style=font-weight:700>Best regards,</span><p style=color:#555;font-size:16px>Name: Rate Trade Management<br>Website: ratetrade.ca<br>Email: contact@ratetrade.ca<br>Phone: +1 (905) 676 0008<br>Address: 2960 Drew Rd. Unit# 139, Mississauga ON L4T 0A5<p style=color:#555;font-size:16px>Once again, thank you for choosing ratetrade.ca. We look forward to serving you.<div id=signature><p style=color:#777;font-size:14px;text-align:center>© 2016 - 2025 <a href=https://www.ratetrade.ca>Ratetrade.ca</a></div></div></body></html>';
            
            $mail->setFrom('admin@ratetrade.ca', 'Ratetrade');
            $mail->addAddress('info@ratetrade.ca');
            $mail->addAddress('vr7979@gmail.com');
            $mail->addAddress('admin@ratetrade.ca', 'Rate Trade');
            $mail->addAddress('amrik@vsrlawfirm.com', 'Ratetrade');
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->isHTML(true);
            $mail->Body	= $message;
            $mail->send();
            $mail->clearAddresses();
            
            $mail->setFrom('no-reply@ratetrade.ca', 'Ratetrade');
            $mail->addAddress($email, $name);
            $mail->isHTML(true);                                  
            $mail->Subject = $mailSubject;
            $mail->isHTML(true);
            $mail->Body	= $Sendmessage;
    
           
            $mail->send();
        echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
} else {
    if(isset($email) && $email!= ''){
        if(mysqli_num_rows(mysqli_query($conn ,"SELECT * FROM `subscription_email` WHERE email='".$_POST['email']."' "))>0) {
            //   mysqli_query($con , "INSERT INTO  subscription_email (email) VALUE ('".$_POST['email']."')");
            //   $msg = 'Thank you for subscribing with us, You will be updated with our latest updates.';
              echo 'ok';
          } else {
                 $subject = 'Subscription Confirmation for RateTrade.ca Mortgage Updates';
                 mysqli_query($conn , "INSERT INTO  subscription_email (email) VALUE ('".$_POST['email']."')");
$Sendmessage = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Subscription Confirmation for RateTrade.ca Mortgage Updates</title>
<style>
    body {
        font-family: Arial, sans-serif !important;
        line-height: 1.6 !important;
        margin: 0 !important;
        padding: 0 !important;
        background-color: #f4f4f4 !important;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff !important;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    }

    header {
        text-align: center;
        margin-bottom: 20px;
        background: #68c1dc;
    }

    header img {
        max-width: 92px;
    }

    footer {
        padding: 2% 4%;
        margin-top: 20px;
        text-align: center;
        font-size: 14px;
        color: #666 !important;
        background: linear-gradient(347deg, rgb(239 225 225) 0, rgb(104 193 220) 100%) !important;
    }

    .social-icons {
        margin-top: 10px;
    }

    .social-icons a {
        display: inline-block;
        margin: 0 10px;
        color: #666 !important;
    }

    .unsubscribe {
        margin-top: 20px;
        font-size: 12px !important;
        color: #999 !important;
    }

    .contact-info {
        float: left;
    }

    .social-icons {
        float: right;
    }

    .unsubscribe {
        clear: both;
        text-align: center;
        margin-top: 20px;
    }
</style>
</head>
<body>
<div class="container">
    <header><img src="https://www.ratetrade.ca/bundles/assets/img/logo.png" alt="RateTrade.ca Logo"></header>
    <p>Dear Subscriber,</p>
    <p>Thank you for subscribing to updates from RateTrade.ca, your trusted Mortgage Broker! We\'re excited to have you join us as we navigate the world of mortgages and finance together.</p>
    <p>As a subscriber, you can expect to receive:</p>
    <ul>
        <li>Expert insights and advice on mortgage options</li>
        <li>Market updates specific to mortgage trends</li>
        <li>Exclusive offers and promotions tailored to your needs</li>
    </ul>
    <p>If you have any questions or wish to provide feedback, please don\'t hesitate to contact us at <a href="mailto:info@ratetrade.ca">info@ratetrade.ca</a> or visit our website at <a href="https://www.ratetrade.ca">www.ratetrade.ca</a>.</p>
    <p>Thank you once again for subscribing. We look forward to assisting you with valuable information and opportunities through RateTrade.ca!</p>
    <footer>
        <div class="contact-info"><i class="fas fa-phone-alt"></i><a href="+19056760008">+1 (905) 676 0008</a><br><i class="fas fa-envelope"></i><a href="mailto:info@ratetrade.ca">info@ratetrade.ca</a></div>
        <div class="social-icons"><a href="https://www.facebook.com/ratetrade" target="_blank"><i class="fab fa-facebook-square"></i></a><a href="https://twitter.com/ratetrade" target="_blank"><i class="fab fa-twitter-square"></i></a><a href="https://www.linkedin.com/company/ratetrade" target="_blank"><i class="fab fa-linkedin"></i></a></div>
        <div class="unsubscribe"><p>To unsubscribe from our updates, <a href="https://www.ratetrade.ca/unsubscribe-link"><i class="fas fa-ban"></i></a></p></div>
    </footer>
</div>
</body>
</html>';
                 try {
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
                    $mail->isSMTP();                                            
                    $mail->Host       = 'mail.ratetrade.ca';                    
                    $mail->SMTPAuth   = true;                                  
                    $mail->Username   = 'admin@ratetrade.ca';                     
                    $mail->Password   = 'lPvf?Cjd9T,J';                               
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                    $mail->Port       = 465; 
                    $mail->setFrom('no-reply@ratetrade.ca', 'Ratetrade');
                    $mail->addAddress($email, 'dear subscriber');
                    $mail->isHTML(true);                                  
                    $mail->Subject = $subject;
                    $mail->isHTML(true);
                    $mail->Body	= $Sendmessage;
                    $mail->send();
                    
                echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            echo  $msg = 'Thank you for subscribing with us, You will be updated with our latest updates.';
            
          }
    } else  {
        echo 'no';
    }
}

?>