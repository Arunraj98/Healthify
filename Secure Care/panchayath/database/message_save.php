<?php
include('../../db_connect/db.php');


	$hostid=$_POST["hostid"];
	$hname=$_POST["hname"]; 
	$cntn1=$_POST["cntn1"]; 
	$email=$_POST["email"]; 
	$subj=$_POST["subj"]; 
	$dat=$_POST["dat"];
	$reply="pending"; 

$sql = "insert into message(mhostid,hname,cntn1,email,subj,dat,reply) VALUES ('$hostid','$hname','$cntn1','$email','$subj','$dat','$reply')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../message_send.php");

?>			
		
        
