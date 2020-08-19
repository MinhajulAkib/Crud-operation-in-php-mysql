<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "infodb";
	
	$conn = mysqli_connect($server, $user, $password, $db);
	
	if(!$conn) {
			die("could not connect" . mysqli_connect_error());
	}
?>