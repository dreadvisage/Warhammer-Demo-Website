<?php
session_start();
require '../utils/navbar.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factions</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/article-section.css">
</head>
<body>
    <div id="background-image"></div>

    <?php 
        echoNavbar(0);
    ?>

    <div class="display">
        <div class="pad"></div>
        <div id="article"> 
            <p>This is the factions page. It will be implemented soon!</p>
        </div>
        <div class="pad"></div>
    </div>    
</body>
</html>