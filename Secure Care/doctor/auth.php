<?php
session_start();
if(!isset($_SESSION['SESS_DOC_ID']) || (trim($_SESSION['SESS_DOC_ID']) == '')) {
	header("location:../");
	exit();
}

?>

