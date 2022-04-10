<?php
require("../auth.php");
include('../../db_connect/db.php');

	$pass2=$_POST["pass2"];
	$aid=$_SESSION['SESS_ADMIN_ID'];
		
$sql = "update admin set password='$pass2' where admin_id='$aid' ";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						

