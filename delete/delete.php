<?php
include 'conn.php';
$id=$_POST['id'];
$sql="Delete from data where id='$id'";
$result=mysqli_query($conn,$sql);





?>
