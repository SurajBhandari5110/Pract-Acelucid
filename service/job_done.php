<?php
require_once '../db.php';

$title = $_POST["title"];
$designation = $_POST["designation"];
$place = $_POST["place"];
$jtype = $_POST["jtype"];
$jd = $_POST["jd"];

$a1=strtolower($title);
$a2=strtolower($designation);
$a3=strtolower($place);

$alias = str_replace(' ', '-', $a1.'-'.$a2.'-'.$a3);

if($jtype == 'Full-time'){
	$job_c = "F";
}
elseif($jtype == 'Part-time'){
	$job_c = "P";
}else{
	$job_c = "C";
}
	
// Insert info into database table!
$sql_insert_data = "INSERT INTO career(alias, title, job_type, job_c, place, jd, position) VALUES ('$alias','$title','$jtype','$job_c','$place','$jd','$designation')";
	mysqli_query($conn, $sql_insert_data) or die("Applied query fail ". mysqli_error($conn));

echo "done";
?>
