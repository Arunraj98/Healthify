<?php
include('../../db_connect/db.php');

	$mdclbid=$_POST["mdclbid"];
	$name=$_POST["name"];
	$cntn1=$_POST["cntn1"];
	$cntn2=$_POST["cntn2"];
	$locatn=$_POST["locatn"];
	$addr=$_POST["addr"];
	$email=$_POST["email"];
	$typ=$_POST["typ"];
	$splty=$_POST["splty"];
	$jdate=$_POST["jdate"];
	$licen=$_POST["licen"];
	$expr=$_POST["expr"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	$stat="active"; 
	$utyp="laboratory";
	
	$image = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
	$image_name = addslashes($_FILES['photo1']['name']);
	$image_size = getimagesize($_FILES['photo1']['tmp_name']);
	move_uploaded_file($_FILES["photo1"]["tmp_name"], "../laboratory_photo/" . $_FILES["photo1"]["name"]);
	$photo1 = $_FILES["photo1"]["name"];
	
	$image = addslashes(file_get_contents($_FILES['photo2']['tmp_name']));
	$image_name = addslashes($_FILES['photo2']['name']);
	$image_size = getimagesize($_FILES['photo2']['tmp_name']);
	move_uploaded_file($_FILES["photo2"]["tmp_name"], "../laboratory_photo/" . $_FILES["photo2"]["name"]);
	$photo2 = $_FILES["photo2"]["name"];
	

$sql = "insert into laboratory(mdclbid,name,cntn1,cntn2,locatn,addr,email,typ,splty,jdate,photo1,licen,photo2,expr,username,password,stat,utyp) VALUES ('$mdclbid','$name','$cntn1','$cntn2','$locatn','$addr','$email','$typ','$splty','$jdate','$photo1','$licen','$photo2','$expr','$username','$password','$stat','$utyp')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../laboratory_register.php");

?>				
		
