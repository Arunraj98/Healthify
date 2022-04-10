<?php
include('../../db_connect/db.php');


	$mdcphid=$_GET["mdcphid"]; 	
	
	
$sql = "update pharmacy set stat='inactive' where mdcphid='$mdcphid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../pharmacy_permission.php");

?>						

