<?php
	include('connection.php');
	
	$query = "select * from info1";
	$result = mysqli_query($conn, $query);
	
	
?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
<div class="table1">
				<table>
					<tr>
						<th> Id </th>
						<th> StdId </th>
						<th> Name </th>
						<th> Email </th>
						
					</tr>
					
					<?php while($row = mysqli_fetch_array($result)){ ?>
					<tr>
						<td> <?php echo $row['id']; ?>  </td>
						<td> <?php echo $row['stdid']; ?></td>
						<td> <?php echo $row['name']; ?></td>
						<td> <?php echo $row['email']; ?> </td>
						<td>
						
						<a href="editvalue.php?id=<?php echo $row['id'] ?>" style="margin-right:10px;"> Update </a>
						
						<a href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?');"> Delete </a>
						
						</td>
					</tr>
					<?php } ?>
					
					
					
				</table>
			</div>
</body>
</html>
