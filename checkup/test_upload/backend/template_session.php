<?php
	session_start();
	if(!isset($_SESSION['username'])){				
		session_destroy();
		header("Cache-Control: no-cache");
		header("Pragma: no-cache");
		header('location: login.php');
	}
	else{ 
		$username = $_SESSION['username'];
		$fname = $_SESSION['fname'];
		$lname = $_SESSION['lname'];
		$position = $_SESSION['position'];

		if(($username!="61018") && ($username!="56003")){
			session_destroy();
			header("Cache-Control: no-cache");
			header("Pragma: no-cache");
			header('location: login.php');
		}
	}
?>