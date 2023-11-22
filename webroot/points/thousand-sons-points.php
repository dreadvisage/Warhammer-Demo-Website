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
    <title>Thousand Sons</title>
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

            <h2>Thousands Sons</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Ahriman", 1, 12, 130);

                    Builder::echoUnit("Ahriman on Disc of Tzeentch", 3, 12, 140);

                    Builder::echoUnit("Exalted Sorcerer", 1, 12, 100);
                    
                    Builder::echoUnit("Exalted Sorcerer on Disc of Tzeentch", 1, 12, 115);

                    Builder::echoUnit("Infernal Master", 1, 14, 90);

                    Builder::echoUnit("Magnus the Red", 1, 12, 440);

                    Builder::echoUnit("Mutalith Vortex Beast", 1, 12, 165);

                    Builder::new("Rubric Marines")
                        ->model(5, 12, 105)
                        ->model(10, 10, 210)
                        ->echo();

                    Builder::new("Scarab Occult Terminators")
                        ->model(5, 12, 215)
                        ->model(10, 10, 430)
                        ->echo();

                    Builder::echoUnit("Thousand Sons Chaos Spawn", 1, 14, 65);

                    Builder::new("Thousand Sons Cultists")
                        ->model(10, 12, 60)
                        ->model(20, 10, 120)
                        ->echo();

                    Builder::echoUnit("Thousand Sons Daemon Prince", 1, 12, 180);

                    Builder::echoUnit("Thousand Sons Daemon Prince with Wings", 1, 12, 195);

                    Builder::echoUnit("Thousand Sons Defiler", 1, 12, 190);

                    Builder::echoUnit("Thousand Sons Forgefiend", 1, 12, 135);

                    Builder::echoUnit("Thousand Sons Helbrute", 1, 12, 145);

                    Builder::echoUnit("Thousand Sons Heldrake", 1, 12, 195);

                    Builder::echoUnit("Thousand Sons Land Raider", 1, 12, 240);

                    Builder::echoUnit("Thousand Sons Maulerfiend", 1, 12, 155);

                    Builder::echoUnit("Thousand Sons Predator Annihilator", 1, 12, 130);

                    Builder::echoUnit("Thousand Sons Predator Destructor", 1, 12, 130);

                    Builder::echoUnit("Thousand Sons Rhino", 1, 14, 75);

                    Builder::echoUnit("Thousand Sons Sorcerer", 1, 14, 95);

                    Builder::echoUnit("Thousand Sons Sorcerer in Terminator Armour", 1, 12, 115);

                    Builder::echoUnit("Thousand Sons Vindicator", 1, 12, 190);

                    Builder::new("Tzaangor Enlightened")
                        ->model(3, 14, 45)
                        ->model(6, 14, 90)
                        ->echo();

                    Builder::echoUnit("Tzaangor Shaman", 1, 14, 60);

                    Builder::new("Tzaangors")
                        ->model(10, 12, 65)
                        ->model(20, 10, 130)
                        ->echo();
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>