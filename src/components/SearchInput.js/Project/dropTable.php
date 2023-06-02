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
 mysqli_select_db($conn ,'USERSYSTEM');
 $sql ='DROP TABLE USERS';
 $result =  mysqli_query($conn ,$sql);
 if(!$result){
    echo "there are A problem  in DRODING TABLE USERS".mysqli_error($conn);
    
    }else{
        echo " table  usars is DROD properly";
    }
  ?>  
</body>
</html>