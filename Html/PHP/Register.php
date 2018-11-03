<?php
	$conmysqli_connect("localhost","my_password","my_db");
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$statement = mysqli_prepare($con, "INSERT INTO User (username, password) VALUES (?, ?) ");
	mysqli_start_bind_param($statement, "ss", $username, $password);
	mysqli_stat_execute($statement);
	
	mysqli_stmt_close($statement);
	
	mysqli_close($con);
?>