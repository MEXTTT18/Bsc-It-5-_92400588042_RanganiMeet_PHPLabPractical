<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try {
        $conn = new PDO("mysql:host=localhost:3307;dbname=studentdb", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "CREATE TABLE IF NOT EXISTS students3 (
            id INT AUTO_INCREMENT PRIMARY KEY,
            NAME VARCHAR(30),
            EMAIL VARCHAR(40),
            CITY VARCHAR(30)
        )";
        
        $conn->exec($sql);
        echo "Table Created Successfully!!";
    }
    catch(PDOException $e)
    {
        echo "Connection Failed: " . $e->getMessage();
    }
    
    ?>
</body>
</html>