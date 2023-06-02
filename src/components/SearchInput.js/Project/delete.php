<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = mysqli_connect('localhost', 'root', '', 'USERSYSTEM');
    $USERID = $_POST['USERID'];
    $sql = "DELETE FROM USERS WHERE USERID='$USERID'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "There was a problem when deleting from the USERS table: " . mysqli_error($conn);
    } else {
        echo "Delete successful";
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
    <title>Delete User</title>
</head>
<body>
    <h1>Delete User</h1>
    <form method="POST" action="">
        <label for="USERID">User ID:</label>
        <input type="text" name="USERID" id="USERID">
        <button type="submit">Delete</button>
        <a href="retrive.php">Go to Retrieve User Page</a>

      
    </form>
</body>
</html>