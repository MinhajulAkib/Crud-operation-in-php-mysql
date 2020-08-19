<?php
	include('connection.php');
	$id = $_GET['id'];
	 $query = "delete from info1 where id = $id";
	if(mysqli_query($conn, $query)){
		 header("Location: showInformation.php");
	 }
	 else{
		echo "Not deleted";
	 }
		

?>