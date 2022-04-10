<?php
include('../../db_connect/db.php');


	$mdcdocid=$_POST["mdcdocid"];
	$mrs=$_POST["mrs"];
	$name=$_POST["name"];
	$sex=$_POST["sex"];
	$dob=$_POST["dob"];
	$age=$_POST["age"];
	$qul=$_POST["qul"];
	$addr=$_POST["addr"];
	$cont=$_POST["cont"];
	$email=$_POST["email"];
	$special=$_POST["special"];
	$licen=$_POST["licen"];
	$exp=$_POST["exp"];
	$jdate=$_POST["jdate"];
	$bsalary=$_POST["bsalary"];
	$aadharno=$_POST["aadharno"];
	$designa=$_POST["designa"];
	$des=$_POST["des"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$hname=$_POST["hname"];
	
	$stat="active"; 
	$utyp="doctor";
	
	$image = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
	$image_name = addslashes($_FILES['photo1']['name']);
	$image_size = getimagesize($_FILES['photo1']['tmp_name']);
	move_uploaded_file($_FILES["photo1"]["tmp_name"], "../../admin/doctor_photo/" . $_FILES["photo1"]["name"]);
	$photo1 = $_FILES["photo1"]["name"];
	
	$image = addslashes(file_get_contents($_FILES['photo2']['tmp_name']));
	$image_name = addslashes($_FILES['photo2']['name']);
	$image_size = getimagesize($_FILES['photo2']['tmp_name']);
	move_uploaded_file($_FILES["photo2"]["tmp_name"], "../../admin/doctor_photo/" . $_FILES["photo2"]["name"]);
	$photo2 = $_FILES["photo2"]["name"];
	
	$image = addslashes(file_get_contents($_FILES['photo3']['tmp_name']));
	$image_name = addslashes($_FILES['photo3']['name']);
	$image_size = getimagesize($_FILES['photo3']['tmp_name']);
	move_uploaded_file($_FILES["photo3"]["tmp_name"], "../../admin/doctor_photo/" . $_FILES["photo3"]["name"]);
	$photo3 =$_FILES["photo3"]["name"];
	
$sql = "insert into doctor(mdcdocid,mrs,name,sex,dob,age,qul,addr,cont,email,special,licen,exp,jdate,bsalary,aadharno,designa,photo1,photo2,photo3,des,username,password,hname,stat,utyp) VALUES ('$mdcdocid','$mrs','$name','$sex','$dob','$age','$qul','$addr','$cont','$email','$special','$licen','$exp','$jdate','$bsalary','$aadharno','$designa','$photo1','$photo2','$photo3','$des','$username','$password','$hname','$stat','$utyp')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../doctor_register.php");

?>			
		
        
