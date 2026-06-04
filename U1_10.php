<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array1 = array("Gandu", "Jandu", "Jambu");
        $array2 = array("Fondu", "Dondu", "Fandu");

        $mergedArray = array_merge($array1, $array2);

        foreach($mergedArray as $m18){
            echo $m18."<br>";
        }
    ?>
</body>
</html>