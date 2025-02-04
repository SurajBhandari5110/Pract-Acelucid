<?php

require_once '../db.php';
	
	$deleteuser=$_POST["deletefunc"];

	
	switch ($deleteuser) {
    
    case "message":
       $useremp=$_POST["empid"];
	    mysqli_query($conn,"DELETE FROM contact WHERE cid='$useremp'");
		echo "Message Deleted!";
	    break;
    
    case "app":
       $useremp=$_POST["empid"];
	   mysqli_query($conn,"DELETE FROM application WHERE appno='$useremp'");
		echo "Application Deleted!";
	    break;
		
	case "news":
       $useremp=$_POST["empid"];
	     mysqli_query($conn,"DELETE FROM news WHERE nid='$useremp'");
		echo "News Deleted!";
	    break;
			
	case "event":
       $useremp=$_POST["empid"];
	     mysqli_query($conn,"DELETE FROM event WHERE nid='$useremp'");
		echo "Event Deleted!";
	    break;
	
	default:
        echo "Server Error. Please try after some time!";
}
 

	?>