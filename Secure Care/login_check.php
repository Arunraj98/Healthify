<?php
	//Start session
	session_start();
	
	include('db_connect/db.php');
		
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];
	//Create query
	$qry = $db->prepare("SELECT * FROM admin WHERE username='$username' AND password='$password' AND typ='admin'");
	$qry->execute();
	$count = $qry->rowcount();
	
	$qryhsp = $db->prepare("SELECT * FROM hospital WHERE username='$username' AND password='$password' AND utyp='hospital' AND stat='active'");
	$qryhsp->execute();
	$counthsp = $qryhsp->rowcount();
	
	$qrydoc = $db->prepare("SELECT * FROM doctor WHERE username='$username' AND password='$password' AND utyp='doctor' AND stat='active'");
	$qrydoc->execute();
	$countdoc = $qrydoc->rowcount();
	
	$qrylab = $db->prepare("SELECT * FROM laboratory WHERE username='$username' AND password='$password' AND utyp='laboratory' AND stat='active'");
	$qrylab->execute();
	$countlab = $qrylab->rowcount();
	
	$qryphar = $db->prepare("SELECT * FROM pharmacy WHERE username='$username' AND password='$password' AND utyp='pharmacy' AND stat='active'");
	$qryphar->execute();
	$countphar = $qryphar->rowcount();
	
	$qrydistr = $db->prepare("SELECT * FROM district WHERE username='$username' AND password='$password' AND utyp='district' AND stat='active'");
	$qrydistr->execute();
	$countdistr = $qrydistr->rowcount();
	
	$qrypanch = $db->prepare("SELECT * FROM panchayath WHERE username='$username' AND password='$password' AND utyp='panchayath' AND stat='active'");
	$qrypanch->execute();
	$countpanch = $qrypanch->rowcount();
	
	$qryinsc = $db->prepare("SELECT * FROM insurance WHERE username='$username' AND password='$password' AND utyp='insurance' AND stat='active'");
	$qryinsc->execute();
	$countinsc= $qryinsc->rowcount();
	
	
	$qrycensus = $db->prepare("SELECT * FROM census WHERE username='$username' AND password='$password' AND utyp='census' AND stat='active'");
	$qrycensus->execute();
	$countcensus= $qrycensus->rowcount();
			
	//Check whether the query was successful or not
	if($count > 0) {
		//Login Successful
		session_regenerate_id();
		$rows = $qry->fetch();
		$_SESSION['SESS_ADMIN_ID'] = $rows['admin_id'];
		session_write_close();
		header("location: admin/index.php");
		exit();
	}
	else if($counthsp > 0) {
		//Login Successful
		session_regenerate_id();
		$rowhsp = $qryhsp->fetch();
		$_SESSION['SESS_HSP_ID'] = $rowhsp['hostid'];
		session_write_close();
		header("location: hospital/index.php");
		exit();
	}
	else if($countdoc > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsdoc = $qrydoc->fetch();
		$_SESSION['SESS_DOC_ID'] = $rowsdoc['mdcdocid'];
		session_write_close();
		header("location: doctor/index.php");
		exit();
	}
	else if($countlab > 0) {
		//Login Successful
		session_regenerate_id();
		$rowslab = $qrylab->fetch();
		$_SESSION['SESS_LAB_ID'] = $rowslab['mdclbid'];
		session_write_close();
		header("location: laboratory/index.php");
		exit();
	}
	else if($countphar > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsphar = $qryphar->fetch();
		$_SESSION['SESS_PHAR_ID'] = $rowsphar['mdcphid'];
		session_write_close();
		header("location: pharmacy/index.php");
		exit();
	}
	else if($countdistr > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsdistr = $qrydistr->fetch();
		$_SESSION['SESS_DISTR_ID'] = $rowsdistr['mdcdcid'];
		session_write_close();
		header("location: district/index.php");
		exit();
	}
	else if($countpanch > 0) {
		//Login Successful
		session_regenerate_id();
		$rowspanch = $qrypanch->fetch();
		$_SESSION['SESS_PANCHTH_ID'] = $rowspanch['mdcpanid'];
		session_write_close();
		header("location: panchayath/index.php");
		exit();
	}
	else if($countinsc > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsinsc = $qryinsc->fetch();
		$_SESSION['SESS_INSCMP_ID'] = $rowsinsc['mdcinsid'];
		session_write_close();
		header("location: insurance/index.php");
		exit();
	}
	else if($countcensus > 0) {
		//Login Successful
		session_regenerate_id();
		$rowscensus = $qrycensus->fetch();
		$_SESSION['SESS_CENSUS_ID'] = $rowscensus['censuspid'];
		session_write_close();
		header("location: census/index.php");
		exit();
	}
	else 
	{
		//Login failed
		echo "<script>alert('Check your username and password and try again Or contact hospital'); window.location='login.php'</script>";
		exit();
	}
?>
