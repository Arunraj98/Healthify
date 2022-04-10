<?php
include('../../db_connect/db.php');

	$censuspid=$_POST["censuspid"];
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
	$utyp="census";
	
$sql = "insert into census(censuspid,name,inchaprsn,cntn1,cntn2,email,addr,wbaddr,jdate,username,password,stat,utyp)VALUES('$censuspid','$name','$inchaprsn','$cntn1','$cntn2','$email','$addr','$wbaddr','$jdate','$username','$password','$stat','$utyp')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../census_register.php");

?>				

		
