<?php
include('../../db_connect/db.php');


	$mdcinsid=$_GET["mdcinsid"]; 	
	
	
$sql = "update insurance set stat='inactive' where mdcinsid='$mdcinsid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../insurance_permission.php");

?>						

