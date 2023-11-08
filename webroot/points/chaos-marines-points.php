<?php

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";
require_once $is_logged_in_path;

require_once 'create-unit-helper.php';
require_once 'insert-into-unit-table.php';;

if(isNotLoggedIn()){
  header("location: ../account/login.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chaos Space Marines</title>
        <link rel="stylesheet" href="../css/navbar.css">
        <link rel="stylesheet" href="../css/article-section.css">
        <link rel="stylesheet" href="../css/article-contents.css">
    </head>
    <body>
        
        <div id="background-image"></div>

        <?php 
            require '../../utils/navbar.php'; 
            echoNavbar(1);
        ?>
        
        <div class="display">
            <div class="pad"></div>
            <div id="article"> 
                
                <h2>Chaos Space Marines</h2>
                <hr>

                <form action="insert-into-unit-table.php" method="post">
                  <input id="name" type="hidden" name="name" value="">
                  <input id="models" type="hidden" name="models" value="">
                  <input id="points" type="hidden" name="points" value="">
                  <ul style = "list-style: none; color:darkred">
                  
                    <?php
                    echo_html_unit_start("Abaddon the Despoiler");
                    echo_html_unit_model("Abaddon the Despoiler", 1, 12, 310);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Accursed Cultists");
                    echo_html_unit_model("Accursed Cultists", 8, 14, 95);
                    echo_html_unit_model("Accursed Cultists", 16, 10, 190);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Bikers");
                    echo_html_unit_model("Chaos Bikers", 3, 14, 85);
                    echo_html_unit_model("Chaos Bikers", 6, 12, 170);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Land Raider");
                    echo_html_unit_model("Chaos Land Raider", 1, 12, 240);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Lord");
                    echo_html_unit_model("Chaos Lord", 1, 14, 75);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Lord in Terminator Armour");
                    echo_html_unit_model("Chaos Lord in Terminator Armour", 1, 14, 95);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Predator Annihilator");
                    echo_html_unit_model("Chaos Predator Annihilator", 1, 12, 130);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Predator Destructor");
                    echo_html_unit_model("Chaos Predator Destructor", 1, 12, 130);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Rhino");
                    echo_html_unit_model("Chaos Rhino", 1, 14, 75);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Spawn");
                    echo_html_unit_model("Chaos Spawn", 1, 14, 70);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Terminator Squad");
                    echo_html_unit_model("Chaos Terminator Squad", 5, 12, 195);
                    echo_html_unit_model("Chaos Terminator Squad", 10, 10, 390);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Vindicator");
                    echo_html_unit_model("Chaos Vindicator", 1, 12, 190);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chosen");
                    echo_html_unit_model("Chosen", 5, 12, 110);
                    echo_html_unit_model("Chosen", 10, 10, 220);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Cultist Mob");
                    echo_html_unit_model("Cultist Mob", 10, 12, 55);
                    echo_html_unit_model("Cultist Mob", 20, 10, 110);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Cypher");
                    echo_html_unit_model("Cypher", 1, 12, 105);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Dark Apostle");
                    echo_html_unit_model("Dark Apostle", 3, 14, 75);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Dark Commune");
                    echo_html_unit_model("Dark Commune", 5, 14, 55);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Defiler");
                    echo_html_unit_model("Defiler", 1, 12, 190);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Exalted Champion");
                    echo_html_unit_model("Exalted Champion", 1, 14, 70);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Fabius Bile");
                    echo_html_unit_model("Fabius Bile", 2, 14, 85);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Fellgor Beastmen");
                    echo_html_unit_model("Fellgor Beastmen", 10, 12, 95);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Forgefiend");
                    echo_html_unit_model("Forgefiend", 1, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Haarken Worldclaimer");
                    echo_html_unit_model("Haarken Worldclaimer", 1, 14, 90);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Havocs");
                    echo_html_unit_model("Havocs", 5, 12, 135);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Helbrute");
                    echo_html_unit_model("Helbrute", 1, 12, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Heldrake");
                    echo_html_unit_model("Heldrake", 1, 12, 205);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Heretic Astartes Daemon Prince");
                    echo_html_unit_model("Heretic Astartes Daemon Prince", 1, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Heretic Astartes Daemon Prince with Wings");
                    echo_html_unit_model("Heretic Astartes Daemon Prince with Wings", 1, 12, 195);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Huron Blackheart");
                    echo_html_unit_model("Huron Blackheart", 1, 14, 80);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Khorne Lord of Skulls");
                    echo_html_unit_model("Khorne Lord of Skulls", 1, 12, 480);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Legionaries");
                    echo_html_unit_model("Legionaries", 5, 14, 90);
                    echo_html_unit_model("Legionaries", 10, 10, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Lord Discordant on Helstalker");
                    echo_html_unit_model("Lord Discordant on Helstalker", 1, 12, 190);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Lucius the Eternal");
                    echo_html_unit_model("Lucius the Eternal", 1, 14, 95);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Master of Executions");
                    echo_html_unit_model("Master of Executions", 1, 14, 80);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Master of Possession");
                    echo_html_unit_model("Master of Possession", 1, 14, 80);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Maulerfiend");
                    echo_html_unit_model("Maulerfiend", 1, 12, 155);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Noctilith Crown");
                    echo_html_unit_model("Noctilith Crown", 1, 12, 125);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Noise Marines");
                    echo_html_unit_model("Noise Marines", 5, 14, 85);
                    echo_html_unit_model("Noise Marines", 10, 10, 170);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Obliterators");
                    echo_html_unit_model("Obliterators", 2, 12, 170);
                    echo_html_unit_model("Obliterators", 4, 12, 340);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Possessed");
                    echo_html_unit_model("Possessed", 5, 12, 140);
                    echo_html_unit_model("Possessed", 10, 10, 280);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Raptors");
                    echo_html_unit_model("Raptors", 5, 14, 90);
                    echo_html_unit_model("Raptors", 10, 10, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Sorcerer");
                    echo_html_unit_model("Sorcerer", 1, 14, 60);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Sorcerer in Terminator Armour");
                    echo_html_unit_model("Sorcerer in Terminator Armour", 1, 14, 90);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Traitor Enforcer");
                    echo_html_unit_model("Traitor Enforcer", 2, 14, 65);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Traitor Guardsmen Squad");
                    echo_html_unit_model("Traitor Guardsmen Squad", 10, 12, 70);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Vashtorr the Arkifane");
                    echo_html_unit_model("Vashtorr the Arkifane", 1, 12, 190);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Venomcrawler");
                    echo_html_unit_model("Venomcrawler", 1, 12, 120);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Warp Talons");
                    echo_html_unit_model("Warp Talons", 5, 12, 100);
                    echo_html_unit_model("Warp Talons", 10, 10, 200);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Warpsmith");
                    echo_html_unit_model("Warpsmith", 1, 14, 70);
                    echo_html_unit_end();
                    
                    ?>



                </ul>
                </form>
                
                
            </div>
            <div class="pad"></div>
        </div>
    </body>
</html>