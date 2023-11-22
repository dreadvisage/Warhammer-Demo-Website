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
    <title>Tyranids</title>
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

            <h2>Tyranids</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::new("Barbgaunts")
                        ->model(5, 14, 60)
                        ->model(10, 10, 120)
                        ->echo();
                    
                    Builder::new("Barbgaunts")
                        ->model(1, 14, 75)
                        ->model(2, 12, 150)
                        ->model(3, 12, 225)
                        ->echo();
                    
                    Builder::echoUnit("Broodlord", 1, 14, 90);

                    Builder::new("Carnifexes")
                        ->model(1, 12, 125)
                        ->model(2, 12, 250)
                        ->echo();

                    Builder::echoUnit("Deathleaper", 1, 14, 70);

                    Builder::echoUnit("Deathleaper", 1, 14, 70);

                    Builder::echoUnit("Exocrine", 1, 12, 135);

                    Builder::new("Gargoyles")
                        ->model(10, 12, 75)
                        ->model(20, 10, 150)
                        ->echo();

                    Builder::new("Genestealers")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::echoUnit("Harpy", 1, 12, 215);

                    Builder::echoUnit("Haruspex", 1, 12, 125);

                    Builder::echoUnit("Hive Crone", 1, 12, 200);

                    Builder::new("Hive Guard")
                        ->model(3, 12, 110)
                        ->model(6, 12, 220)
                        ->echo();

                    Builder::echoUnit("Hive Tyrant", 1, 12, 235);

                    Builder::new("Hormagaunts")
                        ->model(10, 12, 65)
                        ->model(20, 10, 130)
                        ->echo();

                    Builder::echoUnit("Lictor", 1, 14, 60);

                    Builder::echoUnit("Maleceptor", 1, 12, 170);

                    Builder::echoUnit("Mawloc", 1, 12, 145);

                    Builder::new("Mucolid Spores")
                        ->model(1, 14, 50)
                        ->model(2, 12, 100)
                        ->echo();

                    Builder::new("Neurogaunts")
                        ->model(11, 12, 45)
                        ->model(22, 12, 90)
                        ->echo();

                    Builder::echoUnit("Neurolictor", 1, 12, 105);

                    Builder::echoUnit("Norn Assimilator", 1, 12, 310);

                    Builder::echoUnit("Norn Emissary", 1, 12, 290);

                    Builder::echoUnit("Old One Eye", 1, 12, 140);

                    Builder::echoUnit("Parasite of Mortrex", 1, 14, 80);

                    Builder::echoUnit("Psychophage", 1, 12, 125);

                    Builder::new("Pyrovores")
                        ->model(1, 14, 30)
                        ->model(2, 14, 60)
                        ->model(3, 14, 90)
                        ->echo();

                    Builder::new("Raveners")
                        ->model(3, 14, 75)
                        ->model(6, 12, 150)
                        ->echo();

                    Builder::new("Ripper Swarms")
                        ->model(1, 14, 20)
                        ->model(2, 14, 40)
                        ->model(3, 14, 60)
                        ->echo();

                    Builder::echoUnit("Screamer-Killer", 1, 12, 170);

                    Builder::new("Spore Mines")
                        ->model(3, 14, 55)
                        ->model(6, 12, 110)
                        ->echo();

                    Builder::echoUnit("Sporocyst", 1, 12, 145);

                    Builder::new("Termagants")
                        ->model(10, 12, 60)
                        ->model(20, 10, 120)
                        ->echo();

                    Builder::echoUnit("Tervigon", 1, 12, 190);

                    Builder::echoUnit("The Swarmlord", 1, 12, 270);

                    Builder::echoUnit("Toxicrene", 1, 12, 180);

                    Builder::echoUnit("Trygon", 1, 12, 180);

                    Builder::new("Tyranid Warriors with Melee Bio-weapons")
                        ->model(3, 14, 85)
                        ->model(6, 12, 170)
                        ->echo();

                    Builder::new("Tyranid Warriors with Ranged Bio-weapons")
                        ->model(3, 14, 70)
                        ->model(6, 12, 140)
                        ->echo();

                    Builder::echoUnit("Tyrannocyte", 1, 12, 105);

                    Builder::echoUnit("Tyrannofex", 1, 12, 245);

                    Builder::new("Tyrant Guard")
                        ->model(3, 14, 95)
                        ->model(6, 12, 190)
                        ->echo();

                    Builder::new("Venomthropes")
                        ->model(3, 14, 70)
                        ->model(6, 12, 140)
                        ->echo();

                    Builder::new("Von Ryan's Leapers")
                        ->model(3, 14, 75)
                        ->model(6, 12, 150)
                        ->echo();

                    Builder::echoUnit("Winged Hive Tyrant", 1, 12, 210);

                    Builder::echoUnit("Winged Tyranid Prime", 1, 14, 65);

                    Builder::new("Zoanthropes")
                        ->model(3, 12, 110)
                        ->model(6, 12, 220)
                        ->echo();
                    ?>

                    <h2>Forge World Units</h2>

                    <?php
                    Builder::echoUnit("Barbed Hierodule", 1, 12, 340);

                    Builder::echoUnit("Harridan", 1, 12, 610);

                    Builder::echoUnit("Hierophant", 1, 12, 810);

                    Builder::echoUnit("Scythed Hierodule", 1, 12, 330);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>