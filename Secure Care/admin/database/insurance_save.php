<?php
include('../../db_connect/db.php');

	$mdcinsid=$_POST["mdcinsid"];
	$name=$_POST["name"];
	$cmpny=$_POST["cmpny"];
	$cntn1=$_POST["cntn1"];
	$cntn2=$_POST["cntn2"];
	$email=$_POST["email"];
	$addr=$_POST["addr"];
	$wbaddr=$_POST["wbaddr"];
	$jdate=$_POST["jdate"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	$stat="active"; 
	$utyp="insurance";
	
$sql = "insert into insurance(mdcinsid,name,cmpny,cntn1,cntn2,email,addr,wbaddr,jdate,username,password,stat,utyp)VALUES('$mdcinsid','$name','$cmpny','$cntn1','$cntn2','$email','$addr','$wbaddr','$jdate','$username','$password','$stat','$utyp')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../insurance_register.php");

?>						

