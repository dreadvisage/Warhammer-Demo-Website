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
    <title>Chaos Space Marines</title>
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

            <h2>Chaos Space Marines</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">

                    <?php
                    Builder::echoUnit("Abaddon the Despoiler", 1, 12, 310);

                    Builder::new("Accursed Cultists")
                        ->model(8, 14, 95)
                        ->model(16, 10, 190)
                        ->echo();

                    Builder::new("Chaos Bikers")
                        ->model(3, 14, 85)
                        ->model(6, 12, 170)
                        ->echo();

                    Builder::echoUnit("Chaos Land Raider", 1, 12, 240);

                    Builder::echoUnit("Chaos Lord", 1, 14, 75);

                    Builder::echoUnit("Chaos Lord in Terminator Armour", 1, 14, 95);

                    Builder::echoUnit("Chaos Predator Annihilator", 1, 12, 130);

                    Builder::echoUnit("Chaos Predator Destructor", 1, 12, 130);

                    Builder::echoUnit("Chaos Rhino", 1, 14, 75);

                    Builder::echoUnit("Chaos Spawn", 1, 14, 70);

                    Builder::new("Chaos Terminator Squad")
                        ->model(5, 12, 195)
                        ->model(10, 10, 390)
                        ->echo();

                    Builder::echoUnit("Chaos Vindicator", 1, 12, 190);

                    Builder::new("Chosen")
                        ->model(5, 12, 110)
                        ->model(10, 10, 220)
                        ->echo();

                    Builder::new("Cultist Mob")
                        ->model(10, 12, 55)
                        ->model(20, 10, 110)
                        ->echo();

                    Builder::echoUnit("Cypher", 1, 12, 105);

                    Builder::echoUnit("Dark Apostle", 3, 14, 75);

                    Builder::echoUnit("Dark Commune", 5, 14, 55);

                    Builder::echoUnit("Defiler", 1, 12, 190);

                    Builder::echoUnit("Exalted Champion", 1, 14, 70);

                    Builder::echoUnit("Fabius Bile", 2, 14, 85);

                    Builder::echoUnit("Fellgor Beastmen", 10, 12, 95);

                    Builder::echoUnit("Forgefiend", 1, 12, 180);

                    Builder::echoUnit("Haarken Worldclaimer", 1, 14, 90);

                    Builder::echoUnit("Havocs", 5, 12, 135);

                    Builder::echoUnit("Helbrute", 1, 12, 140);

                    Builder::echoUnit("Heldrake", 1, 12, 205);

                    Builder::echoUnit("Heretic Astartes Daemon Prince", 1, 12, 180);

                    Builder::echoUnit("Heretic Astartes Daemon Prince with Wings", 1, 12, 195);

                    Builder::echoUnit("Huron Blackheart", 1, 14, 80);

                    Builder::echoUnit("Khorne Lord of Skulls", 1, 12, 480);

                    Builder::new("Legionaries")
                        ->model(5, 14, 90)
                        ->model(10, 10, 180)
                        ->echo();

                    Builder::echoUnit("Lord Discordant on Helstalker", 1, 12, 190);

                    Builder::echoUnit("Lucius the Eternal", 1, 14, 95);

                    Builder::echoUnit("Master of Executions", 1, 14, 80);

                    Builder::echoUnit("Master of Possession", 1, 14, 80);

                    Builder::echoUnit("Maulerfiend", 1, 12, 155);

                    Builder::echoUnit("Noctilith Crown", 1, 12, 125);

                    Builder::new("Noise Marines")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::new("Obliterators")
                        ->model(2, 12, 170)
                        ->model(4, 12, 340)
                        ->echo();

                    Builder::new("Possessed")
                        ->model(5, 12, 140)
                        ->model(10, 10, 280)
                        ->echo();

                    Builder::new("Raptors")
                        ->model(5, 14, 90)
                        ->model(10, 10, 180)
                        ->echo();

                    Builder::echoUnit("Sorcerer", 1, 14, 60);

                    Builder::echoUnit("Sorcerer in Terminator Armour", 1, 14, 90);

                    Builder::echoUnit("Traitor Enforcer", 2, 14, 65);

                    Builder::echoUnit("Traitor Guardsmen Squad", 10, 12, 70);

                    Builder::echoUnit("Vashtorr the Arkifane", 1, 12, 190);

                    Builder::echoUnit("Venomcrawler", 1, 12, 120);

                    Builder::new("Warp Talons")
                        ->model(5, 12, 100)
                        ->model(10, 10, 200)
                        ->echo();

                    Builder::echoUnit("Warpsmith", 1, 14, 70);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>