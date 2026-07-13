<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var = "12345";
        echo "<br>Original Value :</br>".$var . "<br>";
        echo "<br>Original Data Type :</br>".gettype($var) . "<br><br>";

        settype($var, "integer");
        echo"<br>Original Type Casting :</br>".$var . "<br>";
        echo "<br>New Data Type :</br>".gettype($var) . "<br><br>";

        settype($var, "double");
        echo"<br>After Converting To Double :</br>".$var . "<br>";
        echo "<br>Data Type :</br>".gettype($var) . "<br><br>";

        settype($var, "boolean");
        echo"<br>After Converting To Boolean :</br>";

        var_dump($var);
        echo "<br><b>Data Type :</b>" . gettype($var);
    ?>
</body>
</html>