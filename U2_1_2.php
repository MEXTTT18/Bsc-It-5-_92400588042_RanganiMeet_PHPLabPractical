<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Associative Array For Months</h1>
    </header>
    <?php
        $months=array(
        "January"=>31,
        "Februay"=>28,
        "March"=>31,
        "April"=>30,
        "May"=>31,
        "June"=>30,
        "July"=>31,
        "August"=>31,
        "September"=>30,
        "October"=>31,
        "November"=>30,
        "December"=>31);
        foreach($months as $m=>$days)
        {
            echo $m . "=>" . $days . "<br>";
        }
    ?>
    <footer><h2>End!!</h2></footer>
</body>
</html>