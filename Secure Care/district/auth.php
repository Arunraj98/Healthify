<?php
session_start();
if(!isset($_SESSION['SESS_DISTR_ID']) || (trim($_SESSION['SESS_DISTR_ID']) == '')) {
	header("location:../");
	exit();
}

?>

