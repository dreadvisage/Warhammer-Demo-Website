<?php
$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";
require_once $is_logged_in_path;

require_once "db/insert-into-unit-table.php";

$create_unit_helper_path = $_SERVER['DOCUMENT_ROOT'];
$create_unit_helper_path .= "/project/../utils/create-unit-helper.php";
require_once $create_unit_helper_path;

require '../../utils/navbar.php';

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
    <title>Astra Militarum</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/article-section.css">
    <link rel="stylesheet" href="../css/article-contents.css">
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

            <h2>Astra Militarum</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Aegis Defence Line", 1, 12, 145);

                    Builder::new("Armoured Sentinels")
                        ->model(1, 14, 70)
                        ->model(2, 12, 140)
                        ->model(3, 12, 210)
                        ->echo();

                    Builder::new("Attilan Rough Riders")
                        ->model(5, 14, 70)
                        ->model(10, 10, 140)
                        ->echo();

                    Builder::echoUnit("Baneblade", 1, 12, 480);

                    Builder::echoUnit("Banehammer", 1, 12, 450);

                    Builder::echoUnit("Banesword", 1, 12, 480);

                    Builder::echoUnit("Basilisk", 1, 12, 135);

                    Builder::new("Bullgryn Squad")
                        ->model(3, 14, 80)
                        ->model(6, 12, 160)
                        ->echo();

                    Builder::echoUnit("Cadian Castellan", 1, 14, 45);

                    Builder::echoUnit("Cadian Command Squad", 5, 14, 65);

                    Builder::new("Cadian Shock Troops")
                        ->model(10, 12, 55)
                        ->model(20, 10, 110)
                        ->echo();

                    Builder::echoUnit("Chimera", 5, 14, 70);

                    Builder::echoUnit("Commissar", 1, 14, 30);

                    Builder::new("Death Korps of Krieg")
                        ->model(10, 12, 65)
                        ->model(20, 10, 130)
                        ->echo();

                    Builder::echoUnit("Deathstrike", 1, 12, 160);

                    Builder::echoUnit("Doomhammer", 1, 12, 455);

                    Builder::echoUnit("Field Ordnance Battery", 2, 12, 120);

                    Builder::echoUnit("Gaunt's Ghosts", 6, 12, 100);

                    Builder::echoUnit("Heavy Weapons Squad", 3, 14, 60);

                    Builder::echoUnit("Hellhammer", 1, 12, 450);

                    Builder::echoUnit("Hellhound", 1, 12, 125);

                    Builder::echoUnit("Hydra", 1, 14, 95);

                    Builder::new("Infantry Squad")
                        ->modelCustom("9-10 models", 9, "60")
                        ->modelCustom("18-20 models", 5, "120")
                        ->echo();

                    Builder::echoUnit("'Iron Hand' Straken", 1, 14, 55);

                    Builder::echoUnit("Kasrkin", 10, 10, 100);

                    Builder::echoUnit("Leman Russ Battle Tank", 1, 12, 180);

                    Builder::echoUnit("Leman Russ Demolisher", 1, 12, 200);

                    Builder::echoUnit("Leman Russ Eradicator", 1, 12, 160);

                    Builder::echoUnit("Leman Russ Executioner", 1, 12, 180);

                    Builder::echoUnit("Leman Russ Exterminator", 1, 12, 180);

                    Builder::echoUnit("Leman Russ Punisher", 1, 12, 160);

                    Builder::echoUnit("Leman Russ Vanquisher", 1, 12, 155);

                    Builder::echoUnit("Lord Solar Leontus", 1, 12, 125);

                    Builder::echoUnit("Manticore", 1, 12, 150);

                    Builder::echoUnit("Militarum Tempestus Command Squad", 1, 14, 80);

                    Builder::echoUnit("Munitorum Servitors", 4, 14, 35);

                    Builder::echoUnit("Nork Deddog", 1, 14, 60);

                    Builder::echoUnit("Ogryn Bodyguard", 1, 14, 40);

                    Builder::new("Ogryn Squad")
                        ->model(3, 14, 65)
                        ->model(6, 12, 130)
                        ->echo();

                    Builder::echoUnit("Platoon Command Squad", "4-5", 11, 60);

                    Builder::echoUnit("Primaris Psyker", 1, 14, 60);

                    Builder::echoUnit("Ratling Snipers", 5, 14, 60);

                    Builder::echoUnit("Regimental Attachés", 3, 14, 40);

                    Builder::echoUnit("Regimental Enginseer", 1, 14, 45);

                    Builder::echoUnit("Regimental Preacher", 1, 14, 35);

                    Builder::echoUnit("Rogal Dorn Battle Tank", 1, 12, 260);

                    Builder::new("Scout Sentinels")
                        ->model(1, 14, 60)
                        ->model(2, 12, 120)
                        ->model(3, 12, 180)
                        ->echo();

                    Builder::echoUnit("Sergeant Harker", 1, 14, 40);

                    Builder::echoUnit("Shadowsword", 1, 12, 440);

                    Builder::echoUnit("Sly Marbo", 1, 14, 65);

                    Builder::echoUnit("Stormlord", 1, 12, 460);

                    Builder::echoUnit("Stormsword", 1, 12, 495);

                    Builder::echoUnit("Tank Commander", 1, 12, 205);

                    Builder::echoUnit("Taurox", 1, 14, 65);

                    Builder::echoUnit("Taurox Prime", 1, 14, 90);

                    Builder::new("Tempestus Scions")
                        ->model(5, 14, 55)
                        ->model(10, 10, 110)
                        ->echo();

                    Builder::echoUnit("Ursula Creed", 1, 14, 55);

                    Builder::echoUnit("Valkyrie", 1, 12, 190);

                    Builder::echoUnit("Wyvern", 1, 12, 110);
                    ?>

                    <h2>Forge World Units</h2>

                    <?php
                    Builder::echoUnit("Avenger Strike Force", 1, 12, 130);

                    Builder::echoUnit("Carnodon", 1, 12, 160);

                    Builder::echoUnit("Colossus", 1, 12, 160);

                    Builder::echoUnit("Crassus", 1, 12, 180);

                    Builder::echoUnit("Cyclops Demolition Vehicle", 1, 14, 25);

                    Builder::echoUnit("Death Korps Marshal", 1, 14, 60);

                    Builder::new("Death Rider Squadron")
                        ->model(5, 14, 70)
                        ->model(10, 10, 140)
                        ->echo();

                    Builder::echoUnit("Death Rider Squadron Commander", 1, 14, 60);

                    Builder::echoUnit("Earthshaker Carriage Battery", 1, 12, 120);

                    Builder::echoUnit("Hades Breaching Drill", 1, 12, 110);

                    Builder::echoUnit("Macharius", 1, 12, 310);

                    Builder::echoUnit("Macharius Vanquisher", 1, 12, 285);

                    Builder::echoUnit("Macharius Vulcan", 1, 12, 310);

                    Builder::echoUnit("Malcador", 1, 12, 250);

                    Builder::echoUnit("Malcador Annihilator", 1, 12, 270);

                    Builder::echoUnit("Malcador Defender", 1, 12, 310);

                    Builder::echoUnit("Malcador Infernus", 1, 12, 235);

                    Builder::echoUnit("Marauder Bomber", 1, 12, 345);

                    Builder::echoUnit("Marauder Destroyer", 1, 12, 375);

                    Builder::echoUnit("Marauder Carriage Battery", 1, 14, 60);

                    Builder::echoUnit("Praetor", 1, 12, 275);

                    Builder::new("Rapier Laser Destroyer Battery")
                        ->model(1, 14, 35)
                        ->model(2, 14, 70)
                        ->model(3, 12, 105)
                        ->echo();

                    Builder::echoUnit("Stormblade", 1, 12, 415);

                    Builder::new("Tarantula Battery")
                        ->model(1, 14, 40)
                        ->model(2, 14, 80)
                        ->model(3, 12, 120)
                        ->echo();

                    Builder::echoUnit("Thunderbolt Heavy Fighter", 1, 12, 200);

                    Builder::echoUnit("Trojan Support Vehicle", 1, 14, 80);

                    Builder::echoUnit("Valdor", 1, 12, 285);

                    Builder::echoUnit("Voss-pattern Lightning", 1, 12, 130);

                    Builder::echoUnit("Vulture Gunship", 1, 14, 80);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>