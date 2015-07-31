<?php
	session_start();
	if($_POST['login'] == "user" && $_POST['password'] == "password"){
		$_SESSION['logged_user'] = 1;
	}	
	header("Location: mycms.html");
	exit;
?>
