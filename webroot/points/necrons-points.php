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
    <title>Necrons</title>
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

            <h2>Necrons</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Annihilation Barge", 1, 12, 115);
                    
                    Builder::echoUnit("Anrakyr the Traveller", 1, 14, 95);

                    Builder::echoUnit("C'tan Shard of the Deciever", 1, 12, 265);

                    Builder::echoUnit("C'tan Shard of the Nightbringer", 1, 12, 255);

                    Builder::echoUnit("C'tan Shard of the Void Dragon", 1, 12, 270);

                    Builder::echoUnit("Canoptek Doomstalker", 1, 12, 135);

                    Builder::echoUnit("Canopteke Reanimator", 1, 12, 105);

                    Builder::new("Canoptek Scarab Swarms")
                        ->model(3, 14, 40)
                        ->model(6, 14, 80)
                        ->echo();

                    Builder::new("Canoptek Spyders")
                        ->model(1, 14, 75)
                        ->model(2, 12, 150)
                        ->echo();

                    Builder::new("Canoptek Wraiths")
                        ->model(3, 12, 110)
                        ->model(6, 12, 220)
                        ->echo();

                    Builder::echoUnit("Chronomancer", 1, 14, 50);

                    Builder::echoUnit("Convergence of Dominion", 3, 12, 255);

                    Builder::echoUnit("Cryptothralls", 2, 14, 60);

                    Builder::new("Deathmarks")
                        ->model(5, 14, 65)
                        ->model(10, 10, 130)
                        ->echo();

                    Builder::echoUnit("Doom Scythe", 1, 12, 225);

                    Builder::echoUnit("Doomsday Ark", 1, 12, 210);

                    Builder::new("Flayed Ones")
                        ->model(5, 14, 70)
                        ->model(10, 10, 140)
                        ->echo();

                    Builder::echoUnit("Ghost Ark", 1, 12, 125);

                    Builder::echoUnit("Hexmark Destroyer", 1, 14, 80);

                    Builder::echoUnit("Illuminor Szeras", 1, 12, 185);

                    Builder::new("Immortals")
                        ->model(5, 14, 70)
                        ->model(10, 10, 140)
                        ->echo();

                    Builder::echoUnit("Imotekh the Stormlord", 1, 12, 100);

                    Builder::new("Lokhust Destroyers")
                        ->model(1, 14, 30)
                        ->model(2, 14, 60)
                        ->model(3, 14, 90)
                        ->model(6, 12, 180)
                        ->echo();

                    Builder::new("Lokhust Heavy Destroyers")
                        ->model(1, 14, 50)
                        ->model(2, 12, 100)
                        ->model(3, 12, 150)
                        ->echo();

                    Builder::echoUnit("Lokhust Lord", 1, 14, 80);

                    Builder::echoUnit("Lord", 1, 14, 65);

                    Builder::new("Lychguard")
                        ->model(5, 12, 115)
                        ->model(10, 10, 230)
                        ->echo();

                    Builder::echoUnit("Monolith", 1, 12, 350);

                    Builder::new("Necron Warriors")
                        ->model(10, 10, 110)
                        ->model(20, 10, 220)
                        ->echo();

                    Builder::echoUnit("Nemesor Zahndrekh", 1, 14, 85);

                    Builder::echoUnit("Night Scythe", 1, 12, 145);

                    Builder::echoUnit("Obelisk", 1, 12, 325);

                    Builder::new("Ophydian Destroyers")
                        ->model(3, 12, 100)
                        ->model(6, 12, 200)
                        ->echo();

                    Builder::echoUnit("Orikan the Diviner", 1, 14, 80);

                    Builder::echoUnit("Overlord", 1, 14, 85);

                    Builder::echoUnit("Plasmancer", 1, 14, 55);

                    Builder::echoUnit("Psychomancer", 1, 14, 50);

                    Builder::echoUnit("Royal Warden", 1, 14, 40);

                    Builder::new("Skorpekh Destroyers")
                        ->model(3, 12, 100)
                        ->model(6, 12, 200)
                        ->echo();

                    Builder::echoUnit("Skorpekh Lord", 1, 12, 100);

                    Builder::echoUnit("Technomancer", 1, 14, 60);

                    Builder::echoUnit("Tesseract Vault", 1, 12, 375);

                    Builder::echoUnit("The Silent King", 3, 12, 420);

                    Builder::new("Tomb Blades")
                        ->model(3, 14, 80)
                        ->model(6, 12, 160)
                        ->echo();

                    Builder::echoUnit("Transcendent C'tan", 1, 12, 300);

                    Builder::echoUnit("Trazyn the Infinite", 1, 14, 75);

                    Builder::new("Triarch Praetorians")
                        ->model(5, 12, 120)
                        ->model(10, 10, 240)
                        ->echo();

                    Builder::echoUnit("Triarch Stalker", 1, 12, 125);

                    Builder::echoUnit("Vargard Obyron", 1, 14, 85);
                    ?>

                    <h2>Forge World Units</h2>

                    <?php

                    Builder::new("Canoptek Acanthrites")
                        ->model(3, 14, 85)
                        ->model(6, 12, 170)
                        ->echo();

                    Builder::echoUnit("Canoptek Tomb Sentinel", 1, 12, 115);

                    Builder::echoUnit("Canoptek Tomb Stalker", 1, 12, 130);

                    Builder::echoUnit("Seraptek Heavy Construct", 1, 12, 540);

                    Builder::echoUnit("Tesseract Ark", 1, 12, 130);
                    ?>


                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>