<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $conn = new mysqli("localhost:3307", "root","", "test");
            if ($conn->connect_error){
               die("Connnection Failed : " . $conn->connect_error);
               }
               
        $queries = [
            "SELECT DAYOFWEEK(CURDATE()) AS DayOfWeek",
            "SELECT WEEKDAY(CURDATE()) AS WeekDay",
            "SELECT DAYOFMONTH(CURDATE()) AS DayOfMonth",
            "SELECT DAYOFYEAR(CURDATE()) AS DayOfYear",
            "SELECT DAYNAME(CURDATE()) AS DayName",
            "SELECT MONTH(CURDATE()) AS MonthNumber",
            "SELECT MONTHNAME(CURDATE()) AS MonthName",
            "SELECT WEEK(CURDATE()) AS WeekNumber",
            "SELECT NOW() AS CurrentDateTime",
            "SELECT SYSDATE() AS SystemDateTime",
            "SELECT CURRENT_TIMESTAMP() AS CurrentTimestamp"
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
        
            } else {
        
                echo "Query Error: " . $conn->error . "<br>";
        
            }
        
        }
        
        $conn->close();
        
        ?>
        
</body>
</html>