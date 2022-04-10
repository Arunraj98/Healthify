<?php
include('../../db_connect/db.php');


	$mdclbid=$_GET["mdclbid"]; 	
	
	
$sql = "update laboratory set stat='active' where mdclbid='$mdclbid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../laboratory_permission.php");

?>						

