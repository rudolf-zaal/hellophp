<?php
	session_start();
	unset($_SESSION['logged_user']);
	header("Location: mycms.php");
	exit;
?>