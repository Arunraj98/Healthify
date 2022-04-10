<?php
include('../../db_connect/db.php');

	$mdcpanid=$_POST["mdcpanid"];
	$cntn2=$_POST["cntn2"];
	$email=$_POST["email"];
	$addr=$_POST["addr"];
	$wbaddr=$_POST["wbaddr"];
	
	
$sql = "update panchayath set cntn2='$cntn2',email='$email',addr='$addr',wbaddr='$wbaddr' where mdcpanid='$mdcpanid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

