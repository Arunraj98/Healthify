<?php
include('../../db_connect/db.php');

	$mdcpatid=$_POST["mdcpatid"];
	$mrs=$_POST["mrs"];
	$name=$_POST["name"];
	$sex=$_POST["sex"];
	$dob=$_POST["dob"];
	$age=$_POST["age"];
	$cont1=$_POST["cont1"];
	$blgrp=$_POST["blgrp"];
	$aadharno=$_POST["aadharno"];
	$addr=$_POST["addr"];
	$district=$_POST["district"];
	$thaluk=$_POST["thaluk"];
	$panchayath=$_POST["panchayath"];
	$ward=$_POST["ward"];
	$hdname=$_POST["hdname"];
	$docname=$_POST["docname"];
	$diseas=$_POST["diseas"];
	$cdate=$_POST["cdate"];
	$diseasdesc=$_POST["diseasdesc"];
	$prescriptn=$_POST["prescriptn"];
	$lbtestdescp=$_POST["lbtestdescp"];
	
$sql = "insert into prescription(mdcpatid,mrs,name,sex,dob,age,cont1,blgrp,aadharno,addr,district,thaluk,panchayath,ward,hdname,docname,diseas,cdate,diseasdesc,prescriptn,lbtestdescp) VALUES ('$mdcpatid','$mrs','$name','$sex','$dob','$age','$cont1','$blgrp','$aadharno','$addr','$district','$thaluk','$panchayath','$ward','$hdname','$docname','$diseas','$cdate','$diseasdesc','$prescriptn','$lbtestdescp')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../prescription_search.php");

?>			
		

