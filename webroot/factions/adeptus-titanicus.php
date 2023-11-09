<?php
session_start();
require '../../utils/navbar.php'; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adeptus Titanicus</title>
        <link rel="stylesheet" href="../css/navbar.css">
        <link rel="stylesheet" href="../css/article-section.css">
        <link rel="stylesheet" href="../css/factions.css">
    </head>
    <body>
        
        <div id="background-image"></div>

        <?php  
            echoNavbar(1);
        ?>
        
        <div class="display">
            <div class="pad"></div>
            <div id="article"> 
                <h2>Adeptus Titanicus</h2>
                <hr>

                <img src = "../images/titanicus-image.jpeg" alt = "Titan Legions" height = "300" width = "500">

                <p>The Adeptus Titanicus, often known as the Titan Legions, is a formidable faction in the Warhammer 40,000 universe. 
                    They are masters of colossal war machines, the god-like Titans, which they use to wage titanic battles on a galactic scale.</p>

                <ul>
                    <li>
                    Titan Legions: The Adeptus Titanicus is comprised of various Titan Legions, each with its own identity and history. These legions 
                    are renowned for their immense war machines called Titans, such as the Warlord and Reaver Titans. The Titans are massive bipedal 
                    war engines, heavily armed and armored, and serve as symbols of power and destruction
                    </li>
                    <li>
                    Titan Crews: Titan crews are highly trained and skilled, with each member responsible for a specific aspect of Titan operation, from 
                    navigation to weapon systems. Their loyalty and dedication to their machines are unwavering, often viewing their Titan as an extension 
                    of themselves.
                    </li>
                    <li>
                    Epic Warfare: The Adeptus Titanicus is known for its epic battles, where Titans clash in city-sized arenas, their firepower capable of 
                    devastating entire continents. These battles often have strategic significance on a planetary or even galactic scale.

                    </li>
                    <li>
                    Adherence to the Mechanicus: The Titan Legions have strong ties to the Adeptus Mechanicus, who are responsible for the construction and 
                    maintenance of Titans. They share the Mechanicus' reverence for technology and are often called upon to protect Forge Worlds and other 
                    valuable assets.
                    </li>
                    <li>
                    Imposing Presence: Titans are not only formidable war machines but also awe-inspiring symbols of the Imperium's might. Their presence alone 
                    can be enough to quell uprisings or inspire devotion.
                    </li>
                </ul>
                
                <p>The Adeptus Titanicus, or Titan Legions, are masters of colossal war machines called Titans. These god-like engines of destruction are operated 
                    by dedicated crews and serve as symbols of power. The Titan Legions engage in epic battles that can reshape worlds, adhering to the tech-worshipping 
                    beliefs of the Adeptus Mechanicus. Their imposing presence and devastating firepower make them a force to be reckoned with in the grim future of the 
                    41st millennium.</p>
            </div>
            <div class="pad"></div>
        </div>
    </body>
</html>