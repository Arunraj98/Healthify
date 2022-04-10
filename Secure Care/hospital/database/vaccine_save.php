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
	$vaccine=$_POST["vaccine"];
	$descr=$_POST["descr"];
	
	$date=date("Y-m-d");
	
	$image = addslashes(file_get_contents($_FILES['cert']['tmp_name']));
	$image_name = addslashes($_FILES['cert']['name']);
	$image_size = getimagesize($_FILES['cert']['tmp_name']);
	move_uploaded_file($_FILES["cert"]["tmp_name"], "../../admin/vacci_photo/" . $_FILES["cert"]["name"]);
	$cert =$_FILES["cert"]["name"];
	
$sql = "insert into vaccine(mdcpatid,mrs,name,sex,dob,age,cont1,blgrp,aadharno,addr,district,thaluk,panchayath,ward,hdname,docname,diseas,cdate,vaccine,descr,cert,date) VALUES ('$mdcpatid','$mrs','$name','$sex','$dob','$age','$cont1','$blgrp','$aadharno','$addr','$district','$thaluk','$panchayath','$ward','$hdname','$docname','$diseas','$cdate','$vaccine','$descr','$cert','$date')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../prescription_search.php");

?>			
		
        
