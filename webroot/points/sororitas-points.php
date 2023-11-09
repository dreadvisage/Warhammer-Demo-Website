<?php
session_start();

require '../../utils/navbar.php';

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";
require_once $is_logged_in_path;

$create_unit_helper_path = $_SERVER['DOCUMENT_ROOT'];
$create_unit_helper_path .= "/project/../utils/create-unit-helper.php";
require_once $create_unit_helper_path;


if (isNotLoggedIn()) {
    header("location: ../account/login.php");
    exit;
}

use HtmlUnitEchoBuilder as Builder;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adepta Sororitas</title>
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/article-section.css">
  <link rel="stylesheet" href="../css/points.css">
</head>

<body>
  <div id="background-image"></div>

  <?php
  echoNavbar(1);
  ?>

  <div class="display">
    <div class="pad"></div>
    <div id="article">

      <h2>Adepta Sororitas</h2>
      <hr>

      <form action="db/insert-into-unit-table.php" method="post">
        <input id="name" type="hidden" name="name" value="">
        <input id="models" type="hidden" name="models" value="">
        <input id="points" type="hidden" name="points" value="">

        <ul class="points-list">
          <?php
          Builder::echoUnit("Aestred Thruga and Agathae Dolan", 2, 14, 55);

          Builder::new("Arco-flagellants")
            ->model(3, 14, 40)
            ->model(10, 10, 130)
            ->echo();

          Builder::echoUnit("Battle Sisters Squad", 10, 10, 100);

          Builder::echoUnit("Canoness", 1, 14, 50);

          Builder::echoUnit("Castigator", 1, 12, 140);

          Builder::new("Celestian Sacresants")
            ->model(5, 14, 65)
            ->model(10, 10, 130)
            ->echo();

          Builder::new("Crusaders")
            ->model(2, 14, 25)
            ->model(4, 14, 50)
            ->model(6, 14, 75)
            ->echo();

          Builder::echoUnit("Daeminfuge", 2, 14, 80);

          Builder::new("Death Cult Assassins")
            ->model(2, 14, 35)
            ->model(4, 14, 70)
            ->model(6, 12, 105)
            ->echo();

          Builder::echoUnit("Dialogus", 1, 14, 30);

          Builder::echoUnit("Dogmata", 1, 14, 45);

          Builder::echoUnit("Dominion Squad", 10, 10, 120);

          Builder::echoUnit("Exorcist", 1, 12, 160);

          Builder::echoUnit("Hospitaller", 1, 14, 35);

          Builder::echoUnit("Imagifier", 1, 14, 35);

          Builder::echoUnit("Immolator", 1, 12, 115);

          Builder::echoUnit("Junith Eruita", 1, 14, 90);

          Builder::echoUnit("Missionary", 1, 14, 30);

          Builder::new("Mortifiers")
            ->model(1, 14, 60)
            ->model(2, 12, 120)
            ->echo();

          Builder::echoUnit("Morvenn Vahl", 1, 12, 125);

          Builder::echoUnit("Palatine", 1, 14, 50);

          Builder::echoUnit("Paragon Warsuits", 3, 14, 200);

          Builder::new("Penitent Engines")
            ->model(1, 14, 60)
            ->model(2, 12, 120)
            ->echo();

          Builder::echoUnit("Paragon Warsuits", 1, 14, 40);

          Builder::echoUnit("Repentia Squad", 5, 12, 115);
          ?>

        </ul>
      </form>

    </div>
    <div class="pad"></div>
  </div>
</body>

</html>