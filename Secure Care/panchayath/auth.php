<?php
session_start();
if(!isset($_SESSION['SESS_PANCHTH_ID']) || (trim($_SESSION['SESS_PANCHTH_ID']) == '')) {
	header("location:../");
	exit();
}

?>

