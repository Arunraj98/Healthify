<?php
include('../../db_connect/db.php');

	$msgid=$_POST["msgid"];
	$subj=$_POST["subj"];
	$dat=$_POST["dat"];
	
	
$sql = "update message set reply='$subj',rdate='$dat' where msgid='$msgid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../message_reply.php");

?>						

