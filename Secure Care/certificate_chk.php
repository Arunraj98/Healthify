<?php
	//Start session
	session_start();
	
	include('db_connect/db.php');
		
	//Sanitize the POST values
	$mdcpatid = $_POST['mdcpatid'];
	//Create query
	$qry = $db->prepare("SELECT * FROM vaccine WHERE mdcpatid='$mdcpatid'");
	$qry->execute();
	$count = $qry->rowcount();	
			
	//Check whether the query was successful or not
	if($count > 0) {
		//Login Successful
		session_regenerate_id();
		$rows = $qry->fetch();
		$_SESSION['SESS_CERT_ID'] = $rows['mdcpatid'];
		session_write_close();
		header("location: certificate_down.php");
		exit();
	}
	else 
	{
		//Login failed
		echo "<script>alert('Check Secured Id'); window.location='certificate.php'</script>";
		exit();
	}
?>
