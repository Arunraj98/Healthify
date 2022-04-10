<?php
include('../../db_connect/db.php');


	$censuspid=$_GET["censuspid"]; 	
	
	
$sql = "update census set stat='active' where censuspid='$censuspid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../census_permission.php");

?>						

