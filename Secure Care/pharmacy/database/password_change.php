<?php
require("../auth.php");
include('../../db_connect/db.php');

	$pass2=$_POST["pass2"];
	$mdcphid=$_SESSION["SESS_PHAR_ID"];
		
$sql = "update pharmacy set password='$pass2' where mdcphid='$mdcphid' ";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>				
		
