<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
            body {
            font-family: Arial, sans-serif;
           

        }
        .login-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: pink;
        }
        .login-container label,
        .login-container input[type="text"],
        .login-container input[type="password"],
        .login-container input[type="submit"] {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }.custom-input {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        width: 400px;
    }
    .login-container input[type="submit"] {
    padding: 8px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    cursor: pointer;
    width: 50%;
    align-item: center;
}

    </style>
</head>
<body>
    <!-- <form action="retrive.php" method="POST" style="justify-content: center; height: 100vh;">
        <input type="text" name="USERNAME" placeholder="Username" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; width: 400px;"><br/>
        <input type="text" name="EMAIL" placeholder="Email" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; width: 400px;"><br/>
        <input type="text" name="TEL_NR" placeholder="Telephone number" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; width: 400px;"><br/>
        <input type="password" name="PASSWORD" placeholder="Password" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; width: 400px;"><br/> 
        <input type="submit" name="submit" value="Submit"    > <br/>
        <a href="retrive.php"><svg  style='width: 20px;height: 20px;' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg></a>
        <!-- <nav>
        <ul>
            
            <li></li>
            <li><a href="delete.php"><svg  style='width: 20px;height: 20px;'  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M576 128c0-35.3-28.7-64-64-64H205.3c-17 0-33.3 6.7-45.3 18.7L9.4 233.4c-6 6-9.4 14.1-9.4 22.6s3.4 16.6 9.4 22.6L160 429.3c12 12 28.3 18.7 45.3 18.7H512c35.3 0 64-28.7 64-64V128zM271 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg></a></li>
            <!-- <li><a href="update.php"><svg  style='width: 20px;height: 20px;' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.<path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></a></li> -->
        <!-- </ul> -->
    <!-- </nav>  
    </form> -->
    <div  class="login-container" >
    <form action="insert.php" method="POST" style="justify-content: center; height: 100vh;">
<LABEL>NAME</LABEL></br>
        <input class="custom-input" type="text" name="USERNAME" placeholder="Username" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; width: 400px;"><br/>
        <LABEL>EMAIL</LABEL></br>
 <input class="custom-input" type="text" name="EMAIL" placeholder="Email" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; width: 400px;"><br/>
 <LABEL>Telephone</LABEL></br>
  <input class="custom-input" type="text" name="TEL_NR" placeholder="Telephone number" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; width: 400px;"><br/>
  <LABEL>password</LABEL></br>  <input type="password" name="PASSWORD" placeholder="Password" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; width: 400px;"><br/> 
        <input type="submit" name="submit" value="Submit" >

        <a href="retrive.php">Go to Retrieve User Page</a>
    </form>
    </div>
    <?php
   
    $SERVER_Name = 'localhost';
        $User_Name = 'root';
        $Password = '';
        $Database_Name = 'USERSYSTEM';
        $conn = mysqli_connect($SERVER_Name, $User_Name, $Password, $Database_Name);
        if(!$conn) {
            die('There was a problem with the connection: ' . mysqli_connect_error());
        }
        
    if(isset($_POST['submit'])) {
        $USERNAME = $_POST['USERNAME'];
        $EMAIL = $_POST['EMAIL'];
        $TEL_NR = $_POST['TEL_NR'];
        $PASSWORD = $_POST['PASSWORD'];

        $sql = "INSERT INTO USERS (USERNAME, EMAIL, TEL_NR, PASSWORD) VALUES ('$USERNAME', '$EMAIL', '$TEL_NR', '$PASSWORD')";
        $result =mysqli_query($conn, $sql);
        if(!$result) {
           echo "There was a problem inserting the record: " . mysqli_error($conn);
           exit();
        } else {
            echo "New record inserted successfully";
        }

        mysqli_close($conn);
    }
    ?>
</body>
</html>
