<?php
require("../auth.php");
include('../../db_connect/db.php');

	$pass2=$_POST["pass2"];
 	$mdcpanid=$_SESSION['SESS_PANCHTH_ID'];
		
$sql = "update panchayath set password='$pass2' where mdcpanid='$mdcpanid' ";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

