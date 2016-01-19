<?php

//connect to server
function server_connect(){
	//setting credentials
	$host = "localhost";
	$user = "c199grp00";
	$pass = "good_secure_password_199";
	$db = "c199grp00";

	//setting up connection
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	//checking connection
	if (!$conn){
		die ("FAILURE");
	}
	
	//return connection
	return $conn;
}

//close connection to server
function server_close($conn){
	mysqli_close($conn);
}

//return a temporary password
function temp_pass(){
	return 'password199';
}

?>