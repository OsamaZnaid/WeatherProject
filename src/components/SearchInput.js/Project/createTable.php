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
$sql = "CREATE TABLE IF NOT EXISTS USERS (
  USERID INT(4) AUTO_INCREMENT PRIMARY KEY,
  USERNAME VARCHAR(25) NOT NULL,
  PASSWORD VARCHAR(25) NOT NULL,
  EMAIL VARCHAR(40) NOT NULL,
  TEL_NR VARCHAR(16) NOT NULL,
  operations VARCHAR(25)
)";

$result =  mysqli_query($conn ,$sql);
if(!$result){
echo "There is a problem  in Biuilding a table".mysqli_error($conn);

}else{
    echo " Table usars is built properly";
}
  ?>  
</body>
</html>