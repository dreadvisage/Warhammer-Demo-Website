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
/* https://markusurban.medium.com/how-to-execute-a-php-script-without-reloading-the-page-a88507fa1ab9 */


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adepta Sororitas</title>
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
          <h2>Adepta Sororitas</h2>
          <hr>

          <form action="insert-into-unit-table.php" method="post">
            <input id="unit-name" type="hidden" name="unit-name" value="">
            <input id="num-models" type="hidden" name="num-models" value="">
            <input id="unit-points" type="hidden" name="unit-points" value="">

            <ul style = "list-style: none; color:darkred">
              <?php 
              echo_html_unit("Aestred Thruga and Agathae Dolan", 2, 14, 55); 

              echo_html_unit_start("Arco-flagellants");
              echo_html_unit_model("Arco-flagellants", 3, 14, 40);
              echo_html_unit_model("Arco-flagellants", 10, 10, 130);
              echo_html_unit_end();

              echo_html_unit("Battle Sisters Squad", 10, 10, 100);

              echo_html_unit("Canoness", 1, 14, 50);

              echo_html_unit("Castigator", 1, 12, 140);

              echo_html_unit_start("Celestian Sacresants");
              echo_html_unit_model("Celestian Sacresants", 5, 14, 65);
              echo_html_unit_model("Celestian Sacresants", 10, 10, 130);
              echo_html_unit_end();

              echo_html_unit_start("Crusaders");
              echo_html_unit_model("Crusaders", 2, 14, 25);
              echo_html_unit_model("Crusaders", 4, 14, 50);
              echo_html_unit_model("Crusaders", 6, 14, 75);
              echo_html_unit_end();

              echo_html_unit("Daeminfuge", 2, 14, 80);

              echo_html_unit_start("Death Cult Assassins");
              echo_html_unit_model("Death Cult Assassins", 2, 14, 35);
              echo_html_unit_model("Death Cult Assassins", 4, 14, 70);
              echo_html_unit_model("Death Cult Assassins", 6, 12, 105);
              echo_html_unit_end();

              echo_html_unit("Dialogus", 1, 14, 30);

              echo_html_unit("Dogmata", 1, 14, 45);

              echo_html_unit("Dominion Squad", 10, 10, 120);

              echo_html_unit("Exorcist", 1, 12, 160);

              echo_html_unit("Hospitaller", 1, 14, 35);

              echo_html_unit("Imagifier", 1, 14, 35);

              echo_html_unit("Immolator", 1, 12, 115);

              echo_html_unit("Junith Eruita", 1, 14, 90);

              echo_html_unit("Missionary", 1, 14, 30);

              echo_html_unit_start("Mortifiers");
              echo_html_unit_model("Mortifiers", 1, 14, 60);
              echo_html_unit_model("Mortifiers", 2, 12, 120);
              echo_html_unit_end();

              echo_html_unit("Morvenn Vahl", 1, 12, 125);

              echo_html_unit("Palatine", 1, 14, 50);

              echo_html_unit("Paragon Warsuits", 3, 14, 200);

              echo_html_unit_start("Penitent Engines");
              echo_html_unit_model("Penitent Engines", 1, 14, 60);
              echo_html_unit_model("Penitent Engines", 2, 12, 120);
              echo_html_unit_end();

<<<<<<< HEAD
              echo_html_unit("Paragon Warsuits", 1, 14, 40);

              echo_html_unit("Repentia Squad", 5, 12, 115);
              ?>

            </ul>
          </form>
=======
                    <li>Repentia Squad</li>
                    <ul style = "color:black">
                      <li>5 models............115 pts <button type="button">➕</button></li>
                    </ul>

                    <li>Saint Celestine</li>
                    <ul style = "color:black">
                      <li>3 models............135 pts <button type="button">➕</button></li>
                    </ul>

                    <li>Seraphim Squad</li>
                    <ul style = "color:black">
                      <li>5 models..............70 pts <button type="button">➕</button></li>
                      <li>10 models..........140 pts <button type="button">➕</button></li>
                    </ul>

                    <li>Sisters Notivate Squad</li>
                    <ul style = "color:black">
                      <li>10 models............85 pts <button type="button">➕</button></li>
                    </ul>

                    <li>Sororitas Rhino</li>
                    <ul style = "color:black">
                      <li>1 models..............75 pts <button type="button">➕</button></li>
                    </ul>

                    <li>Triumph of Saint Katherine</li>
                    <ul style = "color:black">
                      <li>1 models............125 pts <button type="button">➕</button></li>
                    </ul>

                    <li>Zephyrim Squad</li>
                    <ul style = "color:black">
                      <li>5 models..............70 pts <button type="button">➕</button></li>
                      <li>10 models..........140 pts <button type="button">➕</button></li>
                    </ul>
                </ul>
            </div>
            <div class="pad"></div>
>>>>>>> sethsBranch
        </div>
        <div class="pad"></div>
      </div>
    </body>
</html>