<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307", "root", "", "studentdb");
       
        $sql = "INSERT INTO students3(name, email, city) 
                VALUES ('Meet','m@gmail.com', 'Rajkot')";
        
        if (mysqli_query($conn, $sql))
        {
            echo "Record Inserted Successfully!!";
        } 
        else
        {
            echo "Error: ";
        }
        
        $conn->close();
    ?>
</body>
</html>