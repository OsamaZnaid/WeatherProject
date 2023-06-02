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
 $conn= mysqli_connect($SERVER_Name ,$User_Name ,$Password);
if(!$conn){
    die('there is problem conncetion..'.mysqli_connect_error());

  }
  


 // create sql query 
  // انشاء  قاعدة بيانات
  $sql = 'CREATE DATABASE IF NOT Exists   USERSYSTEM';
  $result=  mysqli_query($conn ,$sql);
  // هذه الدالة اذا حدث الاتصال ترجع ترو واذا لم يحدث ترجع فولس
if($result){
  echo"creating Database is done probably!!!";
}else{

  echo "thay are problem with creating database".mysqli_error($conn);
  exit();
  // عشان ما يكمل ويخرج
}
  

  ?>  
</body>
</html>