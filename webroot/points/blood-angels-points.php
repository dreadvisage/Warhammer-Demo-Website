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
        <title>Blood Angels</title>
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
                
                <h2>Blood Angels</h2>
                <hr>

                <form action="insert-into-unit-table.php" method="post">
                  <input id="name" type="hidden" name="name" value="">
                  <input id="models" type="hidden" name="models" value="">
                  <input id="points" type="hidden" name="points" value="">
                  <ul style = "list-style: none; color:darkred">
                  <?php
                  echo_html_unit_start("Callidus Assassin");
                  echo_html_unit_model("Callidus Assassin", 1, 14, 90);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Culexus Assassin");
                  echo_html_unit_model("Culexus Assassin", 1, 14, 85);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Eversor Assassin");
                  echo_html_unit_model("Eversor Assassin", 1, 14, 75);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Extaction Squad");
                  echo_html_unit_model("Extaction Squad", 10, 4, 110);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Imperial Navy Breachers");
                  echo_html_unit_model("Imperial Navy Breachers", 10, 10, 105);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Inquisitor");
                  echo_html_unit_model("Inquisitor", 1, 14, 55);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Inquisitor Coteaz");
                  echo_html_unit_model("Inquisitor Coteaz", 1, 14, 75);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Inquisitor Eisenhorn");
                  echo_html_unit_model("Inquisitor Eisenhorn", 1, 14, 65);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Inquisitor Greyfax");
                  echo_html_unit_model("Inquisitor Greyfax", 1, 14, 65);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Inquisitor Karamazov");
                  echo_html_unit_model("Inquisitor Karamazov", 1, 12, 130);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Lord Inquisitor Kyria Draxus");
                  echo_html_unit_model("Lord Inquisitor Kyria Draxus", 1, 14, 75);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Rogue Trader Entourage");
                  echo_html_unit_model("Rogue Trader Entourage", 4, 12, 105);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Subductor Squad");
                  echo_html_unit_model("Subductor Squad", 10, 4, 110);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Vigiliant Squad");
                  echo_html_unit_model("Vigiliant Squad", 10, 4, 105);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Vindicare Assassin");
                  echo_html_unit_model("Vindicare Assassin", 1, 14, 80);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Voidsmen-at-Arms");
                  echo_html_unit_model("Voidsmen-at-Arms", 5, 14, 50);
                  echo_html_unit_model("Voidsmen-at-Arms", 10, 10, 100);
                  echo_html_unit_end();
                  
                  
                  ?>
                </ul>
                </form>
                
                
            </div>
            <div class="pad"></div>
        </div>
    </body>
</html>