<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Date Functions</title>
</head>
<body>

<?php

$conn = new mysqli("localhost:3307", "root", "", "test");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$queries = [
    "SELECT HOUR(NOW()) AS Hour",
    "SELECT MINUTE(NOW()) AS Minute",
    "SELECT SECOND(NOW()) AS Second",
    "SELECT DATE_FORMAT(NOW(), '%d-%m-%Y %H:%i:%s') AS Formatted_Date",
    "SELECT DATE_SUB(CURDATE(), INTERVAL 10 DAY) AS Date_Subtract",
    "SELECT DATE_ADD(CURDATE(), INTERVAL 10 DAY) AS Date_Add"
];

foreach ($queries as $sql) {

    echo "<hr>";

    $result = $conn->query($sql);

    if ($result) {

        while ($row = $result->fetch_assoc()) {

            foreach ($row as $key => $value) {
                echo "<b>$key:</b> $value<br>";
            }

        }

        $result->free();

    } else {

        echo "Query Error: " . $conn->error . "<br>";

    }
}

$conn->close();

?>

</body>
</html>