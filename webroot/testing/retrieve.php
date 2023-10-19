<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello World!</p>

    <?php
        $dbhost = "localhost";
        $dbuser = "CS268Tyler";
        $dbpass = "12345";
        $conn = new mysqli($dbhost, $dbuser, $dbpass);

        if (!$conn) {
            die("Failed to connect: " . $mysqli->error);
        } else {
            echo "Connected Successfully!<br>";
        }

        $conn->select_db("guestbook");
        $sql = "SELECT guestName, content FROM entries";
        $returnValue = $conn->query($sql);
        if (!$returnValue) {
            die("Failed to retrieve data from database.");
        } else {
            echo "Retrieved data successfully!<br><br>";
        }

        while($row = mysqli_fetch_array($returnValue, MYSQLI_NUM)) {
            echo    "Guest Name: {$row[0]} <br>" .
                    "Content: {$row[1]} <br>" . 
                    "------------------------------------<br>";
        }



        $conn->close();
        
    ?>
    
</body>
</html>