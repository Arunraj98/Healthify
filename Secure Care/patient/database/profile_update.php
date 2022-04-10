<?php
include('../../db_connect/db.php');

	$mdcpatid=$_POST["mdcpatid"];
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
	
	$image = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
	$image_name = addslashes($_FILES['photo1']['name']);
	$image_size = getimagesize($_FILES['photo1']['tmp_name']);
	move_uploaded_file($_FILES["photo1"]["tmp_name"], "../../admin/patient_photo/" . $_FILES["photo1"]["name"]);
	$photo1 = $_FILES["photo1"]["name"];
	
	if($photo1=="")
	{
		$sql = "update patient set age='$age',qul='$qul',addr='$addr',cont1='$cont1',cont2='$cont2',email='$email',district='$district',thaluk='$thaluk',panchayath='$panchayath',ward='$ward' where mdcpatid='$mdcpatid'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	}
	else
	{
		$sql = "update patient set age='$age',qul='$qul',addr='$addr',cont1='$cont1',cont2='$cont2',email='$email',district='$district',thaluk='$thaluk',panchayath='$panchayath',ward='$ward',photo='$photo1' where mdcpatid='$mdcpatid'";
		$q1 = $db->prepare($sql);
		$q1->execute();			
	}

header("location:../index.php");

?>			

		
