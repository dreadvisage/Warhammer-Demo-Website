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
        <title>Black Templars</title>
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
                
                <h2>Black Templars</h2>
                <hr>

                <form action="insert-into-unit-table.php" method="post">
                  <input id="name" type="hidden" name="name" value="">
                  <input id="models" type="hidden" name="models" value="">
                  <input id="points" type="hidden" name="points" value="">
                  <ul style = "list-style: none; color:darkred">
                    
                  <?php
                  echo_html_unit_start("Black Templars Gladiator Lancer");
                  echo_html_unit_model("Black Templars Gladiator Lancer", 1, 12, 165);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Black Templars Gladiator Reaper");
                  echo_html_unit_model("Black Templars Gladiator Reaper", 1, 12, 155);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Black Templars Gladiator Valiant");
                  echo_html_unit_model("Black Templars Gladiator Valiant", 1, 12, 155);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Black Templars Impulsor");
                  echo_html_unit_model("Black Templars Impulsor", 1, 14, 85);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Black Templars Repulsor");
                  echo_html_unit_model("Black Templars Repulsor", 1, 12, 200);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Black Templars Gladiator Executioner");
                  echo_html_unit_model("Black Templars Gladiator Executioner", 1, 12, 235);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Castellan");
                  echo_html_unit_model("Castellan", 1, 14, 65);
                  echo_html_unit_end();

                  echo_html_unit_start("Chaplain Grimaldus");
                  echo_html_unit_model("Chaplain Grimaldus", 1, 14, 95);
                  echo_html_unit_end();

                  echo_html_unit_start("Crusader Squad");
                  echo_html_custom_unit_model("Crusader Squad", "1 Sword Brother, 4 Initiates", 30, 65);
                  echo_html_custom_unit_model("Crusader Squad", "1 Sword Brother, 9 Initiates", 28, 125);
                  echo_html_custom_unit_model("Crusader Squad", "1 Sword Brother, 4 Initiates, 5 Neophytes", 6, 125);
                  echo_html_custom_unit_model("Crusader Squad", "1 Sword Brother, 9 Initiates, 10 Neophytes", 4, 250);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("High Marshal Helbrecht");
                  echo_html_unit_model("High Marshal Helbrecht", 1, 14, 95);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Marshal");
                  echo_html_unit_model("Marshal", 1, 14, 80);
                  echo_html_unit_end();

                  echo_html_unit_start("Primaris Crusader Squad");
                  echo_html_custom_unit_model("Primaris Crusader Squad", "1 Sword Brother, 5 Initiates, 4 Neophytes", 6, 140);
                  echo_html_custom_unit_model("Primaris Crusader Squad", "1 Sword Brother, 11 Initiates, 8 Neophytes", 6, 280);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Primaris Sword Brethren");
                  echo_html_unit_model("Primaris Sword Brethren", 5, 12, 140);
                  echo_html_unit_model("Primaris Sword Brethren", 10, 10, 280);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("The Emperor's Champion");
                  echo_html_unit_model("The Emperor's Champion", 1, 14, 75);
                  echo_html_unit_end();
                  
                  
                  ?>
                </ul>
                </form>
                
                
            </div>
            <div class="pad"></div>
        </div>
    </body>
</html>