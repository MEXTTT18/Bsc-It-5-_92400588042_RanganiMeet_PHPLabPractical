<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $currentmonth = 6;

        if($currentmonth == 1){
            echo"January";
        }
        elseif($currentmonth == 2){
            echo"February";
        }
        elseif($currentmonth == 3){
            echo"March";
        }
        elseif($currentmonth == 4){
            echo"April";
        }
        elseif($currentmonth == 5){
            echo"July";
        }
        elseif($currentmonth == 6){
            echo"June";
            if(true){
                echo"6th,2026";
            }
        }
        else{
            echo"Other Month";
        }
            
    ?>
</body>
</html>