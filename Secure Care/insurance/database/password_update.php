<?php
require("../auth.php");
include('../../db_connect/db.php');

	$pass2=$_POST["pass2"];
	$mdcinsid=$_SESSION['SESS_INSCMP_ID'];
		
$sql = "update insurance set password='$pass2' where mdcinsid='$mdcinsid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

