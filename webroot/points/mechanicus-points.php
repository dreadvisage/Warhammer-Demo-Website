<?php
$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";
require_once $is_logged_in_path;

require_once "insert-into-unit-table.php";

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
    <title>Adeptus Custodes</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/article-section.css">
    <link rel="stylesheet" href="../css/article-contents.css">
</head>

<body>
    <div id="background-image"></div>

    <?php
    require '../../utils/navbar.php';
    echoNavbar(1);
    ?>

    <div class="display">
        <div class="pad"></div>
        <div id="article">

            <h2>Adeptus Mechanicus</h2>
            <hr>

            <form action="insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul style="list-style: none; color:darkred">
                    <?php
                    Builder::echoUnit("Archaeopter Fusilave", 1, 12, 155);

                    Builder::echoUnit("Archaeopter Stratoraptor", 1, 12, 165);

                    Builder::echoUnit("Archaeopter Transvector", 1, 12, 140);

                    Builder::echoUnit("Belisarius Cawl", 1, 12, 185);

                    Builder::new("Corpuscarii Electro-Priests")
                        ->model(5, 14, 55)
                        ->model(10, 10, 110)
                        ->echo();

                    Builder::echoUnit("Cybernetica Datasmith", 1, 14, 35);

                    Builder::new("Fulgurite Electro-Priests")
                        ->model(5, 14, 60)
                        ->model(10, 10, 120)
                        ->echo();

                    Builder::new("Ironstrider Ballistarii")
                        ->model(1, 14, 50)
                        ->model(2, 12, 100)
                        ->model(3, 12, 150)
                        ->echo();

                    Builder::new("Kastelan Robots")
                        ->model(2, 12, 200)
                        ->model(4, 12, 400)
                        ->echo();

                    Builder::new("Kataphron Breachers")
                        ->model(3, 12, 145)
                        ->model(6, 12, 290)
                        ->echo();

                    Builder::new("Kataphron Destroyers")
                        ->model(3, 12, 115)
                        ->model(6, 12, 230)
                        ->echo();

                    Builder::echoUnit("Onager Dunecrawler", 1, 12, 140);

                    Builder::new("Pteraxii Skystalkers")
                        ->model(5, 14, 65)
                        ->model(10, 10, 130)
                        ->echo();

                    Builder::new("Pteraxii Sterylizors")
                        ->model(5, 14, 70)
                        ->model(10, 10, 140)
                        ->echo();

                    Builder::new("Serberys Raiders")
                        ->model(3, 14, 60)
                        ->model(6, 12, 120)
                        ->echo();

                    Builder::new("Serberys Sulphurhounds")
                        ->model(3, 14, 55)
                        ->model(6, 12, 110)
                        ->echo();

                    Builder::echoUnit("Servitors", 4, 14, 50);

                    Builder::new("Sicarian Infiltrators")
                        ->model(5, 14, 70)
                        ->model(10, 10, 140)
                        ->echo();

                    Builder::new("Sicarian Ruststalkers")
                        ->model(5, 14, 70)
                        ->model(10, 10, 140)
                        ->echo();

                    Builder::echoUnit("Skitarii Marshal", 1, 14, 35);

                    Builder::echoUnit("Skitarii Rangers", 10, 12, 90);

                    Builder::echoUnit("Skitarii Vanguard", 8, 14, 80);

                    Builder::echoUnit("Skorpius Disintegrator", 1, 12, 180);

                    Builder::echoUnit("Skorpius Dunerider", 1, 14, 80);

                    Builder::new("Sydonian Dragoons")
                        ->model(1, 14, 60)
                        ->model(2, 12, 120)
                        ->model(3, 12, 180)
                        ->echo();

                    Builder::echoUnit("Tech-Priest Dominus", 1, 14, 75);

                    Builder::echoUnit("Tech-Priest Enginseer", 1, 14, 40);

                    Builder::echoUnit("Tech-Priest Manipulus", 1, 14, 55);

                    Builder::echoUnit("Technoarcheologist", 1, 14, 45);
                    ?>

                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>