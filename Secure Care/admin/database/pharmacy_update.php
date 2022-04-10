<?php
include('../../db_connect/db.php');

	$mdcphid=$_POST["mdcphid"];
	
	$cntn2=$_POST["cntn2"];
	$locatn=$_POST["locatn"];
	$addr=$_POST["addr"];
	$email=$_POST["email"];
	
	$typ=$_POST["typ"];
	$splty=$_POST["splty"];
	$expr=$_POST["expr"];
	

$sql = "update pharmacy set cntn2='$cntn2',locatn='$locatn',addr='$addr',email='$email',expr='$expr' where mdcphid='$mdcphid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../pharmacy_edit.php");

?>					
	
