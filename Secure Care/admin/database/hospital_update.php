<?php
include('../../db_connect/db.php');


	$hostid=$_POST["hostid"]; 
	$cntn2=$_POST["cntn2"]; 
	$special=$_POST["special"]; 
	$seplty=$_POST["seplty"]; 
	$typ=$_POST["typ"]; 
	$exp=$_POST["exp"]; 
	
	
$sql = "update hospital set cntn2='$cntn2',special='$special',seplty='$seplty',typ='$typ',exp='$exp' where hostid='$hostid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../hospital_edit.php");

?>						

