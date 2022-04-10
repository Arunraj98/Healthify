<?php
session_start();
if(!isset($_SESSION['SESS_ADMIN_ID']) || (trim($_SESSION['SESS_ADMIN_ID']) == '')) {
	header("location:../");
	exit();
}

?>

