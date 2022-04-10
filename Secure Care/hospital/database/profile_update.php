<?php
include('../../db_connect/db.php');


	$hostid=$_POST["hostid"]; 
	$cntn2=$_POST["cntn2"]; 
	$special=$_POST["special"]; 
	$seplty=$_POST["seplty"]; 
	$typ=$_POST["typ"]; 
	$exp=$_POST["exp"]; 
	
	$location=$_POST["location"]; 
	$addr=$_POST["addr"]; 
	$email=$_POST["email"]; 
	
	
$sql = "update hospital set location='$location',addr='$addr',email='$email',special='$special',seplty='$seplty',typ='$typ',exp='$exp' where hostid='$hostid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

