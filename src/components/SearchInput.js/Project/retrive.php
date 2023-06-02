<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
        table {
            width: 70%;
            margin: auto;
        }

        tr {
            height: 50%;
        }

        tr:nth-child(odd) {
            background-color: pink;
        }

        tr:nth-child(even) {
            background-color: orange;
        }

        tr:hover {
            background-color: purple;
            color: white;
        }

        th, td {
            text-align: center;
        }

        h1 {
            background-color: purple;
            color: white;
            margin: auto;
            width: 70%;
            text-align: center;
            padding: 20px auto;
        }
    </style>
</head>
<body>

    <?php
    // Check if the form was submitted
    $SERVER_Name = 'localhost';
        $User_Name = 'root';
        $Password = '';
        $Database_Name = 'USERSYSTEM';

        // Create a connection to the MySQL database
        $conn = mysqli_connect($SERVER_Name, $User_Name, $Password, $Database_Name);
        if(!$conn) {
            die('There was a problem with the connection: ' . mysqli_connect_error());
        }
        
    if(isset($_POST['submit'])) {
        $USERNAME = $_POST['USERNAME'];
        $EMAIL = $_POST['EMAIL'];
        $TEL_NR = $_POST['TEL_NR'];
        $PASSWORD = $_POST['PASSWORD'];
        $operations = $_POST['operations'];

        

        // Prepare the SQL query
        $sql = "INSERT INTO USERS (USERNAME,  EMAIL,PASSWORD,  TEL_NR  ,operations) VALUES ('$USERNAME', '$EMAIL','$PASSWORD', '$TEL_NR','$operations' )";

        // Execute the query
        if(mysqli_query($conn, $sql)) {
            echo "New record inserted successfully";
        } else {
            echo "There was a problem inserting the record: " . mysqli_error($conn);
        }

        // Close the connection
        mysqli_close($conn);
    }
    ?>
    <h1>List of Registered Users</h1>
    <?php
    $SERVER_Name = 'localhost';
    $User_Name = 'root';
    $Password = '';
    $Database_Name = 'USERSYSTEM';
    $conn = mysqli_connect($SERVER_Name, $User_Name, $Password, $Database_Name);

    $sql = "SELECT * FROM USERS";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "There was a problem retrieving users data: " . mysqli_error($conn);
    }
    ?>
    <table>
        <tr>
            <th>USER ID</th>
            <th>USER NAME</th>
            <th>EMAIL</th>
            <th>USER PASSWORD</th>
            <th>Telephone Nr</th>
            <TH>operations</TH>
        </tr>
        <?php
        while ($user = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $user['USERID']; ?></td>
                <td><?php echo $user['USERNAME']; ?></td>
                <td><?php echo $user['EMAIL']; ?></td>
                <td><?php echo $user['TEL_NR']; ?></td>
                <td><?php echo $user['PASSWORD']; ?></td>
                <!-- <td><?php echo $user['operations']; ?></td> -->
                <td>
                    <a href="update.php?id=<?php echo $user['USERID']; ?>"><img src="update_icon.png" alt="Update"></a>
                    <a href="delete.php?id=<?php echo $user['USERID']; ?>"><img src="delete_icon.png" alt="Delete"></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
