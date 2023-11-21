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
    <title>Grey Knights</title>
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

            <h2>Grey Knights</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Brother-Captain", 1, 14, 90);

                    Builder::echoUnit("Brother-Captain Stern", 1, 14, 90);

                    Builder::echoUnit("Brotherhood Champion", 1, 14, 80);

                    Builder::echoUnit("Brotherhood Chaplain", 1, 14, 75);

                    Builder::echoUnit("Brotherhood Librarian", 1, 12, 100);

                    Builder::echoUnit("Brotherhood Techmarine", 1, 14, 60);

                    Builder::new("Brotherhood Terminator Squad")
                        ->model(5, 12, 210)
                        ->model(10, 10, 420)
                        ->echo();

                    Builder::echoUnit("Castellan Crowe", 1, 14, 75);

                    Builder::echoUnit("Grand Master", 1, 14, 95);

                    Builder::echoUnit("Grand Master in Nemesis Dreadknight", 1, 12, 200);

                    Builder::echoUnit("Grand Master Voldus", 1, 14, 95);

                    Builder::echoUnit("Grey Knights Land Raider", 1, 12, 240);

                    Builder::echoUnit("Grey Knights Land Raider Crusader", 1, 12, 230);

                    Builder::echoUnit("Grey Knights Razorback", 1, 14, 85);

                    Builder::echoUnit("Grey Knights Rhino", 1, 14, 75);

                    Builder::echoUnit("Grey Knights Stormhawk Interceptor", 1, 12, 160);

                    Builder::echoUnit("Grey Knights Stormraven Gunship", 1, 12, 265);

                    Builder::echoUnit("Grey Knights Stormtalon Gunship", 1, 12, 170);

                    Builder::echoUnit("Grey Knights Venerable Dreadnought", 1, 12, 155);

                    Builder::new("Interceptor Squad")
                        ->model(5, 12, 135)
                        ->model(10, 10, 270)
                        ->echo();

                    Builder::echoUnit("Kaldor Draigo", 1, 12, 125);

                    Builder::echoUnit("Nemesis Dreadknight", 1, 12, 185);

                    Builder::new("Paladin Squad")
                        ->model(5, 12, 225)
                        ->model(10, 10, 450)
                        ->echo();

                    Builder::new("Purgation Squad")
                        ->model(5, 12, 135)
                        ->model(10, 10, 270)
                        ->echo();

                    Builder::new("Purifier Squad")
                        ->model(5, 12, 130)
                        ->model(10, 10, 260)
                        ->echo();

                    Builder::echoUnit("Servitors", 4, 14, 50);

                    Builder::new("Strike Squad")
                        ->model(5, 12, 125)
                        ->model(10, 10, 250)
                        ->echo();
                    ?>

                    <h2>Forge World Units</h2>

                    <?php
                    Builder::echoUnit("Grey Knights Thunderhawk Gunship", 1, 12, 805);

                    Builder::echoUnit("Land Raider Banisher", 1, 12, 255);
                    ?>


                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>