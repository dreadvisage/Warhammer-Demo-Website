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
    <title>Death Guard</title>
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

            <h2>Death Guard</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Biologus Putrifier", 1, 14, 50);

                    Builder::new("Blightlord Terminators")
                        ->model(5, 12, 165)
                        ->model(10, 10, 330)
                        ->echo();

                    Builder::echoUnit("Death Guard Chaos Lord", 1, 14, 65);

                    Builder::echoUnit("Death Guard Chaos Lord in Terminator Armour", 1, 14, 85);

                    Builder::echoUnit("Death Guard Chaos Spawn", 10, 12, 70);

                    Builder::new("Death Guard Cultists")
                        ->model(10, 12, 50)
                        ->model(20, 10, 100)
                        ->echo();

                    Builder::echoUnit("Death Guard Daemon Prince", 1, 12, 160);

                    Builder::echoUnit("Death Guard Daemon Prince with Wings", 1, 12, 195);

                    Builder::echoUnit("Death Guard Defiler", 1, 12, 190);

                    Builder::echoUnit("Death Guard Helbrute", 1, 12, 140);

                    Builder::echoUnit("Death Guard Icon Bearer", 1, 14, 45);

                    Builder::echoUnit("Death Gaurd Land Raider", 1, 12, 240);

                    Builder::echoUnit("Death Guard Predator Annihilator", 1, 12, 130);

                    Builder::echoUnit("Death Guard Predator Destructor", 1, 12, 130);

                    Builder::echoUnit("Death Guard Rhino", 1, 14, 75);

                    Builder::echoUnit("Death Guard Sorcerer in Terminator Armour", 1, 14, 70);

                    Builder::new("Deathshroud Terminators")
                    ->model(3, 12, 125)
                    ->model(6, 12, 250)
                    ->echo();

                    Builder::echoUnit("Foetid Bloat-drone", 1, 12, 100);

                    Builder::echoUnit("Foetid Blightspawn", 1, 14, 50);

                    Builder::echoUnit("Lord of Contagion", 1, 14, 80);

                    Builder::echoUnit("Lord of Virulence", 1, 12, 100);

                    Builder::echoUnit("Malignant Plaguecaster", 1, 14, 65);

                    Builder::echoUnit("Miasmic Malignifier", 1, 12, 115);

                    Builder::echoUnit("Mortarion", 1, 12, 325);

                    Builder::new("Myphitic Blight-haulers")
                        ->model(1, 12, 100)
                        ->model(2, 12, 200)
                        ->model(3, 12, 300)
                        ->echo();

                    Builder::echoUnit("Noxious Blightbringer", 1, 14, 50);

                    Builder::new("Plague Marines")
                        ->model(5, 14, 80)
                        ->model(7, 12, 110)
                        ->model(10, 10, 160)
                        ->echo();


                    Builder::echoUnit("Plague Surgeon", 1, 14, 65);

                    Builder::echoUnit("Plagueburst Crawler", 1, 12, 165);

                    Builder::new("Poxwalkers")
                        ->model(10, 12, 50)
                        ->model(20, 10, 100)
                        ->echo();

                    Builder::echoUnit("Tallyman", 1, 14, 45);

                    Builder::echoUnit("Typhus", 1, 12, 100);

                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>