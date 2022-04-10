<?php
include('../../db_connect/db.php');

	$mdclbid=$_POST["mdclbid"];
	
	$cntn2=$_POST["cntn2"];
	$locatn=$_POST["locatn"];
	$addr=$_POST["addr"];
	$email=$_POST["email"];
	
	$typ=$_POST["typ"];
	$splty=$_POST["splty"];
	$expr=$_POST["expr"];
	

$sql = "update laboratory set cntn2='$cntn2',locatn='$locatn',addr='$addr',email='$email',expr='$expr',typ='$typ',splty='$splty where mdclbid='$mdclbid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>				
		
