<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = mysqli_connect('localhost', 'root', '', 'USERSYSTEM');
    $USERID = $_POST['USERID'];
    $USERNAME = $_POST['USERNAME'];
    $EMAIL = $_POST['EMAIL'];
    $TEL_NR = $_POST['TEL_NR'];
    $PASSWORD = $_POST['PASSWORD'];

    $sql = "UPDATE USERS SET USERNAME='$USERNAME', EMAIL='$EMAIL', TEL_NR='$TEL_NR', PASSWORD='$PASSWORD' WHERE USERID='$USERID'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "There was a problem when updating the user in the USERS table: " . mysqli_error($conn);
    } else {
        echo "Update successful";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <h1>Update User</h1>
    <form method="POST" action="">
        <label for="USERID">User ID:</label><br>
        <input type="text" name="USERID" id="USERID">
        <br>
        <label for="USERNAME">Username:</label><br>
        <input type="text" name="USERNAME" id="USERNAME">
        <br>
        <label for="EMAIL">Email:</label><br>
        <input type="text" name="EMAIL" id="EMAIL">
        <br>
        <label for="TEL_NR">Telephone Number:</label><br>
        <input type="text" name="TEL_NR" id="TEL_NR">
        <br>
        <label for="PASSWORD">Password:</label><br>
        <input type="password" name="PASSWORD" id="PASSWORD"><br>
        <br>
        <button type="submit">Update</button>
        <a href="retrive.php">Go to Retrieve User Page</a>
    </form>
</body>
</html>
