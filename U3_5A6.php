<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        if (isset($_POST['create']))
        {
            $_SESSION['username'] = $_POST['username'];
            echo"<h1>Session Created!! <br> Username: " . $_SESSION['username'] . "</h1>";
        }

        if(isset($_POST['destroy']))
        {
            session_unset();
            session_destroy();

            echo"<h1>Session Destroyed!!</h1>";
        }

        echo"<br> <a href = 'U3_5A6.html'> Go To Back </a>";
    ?>
</body>
</html>