<?php
	$conmysqli_connect("localhost","my_password","my_db");
	
	$username = $_POST["username"];
	$password = $_POST["password"];	
	
	$statement = mysqli_prepare($con, "SELETCT * FROM User WHERE username = ? AND password = ?");
	mysqli_start_bind_param($statement, "ss", $username, $password);
	mysqli_stat_execute($statement);
	
	mysqli_stat_store_result($statement);
	mysqli_stat_result($statement, $username, $password);
	
	$user = array();
	
	while(mysqli_stmt_fetch($statement)){
		$user[username] = $username;
		$user[password] = $password;
	}
	
	echo json_encode($user);
	
	mysqli_stmt_close(£statement);
	
	mysqli_close($con);
?>