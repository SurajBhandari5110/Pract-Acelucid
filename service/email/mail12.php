<?php



$emailsend = $_POST["email"]; 

$clientname = $_POST["firstname"];

$message = $_POST["message"];

require_once '../../db.php';

$a1 = $_POST["firstname"];
$a2 = $_POST["email"];
$a3 = $_POST["message"];

//$employee_id_upload = $_POST["employee_id_upload"];

	
// Insert info into database table!
$sql_insert_data = "INSERT INTO contact(name, email, msg) VALUES('$a1','$a2','$a3')";
	mysqli_query($conn, $sql_insert_data) or die("Applied query fail ". mysqli_error($conn));


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

    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through

    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication

    $mail->Username   = 'noreply@acelucid.com';                     // SMTP username

    $mail->Password   = 'Noreply@789';                               // SMTP password

    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged

    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients

    $mail->setFrom('noreply@acelucid.com', 'Alert Acelucid Connect');

    $mail->addAddress('saket.vyas@acelucid.com', 'Hello Ace');     // Add a recipient

           // Name is optional

      $mail->addReplyTo('noreply@acelucid.com', 'Alert Acelucid Connect');

    //$mail->addCC('unix_xnu@yahoo.co.in');

   

$body='

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">


<p style="font-size: 16px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px; margin: 0;"><span style="font-size: 16px;"> Name: '.$clientname;  

$body.='.</p>


<p style="font-size: 16px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px; margin: 0;"><span style="font-size: 16px;"> Email: '.$emailsend;

$body.=' </p>

<p style="font-size: 16px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px; margin: 0;"><span style="font-size: 16px;"> Message: '.$message;

$body.=' </p>

</body>

</html>

';

    // Attachments

    // Content

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Alert Message from Acelucid Connect';

    $mail->Body    = $body;

  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	//$mail->addAttachment('uploads/'.$invoicefile);

    $mail->send();

	

    echo 'Message has been sent';

} catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}



?>