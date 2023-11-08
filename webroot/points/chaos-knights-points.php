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
        <title>Chaos Knights</title>
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
                
                <h2>Chaos Knights</h2>
                <hr>

                <form action="insert-into-unit-table.php" method="post">
                  <input id="name" type="hidden" name="name" value="">
                  <input id="models" type="hidden" name="models" value="">
                  <input id="points" type="hidden" name="points" value="">
                  <ul style = "list-style: none; color:darkred">
                    <?php
                    echo_html_unit_start("Knight Abominant");
                    echo_html_unit_model("Knight Abominant", 1, 12, 455);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Knight Desecrator");
                    echo_html_unit_model("Knight Desecrator", 1, 12, 450);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Knight Despoiler");
                    echo_html_unit_model("Knight Despoiler", 1, 12, 470);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Knight Rampager");
                    echo_html_unit_model("Knight Rampager", 1, 12, 380);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Knight Tyrant");
                    echo_html_unit_model("Knight Tyrant", 1, 12, 555);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("War Dog Executioner");
                    echo_html_unit_model("War Dog Executioner", 1, 12, 150);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("War Dog Huntsman");
                    echo_html_unit_model("War Dog Huntsman", 1, 12, 150);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("War Dog Karnivore");
                    echo_html_unit_model("War Dog Karnivore", 1, 12, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("War Dog Stalker");
                    echo_html_unit_model("War Dog Stalker", 1, 12, 150);
                    echo_html_unit_end();

                    ?>

                    <h2>Forge World Units</h2>
                    
                    <?php
                    echo_html_unit_start("Chaos Acastus Knight Asterius");
                    echo_html_unit_model("Chaos Acastus Knight Asterius", 1, 12, 840);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Acastus Knight Porphyrion");
                    echo_html_unit_model("Chaos Acastus Knight Porphyrion", 1, 12, 740);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Cerastus Knight Acheron");
                    echo_html_unit_model("Chaos Cerastus Knight Acheron", 1, 12, 465);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Cerastus Knight Atrapos");
                    echo_html_unit_model("Chaos Cerastus Knight Atrapos", 1, 12, 465);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Cerastus Knight Castigator");
                    echo_html_unit_model("Chaos Cerastus Knight Castigator", 1, 12, 480);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Cerastus Knight Lancer");
                    echo_html_unit_model("Chaos Cerastus Knight Lancer", 1, 12, 465);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Questoris Knight Magaera");
                    echo_html_unit_model("Chaos Questoris Knight Magaera", 1, 12, 465);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Chaos Questoris Knight Styrix");
                    echo_html_unit_model("Chaos Questoris Knight Styrix", 1, 12, 505);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("War Dog Moirax");
                    echo_html_unit_model("War Dog Moirax", 1, 12, 170);
                    echo_html_unit_end();
                    
                    ?>
                </ul>
                </form>
                
                
            </div>
            <div class="pad"></div>
        </div>
    </body>
</html>