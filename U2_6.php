<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculator</title>

<style>
    body{
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
        margin:0;
        font-family:Arial, sans-serif;
        background:#f2f2f2;
    }

    form{
        background:white;
        padding:20px;
        border-radius:10px;
        box-shadow:0 0 10px rgba(0,0,0,0.2);
    }

    input, select{
        width:250px;
        padding:8px;
        margin:8px 0;
    }

    input[type=submit]{
        width:270px;
        background:green;
        color:white;
        border:none;
        cursor:pointer;
    }

    input[type=submit]:hover{
        background:darkgreen;
    }
</style>
</head>
<body>

<?php
$result = "";

function calculate($num1, $num2, $op)
{
    switch($op)
    {
        case '+':
            return $num1 + $num2;

        case '-':
            return $num1 - $num2;

        case '*':
            return $num1 * $num2;

        case '/':
            return ($num2 != 0) ? $num1 / $num2 : "Cannot Divide By Zero!!";

        default:
            return "Invalid Operation";
    }
}

if(isset($_POST['Submit']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $result = calculate($num1, $num2, $operation);
}
?>

<form method="POST">

    Number 1:<br>
    <input type="number" name="num1" required>

    <br>

    Number 2:<br>
    <input type="number" name="num2" required>

    <br>

    Operation:<br>
    <select name="operation">
        <option value="+">Add (+)</option>
        <option value="-">Subtract (-)</option>
        <option value="*">Multiply (*)</option>
        <option value="/">Division (/)</option>
    </select>

    <br>

    <input type="submit" name="Submit" value="Calculate">

    <br><br>

    Result:<br>
    <input type="text" value="<?php echo $result; ?>" readonly>

</form>

</body>
</html>