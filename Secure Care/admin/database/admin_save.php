<?php
include('../../db_connect/db.php');


	$username=$_POST["username"];
	$password=$_POST["password"];
	$date=$_POST["date"];
	
$sql = "insert into admin(username,password,typ) VALUES ('$username','$password','admin')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

