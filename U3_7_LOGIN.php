<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<?php
    session_start();

    $conn = new mysqli("localhost:81", "root", "", "logindb");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $_SESSION["username"] = $username;

        header("Location: U3_7_HOME.php");
        exit();

    } else {

        echo "Username Or Password Wrong!!<br><br>";
        echo "<a href='U3_7_LOGIN.html'>Go To Login</a>";
    }

    $conn->close();

?>
</body>
</html>