<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    Enter array elements (comma separated):
    <input type="text" name="numbers" required>

    <input type="submit" value="Sort Array">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["numbers"];

    $array = explode(",", $input);

    $array = array_map('trim', $array);

    sort($array);

    echo "<h3>Sorted Array:</h3>";
    echo implode(", ", $array);
}
?>
</body>
</html>