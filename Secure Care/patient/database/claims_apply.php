<?php
include('../../db_connect/db.php');

	$mdcpatid=$_POST["mdcpatid"];
	$pname=$_POST["pname"];
	$age=$_POST["age"];
	$sex=$_POST["sex"];
	$cont1=$_POST["cont1"];
	$hdname=$_POST["hdname"];
	$docname=$_POST["docname"];
	$aadharno=$_POST["aadharno"];
	$cdate=$_POST["cdate"];
	$mdcinsid=$_POST["mdcinsid"];
	$cmpny=$_POST["cmpny"];
	$iccntn1=$_POST["iccntn1"];
	$descpd=$_POST["descpd"];
	$amount=$_POST["amount"];
	$diseas=$_POST["diseas"];
	$dat=$_POST["dat"];
	$tm=$_POST["tm"];
	
	$stat='pending';
	
	$sql = "insert into insuranceapply(mdcpatid,pname,age,sex,cont1,hdname,docname,aadharno,cdate,mdcinsid,cmpny,iccntn1,descpd,amount,diseas,dat,tm,stat) VALUES ('$mdcpatid','$pname','$age','$sex','$cont1','$hdname','$docname','$aadharno','$cdate','$mdcinsid','$cmpny','$iccntn1','$descpd','$amount','$diseas','$dat','$tm','$stat')";
	$q1 = $db->prepare($sql);
	$q1->execute();

	header("location:../index.php");

?>			
		
        
