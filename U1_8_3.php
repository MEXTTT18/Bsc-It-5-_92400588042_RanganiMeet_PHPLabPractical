<!DOCTYPE html>
<html>
<body>

<form method="GET">
    <input type="text" name="uname">
    <input type="submit" value="Submit">
</form>

<?php
$arr = array();

for($i = 0; $i < 1; $i++) {
    $arr[$i] = $_GET["uname"];
}

foreach($arr as $value) {
    echo $value . "<br>";
}
?>

</body>
</html>