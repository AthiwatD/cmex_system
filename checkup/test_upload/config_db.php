<?php
	
	$servername = "localhost";
	$database_name = "checkup";
	$database_user = "root";
	$database_password = "";
	
	// Create connection
	$db_connect = mysqli_connect($servername, $database_user, $database_password, $database_name);
	if (!$db_connect) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
	mysqli_set_charset($db_connect, "utf8");
?>
