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
    <title>Orks</title>
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

            <h2>Orks</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Battlewagon", 1, 12, 185);

                    Builder::new("Beast Snagga Boyz")
                        ->model(10, 10, 105)
                        ->model(20, 10, 210)
                        ->echo();
                    
                    Builder::echoUnit("Beastboss", 1, 12, 100);

                    Builder::echoUnit("Beastboss on Squigosaur", 1, 12, 165);

                    Builder::echoUnit("Big Mek in Mega Armour", 1, 14, 85);

                    Builder::echoUnit("Big Mek in Kustom Force Field", 1, 14, 55);

                    Builder::echoUnit("Big Mek with Shokk Attack Gun", 1, 14, 75);

                    Builder::echoUnit("Big'ed Bossbunka", 1, 12, 135);

                    Builder::echoUnit("Blitza-bommer", 1, 12, 115);

                    Builder::echoUnit("Boomdakka Snazzwagon", 1, 14, 90);

                    Builder::echoUnit("Boss Snikrot", 1, 14, 85);

                    Builder::echoUnit("Boss Zagstruk", 1, 14, 90);

                    Builder::new("Boyz")
                        ->model(10, 12, 85)
                        ->model(20, 10, 170)
                        ->echo();

                    Builder::new("Burna Boyz")
                        ->modelCustom("1 Spanner and 4 Burna Boyz", 30, 60)
                        ->modelCustom("2 Spanner and 8 Burna Boyz", 28, 120)
                        ->modelCustom("3 Spanner and 12 Burna Boyz", 26, 180)
                        ->echo();

                    Builder::echoUnit("Burna-bommer", 1, 12, 125);

                    Builder::echoUnit("Dakkajet", 1, 12, 135);

                    Builder::echoUnit("Deff Dread", 1, 12, 130);

                    Builder::echoUnit("Deffkilla Wartrike", 1, 14, 80);

                    Builder::new("Deffkoptas")
                        ->model(3, 12, 100)
                        ->model(6, 12, 200)
                        ->echo();

                    Builder::new("Flash Gitz")
                        ->model(5, 14, 95)
                        ->model(10, 10, 190)
                        ->echo();

                    Builder::echoUnit("Ghazghkull Thraka", 2, 12, 235);

                    Builder::echoUnit("Gorkanaut", 1, 12, 280);

                    Builder::new("Gretchin")
                        ->model(11, 12, 40)
                        ->model(22, 12, 80)
                        ->echo();

                    Builder::echoUnit("Hunta Rig", 1, 12, 160);

                    Builder::echoUnit("Kaptin Badrukk", 1, 14, 80);

                    Builder::echoUnit("Kill Rig", 1, 12, 200);

                    Builder::new("Killa Kans")
                        ->model(3, 12, 150)
                        ->model(6, 12, 300)
                        ->echo();

                    Builder::echoUnit("Kommandos", 10, 10, 135);

                    Builder::echoUnit("Kustom Boosta-blasta", 1, 14, 85);

                    Builder::new("Lootas")
                        ->modelCustom("1 Spanner and 4 Lootas", 30, 50)
                        ->modelCustom("2 Spanner and 8 Lootas", 28, 100)
                        ->modelCustom("3 Spanner and 12 Lootas", 26, 150)
                        ->echo();

                    Builder::echoUnit("Mad Dok Grotsnik", 1, 14, 65);

                    Builder::new("Meganobz")
                        ->model(2, 14, 60)
                        ->model(3, 14, 90)
                        ->model(5, 12, 150)
                        ->model(6, 12, 180)
                        ->echo();

                    Builder::echoUnit("Megatrakk Scrapjet", 1, 14, 90);

                    Builder::echoUnit("Mek", 1, 14, 45);

                    Builder::new("Mek Gunz")
                        ->model(1, 14, 55)
                        ->model(2, 12, 110)
                        ->model(3, 12, 165)
                        ->echo();

                    Builder::echoUnit("Mekboy Workshop", 1, 14, 80);

                    Builder::echoUnit("Morkanaut", 1, 12, 330);

                    Builder::echoUnit("Mozrog Skragbad", 1, 12, 195);

                    Builder::echoUnit("Nob on Smasha Squig", 1, 14, 60);

                    Builder::echoUnit("Nob with Waaagh! Banner", 1, 14, 70);

                    Builder::new("Nobz")
                        ->model(5, 12, 105)
                        ->model(10, 10, 210)
                        ->echo();

                    Builder::echoUnit("Painboss", 1, 14, 60);

                    Builder::echoUnit("Painboy", 1, 14, 70);

                    Builder::echoUnit("Rukkatrukk Squigbuggy", 1, 12, 110);

                    Builder::echoUnit("Shokkjump Dragsta", 1, 14, 85);

                    Builder::new("Squighog Boyz")
                        ->model(3, 12, 110)
                        ->model(6, 12, 220)
                        ->echo();

                    Builder::echoUnit("Stompa", 1, 12, 800);

                    Builder::new("Stormboyz")
                        ->model(5, 14, 65)
                        ->model(10, 10, 130)
                        ->echo();

                    Builder::echoUnit("Tankbustas", 5, 12, 110);

                    Builder::echoUnit("Trukk", 1, 14, 60);

                    Builder::new("Warbikers")
                        ->model(3, 14, 70)
                        ->model(6, 12, 140)
                        ->echo();

                    Builder::echoUnit("Warboss", 1, 14, 65);

                    Builder::echoUnit("Warboss in Mega Armour", 1, 14, 80);

                    Builder::echoUnit("Wazbom Blastajet", 1, 12, 175);

                    Builder::echoUnit("Weirdboy", 1, 14, 55);

                    Builder::echoUnit("Wurrboy", 1, 14, 60);

                    Builder::echoUnit("Zodgrod Wortsnagga", 1, 14, 80);
                    ?>

                    <h2>Forge World Units</h2>

                    <?php
                    Builder::echoUnit("Big Trakk", 1, 14, 90);

                    Builder::echoUnit("Grot Mega-tank", 1, 12, 110);

                    Builder::new("Grot Tanks")
                        ->model(4, 12, 155)
                        ->model(8, 12, 310)
                        ->echo();

                    Builder::echoUnit("Gargantuan Squiggoth", 1, 12, 440);

                    Builder::echoUnit("Kill Tank", 1, 12, 295);

                    Builder::echoUnit("Mega Dread", 1, 12, 225);

                    Builder::echoUnit("Meka-dread", 1, 12, 210);

                    Builder::echoUnit("Nobz on Warbikes", 3, 12, 125);

                    Builder::echoUnit("Squiggoth", 1, 12, 150);

                    Builder::echoUnit("Warboss on Warbike", 1, 14, 75);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>