<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0);
    ?>
        <form method="Get">
            <input type="text" name="uname[0]"><br><br>
            <input type="text" name="uname[1]"><br><br>
            <input type="text" name="uname[2]"><br><br>

            <input type="submit" value="Submit">
        </form>

        <?php
            $nm = $_GET['uname'];
            echo"<h3>Original Array :</h3>";
            foreach($nm as $val){
                echo $val. "<br>";
            }
            echo"<h3>Reversed Array :</h3>";
            $rev = array_reverse($nm);
            foreach($rev as $val){
                echo $val. "<br>";
            }
        ?>
</body>
</html>