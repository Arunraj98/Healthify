<?php
require("../auth.php");
include('../../db_connect/db.php');

	$pass2=$_POST["pass2"];
	$mdclbid=$_SESSION["SESS_LAB_ID"];
		
$sql = "update laboratory set password='$pass2' where mdclbid='$mdclbid' ";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

