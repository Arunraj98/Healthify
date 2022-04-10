<?php
include('../../db_connect/db.php');

	$mdcdcid=$_POST["mdcdcid"];
	$cntn2=$_POST["cntn2"];
	$email=$_POST["email"];
	$addr=$_POST["addr"];
	$wbaddr=$_POST["wbaddr"];
	
	
$sql = "update district set cntn2='$cntn2',email='$email',addr='$addr',wbaddr='$wbaddr' where mdcdcid='$mdcdcid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

