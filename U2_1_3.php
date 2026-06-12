<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Multidimensional Array</h1>
    </header>
    <?php
        $multi = array(

                array("Dell","M10","57000/-"),
                array("Acer","M4","59700/-"),
                array("Hp","Victus","78000/-"),
                array("Asus","TUF F17","100000/-"),
                array("Lenevo","LOQ","98000/-"),
        );

        for($i=0;$i<5;$i++){
            for($j=0;$j<3;$j++){
                echo $multi[$i][$j]."    "; 
            }
            echo "<br>";
        }
    ?>
</body>
</html