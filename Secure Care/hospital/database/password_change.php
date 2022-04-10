<?php
require("../auth.php");
include('../../db_connect/db.php');

	$pass2=$_POST["pass2"];
	$hostid=$_SESSION['SESS_HSP_ID'];
		
$sql = "update hospital set password='$pass2' where hostid='$hostid' ";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

