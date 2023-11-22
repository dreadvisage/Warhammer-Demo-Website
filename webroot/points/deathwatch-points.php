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
    <title>Deathwatch</title>
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

            <h2>Deathwatch</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Corvus Blackstar", 1, 12, 180);

                    Builder::new("Deathwatch Terminator Squad")
                        ->model(5, 12, 210)
                        ->model(10, 10, 420)
                        ->echo();

                    Builder::new("Deathwatch Veterans")
                        ->model(5, 12, 110)
                        ->model(10, 10, 220)
                        ->echo();

                    Builder::new("Fortis Kill Team")
                        ->model(5, 12, 115)
                        ->model(10, 10, 230)
                        ->echo();

                    Builder::new("Indomitor Kill Team")
                        ->model(5, 12, 135)
                        ->model(10, 10, 270)
                        ->echo();

                    Builder::echoUnit("Kill Team Cassius", 11, 10, 255);

                    Builder::new("Proteus Kill Team")
                        ->model(5, 12, 180)
                        ->model(10, 10, 360)
                        ->echo();

                    Builder::new("Spectrus Kill Team")
                        ->model(5, 12, 105)
                        ->model(10, 10, 210)
                        ->echo();

                    Builder::new("Veteran Bike Squad")
                        ->model(3, 14, 80)
                        ->model(6, 12, 160)
                        ->echo();

                    Builder::echoUnit("Watch Captain Artemis", 1, 14, 75);

                    Builder::echoUnit("Watch Master", 1, 12, 115);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>