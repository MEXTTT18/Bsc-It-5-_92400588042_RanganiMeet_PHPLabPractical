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

        if ($conn->connect_error)
        {
            die("Connection Failed: " . $conn->connect_error);
        }

        $sql = "UPDATE students3 SET name = 'Rocky', email = 'rocky@gmail.com',city = 'Surat's WHERE id = 2";

        if($conn->query($sql))
        {
            echo "Record Updated Successfully!!";
        } else {
            echo "Error!!";
        }
        $conn->close();
    ?>
</body>
</html>