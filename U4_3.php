<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>

<?php
$conn = new mysqli("localhost:3307", "root", "", "studentdb");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS students3 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(30),
    EMAIL VARCHAR(40),
    CONTACT VARCHAR(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Created Successfully!!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

</body>
</html>