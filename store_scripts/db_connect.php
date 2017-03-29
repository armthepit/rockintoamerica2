<?php 
	require("../config/db_config.php");

	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

	if(!$connection){
		echo "Failed to connect database" . die(mysqli_error($connection));
	}

	$dbselect = mysqli_select_db($connection, DB_DATABASE);

	if(!$dbselect){
		echo "Failed to Select database" . die(mysqli_error($connection));
	}
?>