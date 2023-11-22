<!-- https://stackoverflow.com/questions/18902887/how-to-configuring-a-xampp-web-server-for-different-root-directory -->
<!-- https://stackoverflow.com/questions/812571/how-to-create-friendly-url-in-php -->
<?php
session_start();
require '../utils/navbar.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

            <img src="images/aquila-image.webp" alt="Warhammer 40k Aquila">

            <h1 style = "text-align: center">WELCOME TO OUR WEBSITE RETARDS!!!</h1>

            <p>Warhammer 40,000, commonly known as Warhammer 40k or simply 40k, is a tabletop miniature wargame created by Games Workshop. 
            It was first released in 1987 and has since become one of the most popular and enduring tabletop wargames in the world. The game 
            is set in a dystopian science fiction universe in the 41st millennium, where vast interstellar civilizations are locked in a constant state of war.
            </p>

            <br>
            <p>At INSERT NAME HERE, we provide multiple services for Warhammer 40k players of any level or experience.</p>

            <br>
            <h2 style = "text-align: center">Army List Builder</h2>
            <p>
                The main attraction of our website is the one of a kind army list builder that emphasizes ease of use for all our users. Ditching the 
                confusing formatting of units in order of class and function, we present all the factions and thier units in alphebateical order.
                This allows 40k players, new and old, to easily find thier desired units without the endless scrolling and searching. To begin your 
                creating your army list, please create an account now!
            </p>

            <br>
            <h2 style = "text-align: center">Warhammer 40k Lore</h2>
            <p> 
                Newer 40k players often know very little about specific 40k factions. Even some experienced players have gaps of knowledge due to the
                large amount of factions in the Warhammer universe. We understand that the lore and background of a faction is for many 40k players a 
                deciding factor on what to bring to the table. Because of this, we provide the basic information of all playable 40k factions, as 
                well as imagery that represents their respective themes and look. This feature does not require an account, and is availabe for all who
                visit INSERT NAME HERE!
            </p>
            <h5> *WARNING! Some faction content may include spoilers for The Horus Heresy book series!*</h5>

            <br>
            <h2 style = "text-align: center">Helpful Tips and Links</h2>
            <p>
                Warhammer 40k can seem like a daunting hobby to get into. Learning how to play, how to build an army list, how to collect your army, etc. 
                are some of the most fundemental parts of getting into 40k. Because we strive to provide a website that is accomdating to new players, 
                we include many tips and links that help answer these questions. Check the FAQ to learn more about the game and about INSERT NAME HERE!

            </p>
        </div>
        <div class="pad"></div>
    </div>    
    

</body>
</html>