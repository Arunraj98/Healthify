<?php
include('../../db_connect/db.php');

	$censuspid=$_POST["censuspid"];
	$cntn2=$_POST["cntn2"];
	$email=$_POST["email"];
	$addr=$_POST["addr"];
	$wbaddr=$_POST["wbaddr"];
	
	
$sql = "update census set cntn2='$cntn2',email='$email',addr='$addr',wbaddr='$wbaddr' where censuspid='$censuspid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						
