<?php
session_start();
if(!isset($_SESSION['SESS_INSCMP_ID']) || (trim($_SESSION['SESS_INSCMP_ID']) == '')) {
	header("location:../");
	exit();
}

?>

