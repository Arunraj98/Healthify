<?php
session_start();
if(!isset($_SESSION['SESS_CENSUS_ID']) || (trim($_SESSION['SESS_CENSUS_ID']) == '')) {
	header("location:../");
	exit();
}

?>

