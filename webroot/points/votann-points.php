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
  <title>Leagues of Votann</title>
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
      <h2>Leagues of Votann</h2>
      <hr>

      <form action="db/insert-into-unit-table.php" method="post">
        <input id="name" type="hidden" name="name" value="">
        <input id="models" type="hidden" name="models" value="">
        <input id="points" type="hidden" name="points" value="">
        <ul class="points-list">
          <?php
          Builder::echoUnit("Brôkhy Iron-master", 5, 14, 65);

          Builder::new("Brôkhy Thunderkyn")
            ->model(3, 14, 75)
            ->model(6, 12, 150)
            ->echo();

          Builder::new("Cthonian Beserks")
            ->model(5, 12, 100)
            ->model(10, 10, 200)
            ->echo();

          Builder::echoUnit("Einhyr Champion", 1, 14, 60);

          Builder::new("Einhyr Hearthguard")
            ->model(5, 12, 150)
            ->model(10, 10, 300)
            ->echo();

          Builder::echoUnit("Grimnyr", 3, 14, 65);

          Builder::echoUnit("Hearthkyn Warriors", 5, 12, 110);

          Builder::echoUnit("Hekaton Land Fortress", 1, 12, 225);

          Builder::new("Hernkyn Pioneers")
            ->model(3, 14, 90)
            ->model(6, 12, 180)
            ->echo();

          Builder::echoUnit("Kâhl", 1, 14, 70);

          Builder::echoUnit("Sagitaur", 1, 12, 100);

          Builder::echoUnit("Ûthar the Destined", 1, 14, 90);

          ?>
        </ul>
      </form>


    </div>
    <div class="pad"></div>
  </div>
</body>

</html>