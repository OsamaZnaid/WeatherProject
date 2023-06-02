<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CONNECTION</title>
</head>
<body>
  <?php
  $SERVER_Name='localhost';
  $User_Name='root';
  $Password='';
 $conn= mysqli_connect($SERVsER_Name ,$User_Name ,$Password);
if(!$conn){
    die('there is problem conncetion..'.mysqli_connect_error());

  }
 
  

  ?>  
</body>
</html>