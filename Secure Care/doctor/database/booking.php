<?php
include('../../db_connect/db.php');


	$hbkid=$_POST["hbkid"];
	$dat=$_POST["dat"];
	$tm=$_POST["tm"];
	$stat=$_POST["stat"];
		
$sql = "update booking set dat='$dat',tm='$tm',stat='$stat' where hbkid='$hbkid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../booking_pending.php");

?>			
		
        
