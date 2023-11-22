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
    <title>T'au Empire</title>
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

            <h2>T'au Empire</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Aun'Shi", 1, 14, 95);

                    Builder::echoUnit("Aun'Va", 3, 14, 65);

                    Builder::echoUnit("Breacher Team", 10, 12, 90);

                    Builder::new("Broadside Battlesuits")
                        ->model(1, 14, 90)
                        ->model(2, 12, 180)
                        ->model(3, 12, 270)
                        ->echo();
                    
                    Builder::echoUnit("Cadre Fireblade", 1, 14, 40);

                    Builder::echoUnit("Commander Farsight", 1, 14, 90);

                    Builder::echoUnit("Commander in Coldstar Battlesuit", 1, 12, 110);

                    Builder::echoUnit("Commander in Crisis Battlesuit", 1, 14, 90);

                    Builder::echoUnit("Commander in Enforcer Battlesuit", 1, 12, 100);

                    Builder::echoUnit("Commander Shadowsun", 1, 12, 100);

                    Builder::new("Crisis Battlesuits")
                        ->model(3, 12, 180)
                        ->model(6, 12, 360)
                        ->echo();

                    Builder::echoUnit("Darkstrider", 1, 14, 60);

                    Builder::echoUnit("Devilfish", 1, 14, 75);

                    Builder::echoUnit("Ethereal", 1, 14, 50);

                    Builder::echoUnit("Firesight Team", 1, 14, 70);

                    Builder::echoUnit("Ghostkeel Battlesuit", 1, 12, 160);

                    Builder::echoUnit("Hammerhead Gunship", 1, 12, 130);

                    Builder::new("Kroot Carnivores")
                        ->model(10, 12, 55)
                        ->model(20, 10, 110)
                        ->echo();

                    Builder::echoUnit("Kroot Farstalkers", 12, 12, 70);

                    Builder::new("Kroot Hounds")
                        ->model(4, 14, 30)
                        ->model(8, 14, 60)
                        ->model(12, 12, 90)
                        ->echo();

                    Builder::echoUnit("Kroot Shaper", 1, 14, 40);

                    Builder::new("Krootox Riders")
                        ->model(1, 14, 35)
                        ->model(2, 14, 70)
                        ->model(3, 12, 105)
                        ->echo();

                    Builder::echoUnit("Longstrike", 1, 12, 140);

                    Builder::echoUnit("Pathfinder Team", 10, 12, 90);

                    Builder::new("Piranhas")
                        ->model(1, 14, 55)
                        ->model(2, 12, 110)
                        ->model(3, 12, 165)
                        ->echo();

                    Builder::echoUnit("Razorshark Strike Fighter", 1, 12, 165);

                    Builder::echoUnit("Riptide Battlesuit", 1, 12, 180);

                    Builder::echoUnit("Sky Ray Gunship", 1, 12, 130);

                    Builder::new("Stealth Battlesuits")
                        ->model(3, 14, 60)
                        ->model(6, 12, 120)
                        ->echo();

                    Builder::echoUnit("Stormsurge", 1, 12, 400);

                    Builder::echoUnit("Strike Team", 10, 12, 80);

                    Builder::echoUnit("Sun Shark Bomber", 1, 12, 150);

                    Builder::new("Tactical Drones")
                        ->model(4, 14, 70)
                        ->model(8, 12, 140)
                        ->model(12, 10, 210)
                        ->echo();

                    Builder::echoUnit("Tidewall Droneport", 1, 14, 85);

                    Builder::echoUnit("Tidewall Gunrig", 1, 14, 90);

                    Builder::new("Tidewall Shieldline")
                        ->model(1, 14, 85)
                        ->modelCustom("Tidewall Defence Platform", 5, +20)
                        ->echo();

                    Builder::echoUnit("Vespid Stingwings", 5, 14, 75);
                    ?>

                    <h2>Forge World Units</h2>

                    <?php
                    Builder::echoUnit("AX-1-0 Tiger Shark", 1, 12, 315);

                    Builder::echoUnit("Barracuda", 1, 12, 220);

                    Builder::echoUnit("Manta", 1, 10, 2100);

                    Builder::echoUnit("Remora Stealth Drones", 1, 12, 160);

                    Builder::echoUnit("R'varna Battlesuit", 1, 12, 200);

                    Builder::echoUnit("Ta'unar Supremacy Armour", 1, 12, 790);

                    Builder::new("Tetras")
                        ->model(2, 14, 80)
                        ->model(4, 12, 160)
                        ->echo();

                    Builder::echoUnit("Tiger Shark", 1, 12, 275);

                    Builder::echoUnit("Y'vahra Battlesuit", 1, 12, 210);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>