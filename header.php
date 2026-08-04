<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo"<h2>Home Page</h2>";
        if(isset($_COOKIE['username']))
        {
            echo"Welcome : " .$_COOKIE['username'];
        }
        else
        {
            echo"Cookie Not Found!!";
        }

        echo"<br><br>";
        echo"<br> <a href = 'cookie.html'> Go To Back </a>";
    ?>
</body>
</html>