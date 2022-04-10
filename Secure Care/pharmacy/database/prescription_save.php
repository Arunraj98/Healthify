<?php
include('../../db_connect/db.php');

	$mdcpatid=$_POST["mdcpatid"];
	$name=$_POST["name"];
	$sex=$_POST["sex"];
	$dob=$_POST["dob"];
	$age=$_POST["age"];
	$cont1=$_POST["cont1"];
	$blgrp=$_POST["blgrp"];
	$hdname=$_POST["hdname"];
	$docname=$_POST["docname"];
	$diseas=$_POST["diseas"];
	$cdate=$_POST["cdate"];
	$diseasdesc=$_POST["diseasdesc"];
	$prescriptn=$_POST["prescriptn"];
	$amount=$_POST["amount"];
	$date=$_POST["date"];
	$pharmacy=$_POST["pharmacy"];
	

	
$sql = "insert into pharmacyamount(mdcpatid,name,sex,dob,age,cont1,blgrp,hdname,docname,diseas,cdate,diseasdesc,prescriptn,amount,date,pharmacy) VALUES ('$mdcpatid','$name','$sex','$dob','$age','$cont1','$blgrp','$hdname','$docname','$diseas','$cdate','$diseasdesc','$prescriptn','$amount','$date','$pharmacy')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../prescription_search.php");

?>			
		
        
