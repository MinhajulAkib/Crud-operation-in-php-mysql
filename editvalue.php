<?php
	include('connection.php');
	$id = $_GET['id'];
	 $query = "select * from info1 where id = $id";
	 
	 $result = mysqli_query($conn, $query);
	 $std = mysqli_fetch_array($result);
	 


?>


<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css" media="all" />
		
		<style>
			
		</style>
	</head>
		<body>
			<div class="form1">
				<form action="update.php? id=<?php echo  $id ?>" method="post">
					<span>ID:</span>
					<input type="text" name="id" value="<?php echo $std['stdid']; ?>"/> <br/>
					<span>Name:</span>
					<input type="text" name="name" value="<?php echo $std['name']; ?>"/> <br/>
					<span>Email:</span>
					<input type="text" name="email" value="<?php echo $std['email']; ?>"/> <br/>
					<input type="submit" value="Update"/> <br/>
				</form>
			</div>	
			
					
		</body>
	
</html>	