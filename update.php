<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'conn.php';
    $studentid=$_POST['id'];
    $sql="select * from data where id='$studentid'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $r3=$row['id'];
    $r1=$row['Name'];
    $r2=$row['LastName'];
    $output=" <div class='conatiner'>
    <div class='rows'>
        <div class='card'>
            <div class='card-header bg-light'>
                <h1 class='text-center text-dark'>Add Data </h1>
                <form id='AddData'>
                    <div class='form-group'>
                    <lable for='name'>Name</lable>
                    <input type='text' class='form-control' placeholder='Name' id='edit-fname' value=$r1> 
                    <input type='text' class='form-control' placeholder='Name' hidden id='edit-id' value=$r3> 
                </div>
                <div class='form-group'>
                    <lable for='lname'>LastName</lable>
                    <input type='text' class='form-control' placeholder='LastName' id='edit-lname' value=$r2>
                </div>
                <button type='button' class='btn btn-primary' id='edit-submit'  >Update Data</button>
                </form>";
   echo $output;

    ?>
    </body>
    </html>
