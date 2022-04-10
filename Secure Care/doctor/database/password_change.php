<?php
require("../auth.php");
include('../../db_connect/db.php');

	$pass2=$_POST["pass2"];
	$mdcdocid=$_SESSION['SESS_DOC_ID'];
		
$sql = "update doctor set password='$pass2' where mdcdocid='$mdcdocid' ";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

