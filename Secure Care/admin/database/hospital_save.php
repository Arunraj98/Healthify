<?php
include('../../db_connect/db.php');


	$hostid=$_POST["hostid"]; 
	$hname=$_POST["hname"];
	$cntn1=$_POST["cntn1"]; 
	$cntn2=$_POST["cntn2"]; 
	$location=$_POST["location"]; 
	$addr=$_POST["addr"]; 
	$waddr=$_POST["waddr"]; 
	$email=$_POST["email"]; 
	$special=$_POST["special"]; 
	$licen=$_POST["licen"]; 
	$seplty=$_POST["seplty"]; 
	$typ=$_POST["typ"]; 
	$jdate=$_POST["jdate"]; 
	$photo1=$_POST["photo1"]; 
	$photo2=$_POST["photo2"]; 
	$photo3=$_POST["photo3"]; 
	$exp=$_POST["exp"]; 
	$username=$_POST["username"]; 
	$password=$_POST["password"]; 
	$stat="active"; 
	$utyp="hospital";
	
	$image = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
	$image_name = addslashes($_FILES['photo1']['name']);
	$image_size = getimagesize($_FILES['photo1']['tmp_name']);
	move_uploaded_file($_FILES["photo1"]["tmp_name"], "../hospital_photo/" . $_FILES["photo1"]["name"]);
	$photo1 = $_FILES["photo1"]["name"];
	
	$image = addslashes(file_get_contents($_FILES['photo2']['tmp_name']));
	$image_name = addslashes($_FILES['photo2']['name']);
	$image_size = getimagesize($_FILES['photo2']['tmp_name']);
	move_uploaded_file($_FILES["photo2"]["tmp_name"], "../hospital_photo/" . $_FILES["photo2"]["name"]);
	$photo2 = $_FILES["photo2"]["name"];
	
	$image = addslashes(file_get_contents($_FILES['photo3']['tmp_name']));
	$image_name = addslashes($_FILES['photo3']['name']);
	$image_size = getimagesize($_FILES['photo3']['tmp_name']);
	move_uploaded_file($_FILES["photo3"]["tmp_name"], "../hospital_photo/" . $_FILES["photo3"]["name"]);
	$photo3 =$_FILES["photo3"]["name"];
	
$sql = "insert into hospital(hostid,hname,cntn1,cntn2,location,addr,waddr,email,special,licen,seplty,typ,jdate,photo1,photo2,photo3,exp,username,password,stat,utyp) VALUES ('$hostid','$hname','$cntn1','$cntn2','$location','$addr','$waddr','$email','$special','$licen','$seplty','$typ','$jdate','$photo1','$photo2','$photo3','$exp','$username','$password','$stat','$utyp')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../hospital_register.php");

?>						

