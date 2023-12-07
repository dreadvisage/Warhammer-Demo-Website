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

    <div id="background-image"><img src="images/warhammer-background.jpg" alt="Warhammer Background"></div>

    <?php echoNavbar(0); ?>

    <main>
        <div class="display">
            <div class="pad"></div>
            <div id="article">

            <img src="images/aquila-image.webp" alt="Warhammer 40k Aquila">

                <h1 style="text-align: center">Warhammer Haven</h1>

                <p>
                Forget the promise of progress and understanding, for in the grim dark future there is only war. - Vulkan He'Stan
                </p>

                <iframe width=100% height="315" src="https://www.youtube.com/embed/cy4CJ4F-epA?si=QBrchI3Hki34CBWM" frameborder="0" allowfullscreen></iframe>
                </iframe>

                <br>
                <p>At Warhammer Haven, we provide multiple services for Warhammer 40k players of any level or experience. Services include faction information and lore,
                    various online resources to help new players get you started, our one of a kind, beginner friendly army list builder (with creation of account), 
                    and much more! If you are an existing 40k player, someone looking to get into the hobby, or are just interested in the universe of Warhammer 40k,
                     visit the About page to learn more about what Warhammer Haven can do for you!
                </p>
        </div>
        <div class="pad"></div>
    </div>    
    </main>
    <footer>
        <div class="pad"></div>
        <div class="footer-content">
            <hr>
            <p>Author(s): Seth Pommer, Tyler Sobojinski</p>
        </div>
        <div class="pad"></div>
    </footer>
</body>

</html>