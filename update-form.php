<?php
    include 'conn.php';
    $stuid=$_POST['id'];
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $sql="UPDATE data set Name='$fname', LastName='$lname' where id='$stuid'";
    $result=mysqli_query($conn,$sql);
