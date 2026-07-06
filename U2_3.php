<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h2>PHP Array Functions Demonstration</h2>";

//1. array_change_key_case
$student = array("Name" => "Chhagun","Age" => 22,"City" => "Chhagunpur");

echo "<h3>array_change_key_case()</h3>";
print_r($student);

echo "<br><b>Lowercase keys:</b><br>";
print_r(array_change_key_case($student, CASE_LOWER));

echo "<br><b>Uppercase keys:</b><br>";
print_r(array_change_key_case($student, CASE_UPPER));


//2. array_chunk
echo "<h3>array_chunk()</h3>";

$months = array( "Jan", "Feb", "Mar", "Apr","May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

print_r(array_chunk($months, 3,"<br>"));


// 3. array_count_values
echo "<h3>array_count_values()</h3>";

$colors = array("red", "blue", "red", "green", "blue", "blue");

print_r(array_count_values($colors));


//4. array_combine
echo "<h3>array_combine()</h3>";

$keys = array("A", "B", "C");
$values = array("Apple", "Ball", "Cat");

$combined = array_combine($keys, $values);
print_r($combined);


//5. array_pop
echo "<h3>array_pop()</h3>";

$stack = array("Apple", "Banana", "Mango");
echo "Before pop:<br>";
print_r($stack);

array_pop($stack);

echo "<br>After pop:<br>";
print_r($stack);


//6. array_push
echo "<h3>array_push()</h3>";

array_push($stack, "Orange", "Grapes");

echo "After push:<br>";
print_r($stack);


//7. array_unshift
echo "<h3>array_unshift()</h3>";

array_unshift($stack, "Pineapple");

echo "After unshift (add at beginning):<br>";
print_r($stack);


//8. array_shift
echo "<h3>array_shift()</h3>";

$removed = array_shift($stack);

echo "Removed element: $removed<br>";
echo "After shift:<br>";
print_r($stack);

?>
</body>
</html>