<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $arr = array('Ashit','rajubhai','cahman','jetho');

    $reverse = array_reverse($arr);

    foreach($reverse as $p){
    echo $p."<br>";
    }

    $arr = array(
        "name" => "Ashit",
        "city" => "Rajkot",
        "age" => 20
    );

    $reverse = array_reverse($arr);

    foreach($reverse as $key => $value){
        echo $key . " : " . $value . "<br>";
    }

    $arr = array(
        array("Ashit", 20, "Rajkot"),
        array("Rahul", 22, "Ahmedabad"),
        array("Amit", 21, "Surat")
    );

    $reverse = array_reverse($arr);

    foreach($reverse as $row){
        foreach($row as $value){
            echo $value . " ";
        }
        echo "<br>";
    }


    ?>
</body>
</html>