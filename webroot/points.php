<?php
session_start();
require '../utils/navbar.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Points</title>
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

            <h1>Points</h1>

            <p>
                Welcome to the Points main page! How can you build an army if you don't know what the rules of your army 
                and units? Here on the Points page, you can find the links to the official online indexes for all of the 
                playable Warhammer 40k factions. These indexes contain the datasheets for all of thier factions respective 
                units, so be sure to familirize yourself with them, or at least have them on hand when creating your army 
                list. Click on your desired faction to get started!
            </p>

            <br>
            <a href="https://www.warhammer-community.com/wp-content/uploads/2023/06/riFjIh9OeKg6AbLZ.pdf" target="_blank">Adepta Sororitas</a>
            
            <br><br>
            <a href="https://www.warhammer-community.com/wp-content/uploads/2023/06/TE5lPwmnUDrITuGM.pdf" target="_blank">Adeptus Custodes</a>

            <br><br>
            <a href="https://www.warhammer-community.com/wp-content/uploads/2023/06/vkzQ2IBbrrCVNzz3.pdf" target="_blank">Adeptus Mechanicus</a>

            <br><br>
            <a href="https://www.warhammer-community.com/wp-content/uploads/2023/06/8BgBEXw7BlTSquqV.pdf" target="_blank">Adeptus Titanicus</a>
        </div>
        <div class="pad"></div>
    </div>    
</body>
</html>