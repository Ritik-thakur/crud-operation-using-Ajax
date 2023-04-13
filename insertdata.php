<?php
include 'conn.php';
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$sql="Insert into data(Name,LastName) values('$fname','$lname')  ";
$result=mysqli_query($conn,$sql);


?>
