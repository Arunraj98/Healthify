<?php
session_start();
if(!isset($_SESSION['SESS_PATIENT_ID']) || (trim($_SESSION['SESS_PATIENT_ID']) == '')) {
	header("location:../");
	exit();
}

?>

