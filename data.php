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
    $sql="select * from data";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $output="<table class='table'>
        <thead>
          <tr>
         
            <th scope='col'>FirstName</th>
            <th scope='col'>LastName</th>
            <th scope='col'>Delete</th>
            <th scope='col'>Update</th>
          </tr>
        </thead>
        <tbody>";
    while($rows=mysqli_fetch_array($result)){
        $id=$rows['id'];
        $r=$rows['Name'];
        $r1=$rows['LastName'];
        $output.="<tr>
       
        <td>$r</td>
        <td>$r1</td>
        <td><button class='delete-btn' data-id='$id'>Delete</button></td>
        <td><button class='edit-btn' data-eid='$id'>Update</button></td>
      </tr>";
    
    


    }
    $output.="</tbody></table>";
    echo $output;
    }else{

        $output="No record Found";
        echo $output;
    }






?>
</body>
</html>
