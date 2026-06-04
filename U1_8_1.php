<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $i =array('cold','hot','rain');
    foreach($i as $d){
        echo $d."<br>";
    }
$person = [
    "name" => "John",
    "age" => 25
];

echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"];


$students = [
    ["John", 85, "A"],
    ["Alice", 90, "A+"],
    ["Bob", 78, "B"]
];


echo $students[0][0]; // John
echo "<br>";
echo $students[1][1]; // 90
echo "<br>";
echo $students[2][2]; // B

    
    ?>
</body>
</html>