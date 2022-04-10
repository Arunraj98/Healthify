<?php
require("../auth.php");
include('../../db_connect/db.php');

	$pass2=$_POST["pass2"];
 	$censuspid=$_SESSION['SESS_CENSUS_ID'];
		
$sql = "update census set password='$pass2' where censuspid='$censuspid' ";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						
