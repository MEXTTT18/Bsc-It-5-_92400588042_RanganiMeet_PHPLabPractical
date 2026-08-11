<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0)
    ?>
    <form method="post">

        Enter Username:
        <input type="text" name="name" required>
        <input type="submit" name="submit" value="Submit">

    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            if($_COOKIE['username'] == $name)
            {
                echo"<h3>Welcome, " . $name . "!</h3>";
                echo"<h3>You Are A Repeated User!!</h3>";
            }
            else
            {
                setcookie("username",$name, time() + (30 * 24 * 60 * 60), "/");
                echo"<h3>Welcome, " . $name . "!</h3>";
                echo"<h3>You Are A New User!!</h3>";
            }
        }
        
    ?>
</body>
</html>