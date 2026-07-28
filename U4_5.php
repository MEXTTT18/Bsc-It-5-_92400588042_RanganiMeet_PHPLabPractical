<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307", "root", "", "studentdb");

        if ($conn->connect_error)
        {
            die("Connection Failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM students3";
        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            echo "<table border='1', align='center'>";
            echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
            echo "<th>City</th>";
            echo "</tr>";

            while($row = $result->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["NAME"] . "</td>";
                echo "<td>" . $row["EMAIL"] . "</td>";
                echo "<td>" . $row["CITY"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
        else
        {
            echo "No Record Found!!";
        }
        $conn->close();
    ?>
</body>
</html>