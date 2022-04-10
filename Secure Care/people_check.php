<?php
	//Start session
	session_start();
	
	include('db_connect/db.php');
		
	//Sanitize the POST values
	$mdcpatid = $_POST['mdcpatid'];
	//Create query
	$qry = $db->prepare("SELECT * FROM patient WHERE mdcpatid='$mdcpatid'");
	$qry->execute();
	$count = $qry->rowcount();
		
	
	//Check whether the query was successful or not
	if($count > 0) {
		//Login Successful
		session_regenerate_id();
		$rows = $qry->fetch();
		$_SESSION['SESS_PATIENT_ID'] = $rows['mdcpatid'];
		session_write_close();
		header("location: patient/index.php");
		exit();
	}
	
	else 
	{
		//Login failed
		echo "<script>alert('Check your Uniq Id and password and try again'); window.location='index.php'</script>";
		exit();
	}
?>
