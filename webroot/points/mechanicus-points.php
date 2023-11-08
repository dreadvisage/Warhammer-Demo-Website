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
        <title>Adeptus Custodes</title>
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
                
                <h2>Adeptus Mechanicus</h2>
                <hr>

                <form action="insert-into-unit-table.php" method="post">
                  <input id="name" type="hidden" name="name" value="">
                  <input id="models" type="hidden" name="models" value="">
                  <input id="points" type="hidden" name="points" value="">
                  <ul style = "list-style: none; color:darkred">
                    <?php
                    echo_html_unit_start("Archaeopter Fusilave");
                    echo_html_unit_model("Archaeopter Fusilave", 1, 12, 155);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Archaeopter Stratoraptor");
                    echo_html_unit_model("Archaeopter Stratoraptor", 1, 12, 165);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Archaeopter Transvector");
                    echo_html_unit_model("Archaeopter Transvector", 1, 12, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Belisarius Cawl");
                    echo_html_unit_model("Belisarius Cawl", 1, 12, 185);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Corpuscarii Electro-Priests");
                    echo_html_unit_model("Corpuscarii Electro-Priests", 5, 14, 55);
                    echo_html_unit_model("Corpuscarii Electro-Priests", 10, 10, 110);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Cybernetica Datasmith");
                    echo_html_unit_model("Cybernetica Datasmith", 1, 14, 35);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Fulgurite Electro-Priests");
                    echo_html_unit_model("Fulgurite Electro-Priests", 5, 14, 60);
                    echo_html_unit_model("Fulgurite Electro-Priests", 10, 10, 120);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Ironstrider Ballistarii");
                    echo_html_unit_model("Ironstrider Ballistarii", 1, 14, 50);
                    echo_html_unit_model("Ironstrider Ballistarii", 2, 12, 100);
                    echo_html_unit_model("Ironstrider Ballistarii", 3, 12, 150);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Kastelan Robots");
                    echo_html_unit_model("Kastelan Robots", 2, 12, 200);
                    echo_html_unit_model("Kastelan Robots", 4, 12, 400);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Kataphron Breachers");
                    echo_html_unit_model("Kataphron Breachers", 3, 12, 145);
                    echo_html_unit_model("Kataphron Breachers", 6, 12, 290);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Kataphron Destroyers");
                    echo_html_unit_model("Kataphron Destroyers", 3, 12, 115);
                    echo_html_unit_model("Kataphron Destroyers", 6, 12, 230);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Onager Dunecrawler");
                    echo_html_unit_model("Onager Dunecrawler", 1, 12, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Pteraxii Skystalkers");
                    echo_html_unit_model("Pteraxii Skystalkers", 5, 14, 65);
                    echo_html_unit_model("Pteraxii Skystalkers", 10, 10, 130);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Pteraxii Sterylizors");
                    echo_html_unit_model("Pteraxii Sterylizors", 5, 14, 70);
                    echo_html_unit_model("Pteraxii Sterylizors", 10, 10, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Serberys Raiders");
                    echo_html_unit_model("Serberys Raiders", 3, 14, 60);
                    echo_html_unit_model("Serberys Raiders", 6, 12, 120);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Serberys Sulphurhounds");
                    echo_html_unit_model("Serberys Sulphurhounds", 3, 14, 55);
                    echo_html_unit_model("Serberys Sulphurhounds", 6, 12, 110);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Servitors");
                    echo_html_unit_model("Servitors", 4, 14, 50);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Sicarian Infiltrators");
                    echo_html_unit_model("Sicarian Infiltrators", 5, 14, 70);
                    echo_html_unit_model("Sicarian Infiltrators", 10, 10, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Sicarian Ruststalkers");
                    echo_html_unit_model("Sicarian Ruststalkers", 5, 14, 70);
                    echo_html_unit_model("Sicarian Ruststalkers", 10, 10, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Skitarii Marshal");
                    echo_html_unit_model("Skitarii Marshal", 1, 14, 35);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Skitarii Rangers");
                    echo_html_unit_model("Skitarii Rangers", 10, 12, 90);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Skitarii Vanguard");
                    echo_html_unit_model("Skitarii Vanguard", 8, 14, 80);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Skorpius Disintegrator");
                    echo_html_unit_model("Skorpius Disintegrator", 1, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Skorpius Dunerider");
                    echo_html_unit_model("Skorpius Dunerider", 1, 14, 80);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Sydonian Dragoons");
                    echo_html_unit_model("Sydonian Dragoons", 1, 14, 60);
                    echo_html_unit_model("Sydonian Dragoons", 2, 12, 120);
                    echo_html_unit_model("Sydonian Dragoons", 3, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Tech-Priest Dominus");
                    echo_html_unit_model("Tech-Priest Dominus", 1, 14, 75);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Tech-Priest Enginseer");
                    echo_html_unit_model("Tech-Priest Enginseer", 1, 14, 40);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Tech-Priest Manipulus");
                    echo_html_unit_model("Tech-Priest Manipulus", 1, 14, 55);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Technoarcheologist");
                    echo_html_unit_model("Technoarcheologist", 1, 14, 45);
                    echo_html_unit_end();
                    
                    
                    ?>
                  
                </ul>
                </form>
                
                
            </div>
            <div class="pad"></div>
        </div>
    </body>
</html>