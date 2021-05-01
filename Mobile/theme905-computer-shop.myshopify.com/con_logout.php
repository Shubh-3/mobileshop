<?php
	session_start();
	unset($_SESSION['vu']);
	unset($_SESSION['ui']);
	unset($_SESSION['displayname']);
	header("Location: index.php");
?>