<?php
session_start();
if(!isset($_SESSION['SESS_LAB_ID']) || (trim($_SESSION['SESS_LAB_ID']) == '')) {
	header("location:../");
	exit();
}

?>

