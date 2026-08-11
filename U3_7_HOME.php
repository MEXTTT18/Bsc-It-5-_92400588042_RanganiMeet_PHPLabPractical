<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Welcome to Home Page</h2>

    <p>
        Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
    </p>

    <p>You are successfully logged in.</p>

    <a href="php U3_7_LOGOUT.php    ">Logout</a>   
   
    <?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: php unit3prog07 login.php");
        exit();
    }
    ?>

</body>
</html>