<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE["username"]))
        {
            echo"<h2>Welcome Back !</h2>";
            echo"You Are A Repeated User";
        }
        else
        {
            setcookie("username","Google",time() + (24 * 24 * 60 * 60),"/");
            echo"<h2>Welcome Back !</h2>";
            echo"You Are A New User";
        }
    ?>
</body>
</html>