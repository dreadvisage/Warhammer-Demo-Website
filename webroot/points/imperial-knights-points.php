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
    <title>Imperial Knights</title>
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

            <h2>Imperial Knights</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Armiger Helverin", 1, 12, 150);

                    Builder::echoUnit("Armoger Warglaive", 1, 12, 150);

                    Builder::echoUnit("Canis Rex", 1, 12, 460);

                    Builder::echoUnit("Knight Castellan", 1, 12, 565);

                    Builder::echoUnit("Knight Crusader", 1, 12, 475);

                    Builder::echoUnit("Knight Errant", 1, 12, 430);

                    Builder::echoUnit("Knight Gallant", 1, 12, 400);

                    Builder::echoUnit("Knight Paladin", 1, 12, 450);

                    Builder::echoUnit("Knight Preceptor", 1, 12, 430);

                    Builder::echoUnit("Knight Valiant", 1, 12, 565);

                    Builder::echoUnit("Knight Warden", 1, 12, 480);
                    ?>

                    <h2>Forge World Units</h2>

                    <?php
                    Builder::echoUnit("Acastus Knight Asterius", 1, 12, 840);

                    Builder::echoUnit("Acastus Knight Porphyrion", 1, 12, 745);

                    Builder::echoUnit("Armiger Moirax", 1, 12, 170);

                    Builder::echoUnit("Cerastus Knight Acheron", 1, 12, 445);

                    Builder::echoUnit("Cerastus Knight Atrapos", 1, 12, 440);

                    Builder::echoUnit("Cerastus Knight Castigator", 1, 12, 485);

                    Builder::echoUnit("Cerastus Knight Lancer", 1, 12, 495);

                    Builder::echoUnit("Questoris Knight Magaera", 1, 12, 450);

                    Builder::echoUnit("Questoris Knight Styrix", 1, 12, 490);
                    ?>


                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>