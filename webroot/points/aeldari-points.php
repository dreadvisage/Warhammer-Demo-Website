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
    <title>Aeldari</title>
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

            <h2>Aeldari</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Asurmen", 1, 12, 135);

                    Builder::echoUnit("Autarch", 1, 14, 75);

                    Builder::echoUnit("Autarch Skyrunner", 1, 14, 90);

                    Builder::echoUnit("Autarch Wayleaper", 1, 12, 115);

                    Builder::echoUnit("Avatar of Khaine", 1, 12, 335);

                    Builder::echoUnit("Baharroth", 1, 12, 125);

                    Builder::new("Corsair Voidreavers")
                        ->model(5, 14, 70)
                        ->model(10, 10, 140)
                        ->echo();

                    Builder::new("Corsair Voidscarred")
                        ->model(5, 14, 90)
                        ->model(10, 10, 180)
                        ->echo();

                    Builder::echoUnit("Crimson Hunter", 1, 12, 160);

                    Builder::new("Dark Reapers")
                        ->model(5, 14, 80)
                        ->model(10, 10, 160)
                        ->echo();

                    Builder::echoUnit("Death Jester", 1, 14, 90);

                    Builder::new("Dire Avengers")
                        ->model(5, 14, 70)
                        ->model(10, 10, 140)
                        ->echo();

                    Builder::echoUnit("Eldrad Ulthran", 1, 12, 110);

                    Builder::echoUnit("Falcon", 1, 12, 140);

                    Builder::echoUnit("Farseer", 1, 14, 80);

                    Builder::echoUnit("Farseer Skyrunner", 1, 14, 90);

                    Builder::new("Fire Dragon")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::echoUnit("Fire Prism", 1, 12, 180);

                    Builder::echoUnit("Fuegan", 1, 12, 115);

                    Builder::echoUnit("Guardian Defenders", 11, 10, 110);

                    Builder::echoUnit("Hemlock Wraithfighter", 1, 12, 155);

                    Builder::new("Howling Banshees")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::echoUnit("Illic Nightspear", 1, 14, 70);

                    Builder::echoUnit("Jain Zar", 1, 12, 105);

                    Builder::echoUnit("Karandras", 1, 12, 100);

                    Builder::echoUnit("Maugan Ra", 1, 12, 130);

                    Builder::echoUnit("Night Spinner", 1, 12, 180);

                    Builder::echoUnit("Prince Yriel", 1, 12, 100);

                    Builder::new("Rangers")
                        ->model(5, 14, 55)
                        ->model(10, 10, 110)
                        ->echo();

                    Builder::echoUnit("Shadowseer", 1, 14, 60);

                    Builder::new("Shining Spears")
                        ->model(3, 12, 120)
                        ->model(6, 12, 240)
                        ->echo();

                    Builder::new("Shroud Runners")
                        ->model(3, 14, 80)
                        ->model(6, 12, 160)
                        ->echo();

                    Builder::new("Skyweavers")
                        ->model(2, 14, 95)
                        ->model(4, 12, 190)
                        ->echo();

                    Builder::echoUnit("Solitaire", 1, 12, 115);

                    Builder::echoUnit("Spiritseer", 1, 14, 65);

                    Builder::echoUnit("Starweaver", 1, 14, 80);

                    Builder::echoUnit("Storm Guardians", 11, 10, 115);

                    Builder::new("Striking Sqorpions")
                        ->model(5, 14, 75)
                        ->model(10, 10, 150)
                        ->echo();

                    Builder::echoUnit("Support Weapons", 1, 12, 125);

                    Builder::new("Swooping Hawks")
                        ->model(5, 14, 75)
                        ->model(10, 10, 150)
                        ->echo();

                    Builder::echoUnit("The Visarch", 1, 14, 90);

                    Builder::echoUnit("The Yncarnes", 1, 12, 350);

                    Builder::new("Troupe")
                        ->model(5, 14, 75)
                        ->model(6, 14, 90)
                        ->model(11, 10, 165)
                        ->model(12, 10, 180)
                        ->echo();

                    Builder::echoUnit("Troupe Master", 1, 14, 55);

                    Builder::echoUnit("Voidweaver", 1, 12, 125);

                    Builder::echoUnit("Vyper", 1, 14, 85);

                    Builder::echoUnit("War Walker", 1, 12, 110);

                    Builder::echoUnit("Warlock", 1, 14, 45);

                    Builder::new("Warlock Conclave")
                        ->model(2, 14, 60)
                        ->model(4, 12, 120)
                        ->echo();

                    Builder::echoUnit("Warlock Skyrunner", 1, 14, 55);

                    Builder::new("Warlock Skyrunner Conclave")
                        ->model(2, 12, 100)
                        ->model(3, 12, 150)
                        ->echo();

                    Builder::new("Warp Spiders")
                        ->model(5, 12, 115)
                        ->model(10, 10, 230)
                        ->echo();

                    Builder::echoUnit("Wave Serpent", 1, 12, 120);

                    Builder::echoUnit("Webway Gate", 2, 12, 220);

                    Builder::new("Windriders")
                        ->model(3, 14, 80)
                        ->model(6, 12, 160)
                        ->model(9, 12, 240)
                        ->echo();

                    Builder::new("Wraithblades")
                        ->model(5, 12, 170)
                        ->model(10, 10, 340)
                        ->echo();

                    Builder::new("Wraithguard")
                        ->model(5, 12, 170)
                        ->model(10, 10, 340)
                        ->echo();

                    Builder::echoUnit("Wraithknight", 1, 12, 510);

                    Builder::echoUnit("Wraithlord", 1, 12, 160);

                    Builder::echoUnit("Yvraine", 1, 12, 100);
                    ?>

                    <br>
                    <h2>Forge World Units</h2>

                    <?php
                    Builder::echoUnit("Cobra", 1, 12, 415);

                    Builder::echoUnit("Hornet", 1, 12, 100);

                    Builder::echoUnit("Irillyth", 1, 12, 105);

                    Builder::echoUnit("Lynx", 1, 12, 180);

                    Builder::echoUnit("Nightwing", 1, 12, 150);

                    Builder::echoUnit("Scorpion", 1, 12, 410);

                    Builder::echoUnit("Skathach Wraithknight", 1, 12, 490);

                    Builder::new("Shadow Specters")
                        ->model(5, 14, 95)
                        ->model(10, 10, 190)
                        ->modelCustom("Exarch", 16, "+30")
                        ->echo();

                    Builder::echoUnit("Phantom Titan", 1, 10, 2100);

                    Builder::echoUnit("Revenant Titan", 1, 10, 1100);

                    Builder::echoUnit("Warp Hunter", 1, 12, 145);

                    Builder::echoUnit("Wraithseer", 1, 12, 160);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>