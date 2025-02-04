<?php

// Import PHPMailer classes into the global namespace

// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader

require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions

$mail = new PHPMailer(true);


try {

    //Server settings

     $mail->SMTPDebug = 1;                      // Enable verbose debug output

    $mail->isSMTP();                                            // Send using SMTP

    $mail->Host       = 'mail.apspucsc.org';                    // Set the SMTP server to send through

    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication

    $mail->Username   = 'alert@apspucsc.org';                     // SMTP username

    $mail->Password   = 'Alert@321';                               // SMTP password

    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged

    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients

    $mail->setFrom('alert@apspucsc.org', 'Alert APSPU');

    $mail->addAddress('principalapspu973@gmail.com', 'Principal');     // Add a recipient

	// Name is optional

    $mail->addReplyTo('alert@apspucsc.org', 'Alert APSPU');

    //$mail->addCC('unix_xnu@yahoo.co.in');

$body='
New contact enquiry in panel
Link: https://apspucsc.org/faculty.php

';

    // Attachments

    // Content

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Trying to contact you';

    $mail->Body    = $body;

  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	//$mail->addAttachment('uploads/'.$invoicefile);

    $mail->send();

   echo 'Message has been sent';

} catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}



?>