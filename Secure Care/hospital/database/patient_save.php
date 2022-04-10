<?php
include('../../db_connect/db.php');

	$mdcpatid=$_POST["mdcpatid"];
	$mrs=$_POST["mrs"];
	$name=$_POST["name"];
	$sex=$_POST["sex"];
	$dob=$_POST["dob"];
	$age=$_POST["age"];
	$qul=$_POST["qul"];
	$addr=$_POST["addr"];
	$cont1=$_POST["cont1"];
	$cont2=$_POST["cont2"];
	$email=$_POST["email"];
	$district=$_POST["district"];
	$thaluk=$_POST["thaluk"];
	$panchayath=$_POST["panchayath"];
	$ward=$_POST["ward"];
	$jdate=$_POST["jdate"];
	$blgrp=$_POST["blgrp"];
	$aadharno=$_POST["aadharno"];
	$descp=$_POST["descp"];
	$hdname=$_POST["hdname"];
	
	$image = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
	$image_name = addslashes($_FILES['photo1']['name']);
	$image_size = getimagesize($_FILES['photo1']['tmp_name']);
	move_uploaded_file($_FILES["photo1"]["tmp_name"], "../../admin/patient_photo/" . $_FILES["photo1"]["name"]);
	$photo1 = $_FILES["photo1"]["name"];
	
$sql = "insert into patient(mdcpatid,mrs,name,sex,dob,age,qul,addr,cont1,cont2,email,district,thaluk,panchayath,ward,jdate,blgrp,aadharno,photo,descp,hdname) VALUES ('$mdcpatid','$mrs','$name','$sex','$dob','$age','$qul','$addr','$cont1','$cont2','$email','$district','$thaluk','$panchayath','$ward','$jdate','$blgrp','$aadharno','$photo1','$descp','$hdname')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../patient_register.php");

?>		
	
		
