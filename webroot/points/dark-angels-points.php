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
        <title>Dark Angels</title>
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
                
                <h2>Dark Angels</h2>
                <hr>

                <form action="insert-into-unit-table.php" method="post">
                  <input id="name" type="hidden" name="name" value="">
                  <input id="models" type="hidden" name="models" value="">
                  <input id="points" type="hidden" name="points" value="">
                  <ul style = "list-style: none; color:darkred">
                  <?php
                  echo_html_unit_start("Asmodai");
                  echo_html_unit_model("Asmodai", 1, 14, 70);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Azrael");
                  echo_html_unit_model("Azrael", 1, 12, 105);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Belial");
                  echo_html_unit_model("Belial", 1, 14, 85);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Deathwing Command Squad");
                  echo_html_unit_model("Deathwing Command Squad", 5, 12, 210);
                  echo_html_unit_model("Deathwing Command Squad", 10, 10, 420);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Deathwing Knights");
                  echo_html_unit_model("Deathwing Knights", 5, 12, 235);
                  echo_html_unit_model("Deathwing Knights", 10, 10, 470);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Deathwing Strikemaster");
                  echo_html_unit_model("Deathwing Strikemaster", 1, 14, 80);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Deathwing Terminator Squad");
                  echo_html_unit_model("Deathwing Terminator Squad", 5, 12, 200);
                  echo_html_unit_model("Deathwing Terminator Squad", 10, 10, 400);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Ezekiel");
                  echo_html_unit_model("Ezekiel", 1, 14, 75);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Lazarus");
                  echo_html_unit_model("Lazarus", 1, 14, 70);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Lion El'Jonson");
                  echo_html_unit_model("Lion El'Jonson", 1, 12, 380);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Nephilim Jetfighter");
                  echo_html_unit_model("Nephilim Jetfighter", 1, 12, 195);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Ravenwing Black Knights");
                  echo_html_unit_model("Ravenwing Black Knights", 3, 12, 110);
                  echo_html_unit_model("Ravenwing Black Knights", 6, 12, 220);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Ravenwing Command Squad");
                  echo_html_unit_model("Ravenwing Command Squad", 3, 12, 130);
                  echo_html_unit_model("Ravenwing Command Squad", 6, 12, 260);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Ravenwing Dark Talon");
                  echo_html_unit_model("Ravenwing Dark Talon", 1, 12, 210);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Ravenwing Darkshroud");
                  echo_html_unit_model("Ravenwing Darkshroud", 1, 12, 125);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Ravenwing Land Speeder Vengeance");
                  echo_html_unit_model("Ravenwing Land Speeder Vengeance", 1, 12, 160);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Ravenwing Talonmaster");
                  echo_html_unit_model("Ravenwing Talonmaster", 1, 12, 105);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Sammael");
                  echo_html_unit_model("Sammael", 1, 12, 130);
                  echo_html_unit_end();
                  
                  
                  ?>
                </ul>
                </form>
                
                
            </div>
            <div class="pad"></div>
        </div>
    </body>
</html>