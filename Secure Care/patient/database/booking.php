<?php
include('../../db_connect/db.php');

	$mdcpatid=$_POST["mdcpatid"];
	$pname=$_POST["pname"];
	$age=$_POST["age"];
	$sex=$_POST["sex"];
	$pcont1=$_POST["pcont1"];
	$dat=$_POST["dat"];
	$tm=$_POST["tm"];
	$bkid=$_POST["bkid"];
	$bkname=$_POST["bkname"];
	$hcntn1=$_POST["hcntn1"];
	$date=$_POST["date"];
	$diseases=$_POST["diseases"];
	$descrp=$_POST["descrp"];
	
	$stat='pending';
	
$sql = "insert into booking(mdcpatid,pname,age,sex,pcont1,dat,tm,bkid,bkname,hcntn1,date,diseases,descrp,stat) VALUES ('$mdcpatid','$pname','$age','$sex','$pcont1','$dat','$tm','$bkid','$bkname','$hcntn1','$date','$diseases','$descrp','$stat')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>			
		
        
