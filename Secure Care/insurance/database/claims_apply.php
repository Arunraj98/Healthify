<?php
include('../../db_connect/db.php');

	$inscmpid=$_POST["inscmpid"];

	$amount=$_POST["amount"];
	$dat=$_POST["dat"];
	$tm=$_POST["tm"];
	
	$stat=$_POST["stat"];
	
	$sql = "update insuranceapply set amount='$amount',dat='$dat',tm='$tm',stat='$stat' where inscmpid='$inscmpid'";
	$q1 = $db->prepare($sql);
	$q1->execute();

	header("location:../claims_pending.php");

?>			
		

