<?php
include('../../db_connect/db.php');


	$mdcdocid=$_GET["mdcdocid"]; 	
	
	
$sql = "update doctor set stat='inactive' where mdcdocid='$mdcdocid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../doctor_permission.php");

?>						

