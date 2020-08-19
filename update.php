<?php
	include('connection.php');
	
	$id = $_GET['id'];
	
	$stdid = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	
	
	$query = "update info1 set stdid = '$stdid', Name = '$name', email = '$email' where id = $id";
	
	if(mysqli_query($conn, $query)) {
		header("Location: showInformation.php");
	}
	else {
		echo "Not updated";
	}
?>