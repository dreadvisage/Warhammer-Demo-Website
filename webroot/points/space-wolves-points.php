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
    <title>Space Wolves</title>
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

            <h2>Space Wolves</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Arjac Rockfist", 1, 14, 95);

                    Builder::echoUnit("Bjorn the Fell-Handed", 1, 12, 180);

                    Builder::new("Blood Claws")
                        ->model(10, 10, 140)
                        ->model(15, 10, 210)
                        ->echo();
                    
                    Builder::echoUnit("Canis Wolfborn", 1, 14, 75);

                    Builder::echoUnit("Cyberwolf", 1, 14, 20);

                    Builder::new("Fenisian Wolves")
                        ->model(5, 14, 30)
                        ->model(10, 12, 60)
                        ->echo();

                    Builder::new("Grey Hunters")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::echoUnit("Harald Deathwolf", 1, 14, 85);

                    Builder::new("Hounds of Morkai")
                        ->model(5, 14, 90)
                        ->model(10, 10, 180)
                        ->echo();

                    Builder::echoUnit("Iron Priest", 1, 14, 60);

                    Builder::echoUnit("Krom Dragongaze", 1, 14, 65);

                    Builder::echoUnit("Logan Grimnar", 1, 12, 100);

                    Builder::echoUnit("Logan Grimnar on Stormrider", 1, 12, 180);

                    Builder::new("Long Fangs")
                        ->model(5, 12, 150)
                        ->model(6, 12, 180)
                        ->echo();

                    Builder::echoUnit("Lukas the Trickster", 1, 14, 50);

                    Builder::echoUnit("Murderfang", 1, 12, 170);

                    Builder::echoUnit("Njal Stormcaller", 1, 14, 85);

                    Builder::echoUnit("Ragnar Blackmane", 1, 14, 90);

                    Builder::new("Skyclaws")
                        ->model(5, 14, 90)
                        ->model(10, 10, 180)
                        ->model(15, 10, 270)
                        ->echo();

                    Builder::echoUnit("Space Wolves Venerable Dreadnought", 1, 12, 155);

                    Builder::echoUnit("Stormfang Gunship", 1, 12, 300);

                    Builder::echoUnit("Stormwolf", 1, 12, 250);

                    Builder::new("Thunderwolf Cavalry")
                        ->model(3, 14, 90)
                        ->model(6, 12, 180)
                        ->echo();

                    Builder::echoUnit("Ulrik the Slayer", 1, 14, 70);

                    Builder::new("Wolf Guard")
                        ->model(5, 14, 95)
                        ->model(10, 10, 190)
                        ->echo();

                    Builder::echoUnit("Wolf Guard Battle Leader in Terminator Armour", 1, 14, 75);

                    Builder::echoUnit("Wolf Guard Battle Leader on Thunderwolf", 1, 14, 80);

                    Builder::echoUnit("Wolf Guard Pack Leader", 1, 14, 30);

                    Builder::echoUnit("Wolf Guard Pack Leader in Terminator Armour", 1, 14, 40);

                    Builder::echoUnit("Wolf Guard Pack Leader with Jump Pack", 1, 14, 35);

                    Builder::new("Wolf Guard Terminators")
                        ->model(5, 12, 195)
                        ->model(10, 10, 390)
                        ->echo();

                    Builder::echoUnit("Wolf Lord on Thunderwolf", 1, 12, 100);

                    Builder::new("Wolf Scouts")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::new("Wulfen")
                        ->model(5, 14, 80)
                        ->model(10, 10, 160)
                        ->echo();

                    Builder::echoUnit("Wulfen Dreadnought", 1, 12, 130);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>