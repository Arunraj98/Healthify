<?php
include('../../db_connect/db.php');


	$hostid=$_GET["hostid"]; 	
	
	
$sql = "update hospital set stat='inactive' where hostid='$hostid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../hospital_permission.php");

?>						

