<?php
session_start();
if(!isset($_SESSION['SESS_HSP_ID']) || (trim($_SESSION['SESS_HSP_ID']) == '')) {
	header("location:../");
	exit();
}

?>

