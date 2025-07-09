<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$name = 'abhishek mishra';
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'mail.ratetrade.ca';                    
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'admin@ratetrade.ca';                     
    $mail->Password   = 'lPvf?Cjd9T,J';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    $mail->setFrom('admin@ratetrade.ca', 'Mailer');
    $mail->addAddress('abhi.mishra07200@gmail.com', 'abhi');

    $mail->isHTML(true);                                  
    $mail->Subject = 'Confirmation of Form Submission';
    $mail->isHTML(true);
    $mail->Body    = '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Confirmation of Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <div style="width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 4px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div style="background: #69c0dc; text-align: center; margin-bottom: 20px;">
            <img src="https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/ratetrade.jpg?format=webg" alt="RateTrade Logo" style="width: 200px;">
        </div>
        <h3 style="color: #333333; font-size: 24px; margin-bottom: 20px;">Dear ' . $name . ',</h3>
        <p style="color: #555555; font-size: 16px; margin-bottom: 20px;">Thank you for submitting the form on our website. We have received your information and appreciate your interest in Ratetrade.ca</p>
        <div style="text-align: center;">
            <a href="https://www.ratetrade.ca" style="background-color: #4caf50; color: white; padding: 10px 20px; text-decoration: none; display: inline-block; border-radius: 5px;">Visit Website</a>
        </div>
        <p style="color: #555555; font-size: 16px; margin-bottom: 20px;">If you have any additional questions or require further assistance, please feel free to reach out to us. We will be happy to help you.</p>
        <p style="color: #555555; font-size: 16px; margin-bottom: 20px;">Thank you again for choosing RateTrade!</p>
        <br><br>
        <span style="font-weight: bold;">Best regards,</span>
        <p style="color: #555555; font-size: 16px;">
            Name: Rate Trade Management<br>
            Website: ratetrade.ca <br>
            Email: contact@ratetrade.ca <br>
            Phone: +1 (905) 676 0008 <br>
            Address: 2960 Drew Rd. Unit# 139, Mississauga ON L4T 0A5
        </p>
        <p style="color: #555555; font-size: 16px;">Once again, thank you for choosing ratetrade.ca. We look forward to serving you.</p>
        <div id="signature">
            <p style="color: #777777; font-size: 14px; text-align: center;">&copy; 2016 - 2023 <a href="https://www.ratetrade.ca">Ratetrade.ca</a></p>
        </div>
    </div>
</body>
</html>';


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}