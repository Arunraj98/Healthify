<?php
include('../../db_connect/db.php');


	$mdcdocid=$_POST["mdcdocid"];

	$age=$_POST["age"];
	$qul=$_POST["qul"];
	$addr=$_POST["addr"];
	$cont=$_POST["cont"];
	$email=$_POST["email"];
	$special=$_POST["special"];
	$exp=$_POST["exp"];
	
	$designa=$_POST["designa"];
	$des=$_POST["des"];
	
	
$sql = "update doctor set age='$age',qul='$qul',addr='$addr',cont='$cont',email='$email',special='$special',exp='$exp',designa='$designa',des='$des' where mdcdocid='$mdcdocid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>			
		
        
