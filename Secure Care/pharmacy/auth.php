<?php
session_start();
if(!isset($_SESSION['SESS_PHAR_ID']) || (trim($_SESSION['SESS_PHAR_ID']) == '')) {
	header("location:../");
	exit();
}

?>

