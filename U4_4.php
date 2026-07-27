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

        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("INSERT INTO students3(name, email, city) VALUES (?,?,?)");

    $name = "JanduBam";
    $email = "jb@gmail.com";
    $city = "Rajkot";
    
    $stmt->bind_param("sss", $name, $email, $city);

    if($stmt->execute())
    {
        echo"Recorded Inserted Successfully!!";
    }
    else
    {
        echo "Error: "; 
    }
    ?>
</body>
</html>