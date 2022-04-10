<?php
include('../../db_connect/db.php');

	$mdcdcid=$_POST["mdcdcid"];
	$name=$_POST["name"];
	$inchaprsn=$_POST["inchaprsn"];
	$cntn1=$_POST["cntn1"];
	$cntn2=$_POST["cntn2"];
	$email=$_POST["email"];
	$addr=$_POST["addr"];
	$wbaddr=$_POST["wbaddr"];
	$jdate=$_POST["jdate"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	$stat="active"; 
	$utyp="district";
	
$sql = "insert into district(mdcdcid,name,inchaprsn,cntn1,cntn2,email,addr,wbaddr,jdate,username,password,stat,utyp)VALUES('$mdcdcid','$name','$inchaprsn','$cntn1','$cntn2','$email','$addr','$wbaddr','$jdate','$username','$password','$stat','$utyp')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../district_register.php");

?>					

	
