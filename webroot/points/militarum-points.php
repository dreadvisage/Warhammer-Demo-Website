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
        <title>Astra Militarum</title>
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
                
                <h2>Astra Militarum</h2>
                <hr>

                <form action="insert-into-unit-table.php" method="post">
                  <input id="name" type="hidden" name="name" value="">
                  <input id="models" type="hidden" name="models" value="">
                  <input id="points" type="hidden" name="points" value="">
                  <ul style = "list-style: none; color:darkred">
                    <?php
                    echo_html_unit_start("Aegis Defence Line");
                    echo_html_unit_model("Aegis Defence Line", 1, 12, 145);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Armoured Sentinels");
                    echo_html_unit_model("Armoured Sentinels", 1, 14, 70);
                    echo_html_unit_model("Armoured Sentinels", 2, 12, 140);
                    echo_html_unit_model("Armoured Sentinels", 3, 12, 210);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Attilan Rough Riders");
                    echo_html_unit_model("Attilan Rough Riders", 5, 14, 70);
                    echo_html_unit_model("Attilan Rough Riders", 10, 10, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Baneblade");
                    echo_html_unit_model("Baneblade", 1, 12, 480);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Banehammer");
                    echo_html_unit_model("Banehammer", 1, 12, 450);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Banesword");
                    echo_html_unit_model("Banesword", 1, 12, 480);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Basilisk");
                    echo_html_unit_model("Basilisk", 1, 12, 135);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Bullgryn Squad");
                    echo_html_unit_model("Bullgryn Squad", 3, 14, 80);
                    echo_html_unit_model("Bullgryn Squad", 6, 12, 160);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Cadian Castellan");
                    echo_html_unit_model("Cadian Castellan", 1, 14, 45);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Cadian Command Squad");
                    echo_html_unit_model("Cadian Command Squad", 5, 14, 65);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Cadian Shock Troops");
                    echo_html_unit_model("Cadian Shock Troops", 10, 12, 55);
                    echo_html_unit_model("Cadian Shock Troops", 20, 10, 110);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chimera");
                    echo_html_unit_model("Chimera", 5, 14, 70);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Commissar");
                    echo_html_unit_model("Commissar", 1, 14, 30);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Death Korps of Krieg");
                    echo_html_unit_model("Death Korps of Krieg", 10, 12, 65);
                    echo_html_unit_model("Death Korps of Krieg", 20, 10, 130);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Deathstrike");
                    echo_html_unit_model("Deathstrike", 1, 12, 160);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Doomhammer");
                    echo_html_unit_model("Doomhammer", 1, 12, 455);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Field Ordnance Battery");
                    echo_html_unit_model("Field Ordnance Battery", 2, 12, 120);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Gaunt's Ghosts");
                    echo_html_unit_model("Gaunt's Ghosts", 6, 12, 100);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Heavy Weapons Squad");
                    echo_html_unit_model("Heavy Weapons Squad", 3, 14, 60);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Hellhammer");
                    echo_html_unit_model("Hellhammer", 1, 12, 450);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Hellhound");
                    echo_html_unit_model("Hellhound", 1, 12, 125);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Hydra");
                    echo_html_unit_model("Hydra", 1, 14, 95);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Infantry Squad");
                    echo_html_custom_unit_model("Infantry Squad", "9-10 models", 9, 60);
                    echo_html_custom_unit_model("Infantry Squad", "18-20 models", 5, 120);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("'Iron Hand' Straken");
                    echo_html_unit_model("'Iron Hand' Straken", 1, 14, 55);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Kasrkin");
                    echo_html_unit_model("Kasrkin", 10, 10, 100);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Leman Russ Battle Tank");
                    echo_html_unit_model("Leman Russ Battle Tank", 1, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Leman Russ Demolisher");
                    echo_html_unit_model("Leman Russ Demolisher", 1, 12, 200);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Leman Russ Eradicator");
                    echo_html_unit_model("Leman Russ Eradicator", 1, 12, 160);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Leman Russ Executioner");
                    echo_html_unit_model("Leman Russ Executioner", 1, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Leman Russ Exterminator");
                    echo_html_unit_model("Leman Russ Exterminator", 1, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Leman Russ Punisher");
                    echo_html_unit_model("Leman Russ Punisher", 1, 12, 160);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Leman Russ Vanquisher");
                    echo_html_unit_model("Leman Russ Vanquisher", 1, 12, 155);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Lord Solar Leontus");
                    echo_html_unit_model("Lord Solar Leontus", 1, 12, 125);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Manticore");
                    echo_html_unit_model("Manticore", 1, 12, 150);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Militarum Tempestus Command Squad");
                    echo_html_unit_model("Militarum Tempestus Command Squad", 1, 14, 80);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Munitorum Servitors");
                    echo_html_unit_model("Munitorum Servitors", 4, 14, 35);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Nork Deddog");
                    echo_html_unit_model("Nork Deddog", 1, 14, 60);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Ogryn Bodyguard");
                    echo_html_unit_model("Ogryn Bodyguard", 1, 14, 40);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Ogryn Squad");
                    echo_html_unit_model("Ogryn Squad", 3, 14, 65);
                    echo_html_unit_model("Ogryn Squad", 6, 12, 130);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Platoon Command Squad");
                    echo_html_custom_unit_model("Platoon Command Squad", "4-5", 11, 60);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Primaris Psyker");
                    echo_html_unit_model("Primaris Psyker", 1, 14, 60);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Ratling Snipers");
                    echo_html_unit_model("Ratling Snipers", 5, 14, 60);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Regimental Attachés");
                    echo_html_unit_model("Regimental Attachés", 3, 14, 40);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Regimental Enginseer");
                    echo_html_unit_model("Regimental Enginseer", 1, 14, 45);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Regimental Preacher");
                    echo_html_unit_model("Regimental Preacher", 1, 14, 35);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Rogal Dorn Battle Tank");
                    echo_html_unit_model("Rogal Dorn Battle Tank", 1, 12, 260);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Scout Sentinels");
                    echo_html_unit_model("Scout Sentinels", 1, 14, 60);
                    echo_html_unit_model("Scout Sentinels", 2, 12, 120);
                    echo_html_unit_model("Scout Sentinels", 3, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Sergeant Harker");
                    echo_html_unit_model("Sergeant Harker", 1, 14, 40);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Shadowsword");
                    echo_html_unit_model("Shadowsword", 1, 12, 440);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Sly Marbo");
                    echo_html_unit_model("Sly Marbo", 1, 14, 65);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Stormlord");
                    echo_html_unit_model("Stormlord", 1, 12, 460);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Stormsword");
                    echo_html_unit_model("Stormsword", 1, 12, 495);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Tank Commander");
                    echo_html_unit_model("Tank Commander", 1, 12, 205);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Taurox");
                    echo_html_unit_model("Taurox", 1, 14, 65);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Taurox Prime");
                    echo_html_unit_model("Taurox Prime", 1, 14, 90);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Tempestus Scions");
                    echo_html_unit_model("Tempestus Scions", 5, 14, 55);
                    echo_html_unit_model("Tempestus Scions", 10, 10, 110);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Ursula Creed");
                    echo_html_unit_model("Ursula Creed", 1, 14, 55);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Valkyrie");
                    echo_html_unit_model("Valkyrie", 1, 12, 190);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Wyvern");
                    echo_html_unit_model("Wyvern", 1, 12, 110);
                    echo_html_unit_end();
                    ?>

                    <h2>Forge World Units</h2>
                    
                    <?php
                    echo_html_unit_start("Avenger Strike Force");
                    echo_html_unit_model("Avenger Strike Force", 1, 12, 130);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Carnodon");
                    echo_html_unit_model("Carnodon", 1, 12, 160);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Colossus");
                    echo_html_unit_model("Colossus", 1, 12, 160);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Crassus");
                    echo_html_unit_model("Crassus", 1, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Cyclops Demolition Vehicle");
                    echo_html_unit_model("Cyclops Demolition Vehicle", 1, 14, 25);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Death Korps Marshal");
                    echo_html_unit_model("Death Korps Marshal", 1, 14, 60);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Death Rider Squadron");
                    echo_html_unit_model("Death Rider Squadron", 5, 14, 70);
                    echo_html_unit_model("Death Rider Squadron", 10, 10, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Death Rider Squadron Commander");
                    echo_html_unit_model("Death Rider Squadron Commander", 1, 14, 60);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Earthshaker Carriage Battery");
                    echo_html_unit_model("Earthshaker Carriage Battery", 1, 12, 120);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Hades Breaching Drill");
                    echo_html_unit_model("Hades Breaching Drill", 1, 12, 110);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Macharius");
                    echo_html_unit_model("Macharius", 1, 12, 310);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Macharius Vanquisher");
                    echo_html_unit_model("Macharius Vanquisher", 1, 12, 285);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Macharius Vulcan");
                    echo_html_unit_model("Macharius Vulcan", 1, 12, 310);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Malcador");
                    echo_html_unit_model("Malcador", 1, 12, 250);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Malcador Annihilator");
                    echo_html_unit_model("Malcador Annihilator", 1, 12, 270);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Malcador Defender");
                    echo_html_unit_model("Malcador Defender", 1, 12, 310);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Malcador Infernus");
                    echo_html_unit_model("Malcador Infernus", 1, 12, 235);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Marauder Bomber");
                    echo_html_unit_model("Marauder Bomber", 1, 12, 345);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Marauder Destroyer");
                    echo_html_unit_model("Marauder Destroyer", 1, 12, 375);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Marauder Carriage Battery");
                    echo_html_unit_model("Marauder Carriage Battery", 1, 14, 60);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Praetor");
                    echo_html_unit_model("Praetor", 1, 12, 275);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Rapier Laser Destroyer Battery");
                    echo_html_unit_model("Rapier Laser Destroyer Battery", 1, 14, 35);
                    echo_html_unit_model("Rapier Laser Destroyer Battery", 2, 14, 70);
                    echo_html_unit_model("Rapier Laser Destroyer Battery", 3, 12, 105);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Stormblade");
                    echo_html_unit_model("Stormblade", 1, 12, 415);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Tarantula Battery");
                    echo_html_unit_model("Tarantula Battery", 1, 14, 40);
                    echo_html_unit_model("Tarantula Battery", 2, 14, 80);
                    echo_html_unit_model("Tarantula Battery", 3, 12, 120);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Thunderbolt Heavy Fighter");
                    echo_html_unit_model("Thunderbolt Heavy Fighter", 1, 12, 200);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Trojan Support Vehicle");
                    echo_html_unit_model("Trojan Support Vehicle", 1, 14, 80);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Valdor");
                    echo_html_unit_model("Valdor", 1, 12, 285);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Voss-pattern Lightning");
                    echo_html_unit_model("Voss-pattern Lightning", 1, 12, 130);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Vulture Gunship");
                    echo_html_unit_model("Vulture Gunship", 1, 14, 80);
                    echo_html_unit_end();
                    
                    
                    ?>
                </ul>
                </form>
                
                
            </div>
            <div class="pad"></div>
        </div>
    </body>
</html>