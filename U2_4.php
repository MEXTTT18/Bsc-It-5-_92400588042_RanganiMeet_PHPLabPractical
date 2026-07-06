<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h2>PHP String Functions Demonstration</h2>";

$text = "Hello Rajkot, welcome to PHP programming!";

echo "<b>Original String:</b> $text <br><br>";

//1. strlen()
echo "<b>1. strlen():</b> " . strlen($text) . "<br>";

//2. strpos()
echo "<b>2. strpos() (position of 'PHP'):</b> " . strpos($text, "PHP") . "<br>";

//3. str_word_count()
echo "<b>3. str_word_count():</b> " . str_word_count($text) . "<br>";

//4. strrev()
echo "<b>4. strrev():</b> " . strrev($text) . "<br>";

//5. str_replace()
echo "<b>5. str_replace():</b> " . str_replace("PHP", "Java", $text) . "<br>";

//6. strtoupper() And strtolower()
echo "<b>6. strtoupper():</b> " . strtoupper($text) . "<br>"; 
echo "<b>7. strtolower():</b> " . strtolower($text) . "<br>";

?>
</body>
</html>