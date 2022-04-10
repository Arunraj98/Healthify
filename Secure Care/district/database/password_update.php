<?php
require("../auth.php");
include('../../db_connect/db.php');

	$pass2=$_POST["pass2"];
 	$mdcdcid=$_SESSION['SESS_DISTR_ID'];
		
$sql = "update district set password='$pass2' where mdcdcid='$mdcdcid' ";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

