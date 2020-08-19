<?php
include('connection.php');
    $id = $_POST['Id'];
    $name = $_POST['Name'];
    $password = $_POST['Email'];
$query="INSERT INTO `info1`(`id`, `stdid`, `name`, `email`) VALUES (NULL,'$id','$name','$password')";
if (mysqli_query($conn,$query)){
    echo "insert successfully";
}
else{
    echo "error finding";
}
mysqli_close($conn);
?>