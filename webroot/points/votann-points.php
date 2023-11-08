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
        <title>Leagues of Votann</title>
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
          <h2>Leagues of Votann</h2>
          <hr>

          <form action="insert-into-unit-table.php" method="post">
            <input id="name" type="hidden" name="name" value="">
            <input id="models" type="hidden" name="models" value="">
            <input id="points" type="hidden" name="points" value="">
            <ul style = "list-style: none; color:darkred">
            <?php
            echo_html_unit_start("Brôkhy Iron-master");
            echo_html_unit_model("Brôkhy Iron-master", 5, 14, 65);
            echo_html_unit_end();
            
            echo_html_unit_start("Brôkhy Thunderkyn");
            echo_html_unit_model("Brôkhy Thunderkyn", 3, 14, 75);
            echo_html_unit_model("Brôkhy Thunderkyn", 6, 12, 150);
            echo_html_unit_end();
            
            echo_html_unit_start("Cthonian Beserks");
            echo_html_unit_model("Cthonian Beserks", 5, 12, 100);
            echo_html_unit_model("Cthonian Beserks", 10, 10, 200);
            echo_html_unit_end();
            
            echo_html_unit_start("Einhyr Champion");
            echo_html_unit_model("Einhyr Champion", 1, 14, 60);
            echo_html_unit_end();
            
            echo_html_unit_start("Einhyr Hearthguard");
            echo_html_unit_model("Einhyr Hearthguard", 5, 12, 150);
            echo_html_unit_model("Einhyr Hearthguard", 10, 10, 300);
            echo_html_unit_end();
            
            echo_html_unit_start("Grimnyr");
            echo_html_unit_model("Grimnyr", 3, 14, 65);
            echo_html_unit_end();
            
            echo_html_unit_start("Hearthkyn Warriors");
            echo_html_unit_model("Hearthkyn Warriors", 5, 12, 110);
            echo_html_unit_end();
            
            echo_html_unit_start("Hekaton Land Fortress");
            echo_html_unit_model("Hekaton Land Fortress", 1, 12, 225);
            echo_html_unit_end();
            
            echo_html_unit_start("Hernkyn Pioneers");
            echo_html_unit_model("Hernkyn Pioneers", 3, 14, 90);
            echo_html_unit_model("Hernkyn Pioneers", 6, 12, 180);
            echo_html_unit_end();
            
            echo_html_unit_start("Kâhl");
            echo_html_unit_model("Kâhl", 1, 14, 70);
            echo_html_unit_end();
            
            echo_html_unit_start("Sagitaur");
            echo_html_unit_model("Sagitaur", 1, 12, 100);
            echo_html_unit_end();
            
            echo_html_unit_start("Ûthar the Destined");
            echo_html_unit_model("Ûthar the Destined", 1, 14, 90);
            echo_html_unit_end();
            
            
            ?>
          </ul>
          </form>
            
          
        </div>
        <div class="pad"></div>
      </div>
    </body>
</html>
