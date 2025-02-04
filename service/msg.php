<?php
require_once '../db.php';

$a1 = $_POST["firstname"];
$a2 = $_POST["email"];
$a3 = $_POST["message"];

//$employee_id_upload = $_POST["employee_id_upload"];

	
// Insert info into database table!
$sql_insert_data = "INSERT INTO contact(name, email, msg) VALUES('$a1','$a2','$a3')";
	mysqli_query($conn, $sql_insert_data) or die("Applied query fail ". mysqli_error($conn));

  //Mail to client

$url = 'https://al.acelucid.com/service/email/mail.php';



$fields = array(
'firstname' => $a1,
    'email' => $a2,
    'message' => $a3
);

	

	$ch = curl_init();

//set the url, number of POST vars, POST data

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_POST, count($fields));

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//execute post

curl_exec($ch);

// Close handle

curl_close($ch);

/////


echo "done";
?>
