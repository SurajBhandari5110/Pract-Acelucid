<?php

require_once '../../db.php';

// Import PHPMailer classes into the global namespace

// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader

require 'vendor/autoload.php';


$jobtype = $_POST["jobtitle"];
$fname =  $_POST["firstname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$title =$_POST["job"];
$file = "123";

$mail = new PHPMailer(true);

// Instantiation and passing `true` enables exceptions

try {

    //Server settings

     $mail->SMTPDebug = 1;                      // Enable verbose debug output

    $mail->isSMTP();                                            // Send using SMTP

    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through

    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication

    $mail->Username   = 'noreply@acelucid.com';                     // SMTP username

    $mail->Password   = 'Noreply@789';                               // SMTP password

    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged

    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients

    $mail->setFrom('noreply@acelucid.com', 'Alert Acelucid Career');

    $mail->addAddress('saket.vyas@acelucid.com', 'Hello Ace');     // Add a recipient

           // Name is optional

      $mail->addReplyTo('noreply@acelucid.com', 'Alert Acelucid Connect');

    //$mail->addCC('unix_xnu@yahoo.co.in');

   

$body='

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">

<p style="font-size: 16px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px; margin: 0;"><span style="font-size: 16px;"> Applied For: '.$title;  

$body.='.</p>
<p style="font-size: 16px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px; margin: 0;"><span style="font-size: 16px;"> Name: '.$fname; 

$body.='.</p>

<p style="font-size: 16px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px; margin: 0;"><span style="font-size: 16px;"> Email: '.$email;

$body.=' </p>

<p style="font-size: 16px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px; margin: 0;"><span style="font-size: 16px;"> Phone: '.$phone;

$body.=' </p>

<p style="font-size: 16px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px; margin: 0;"><span style="font-size: 16px;"> resume: <a href="http://acelucid.com/allogin/resumes/'.$file;
$body.='" target="_blank">Download CV</a> </p>

</body>

</html>

';

    // Attachments

    // Content

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'New Candidate Applied from Acelucid Career';

    $mail->Body    = $body;

  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	//$mail->addAttachment('uploads/'.$invoicefile);

    $mail->send();

	

    echo 'Message has been sent';

} catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}



?>