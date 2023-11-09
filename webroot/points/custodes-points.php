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
    <title>Adeptus Custodes</title>
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

            <h2>Adeptus Custodes</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Aleya", 1, 14, 80);

                    Builder::new("Allarus Custodians")
                        ->model(2, 12, 140)
                        ->model(3, 12, 210)
                        ->model(5, 12, 350)
                        ->model(6, 12, 420)
                        ->echo();

                    Builder::echoUnit("Anathema Psykana Rhino", 1, 14, 75);

                    Builder::echoUnit("Blade Champion", 1, 12, 120);

                    Builder::new("Custodian Guard")
                        ->model(4, 12, 200)
                        ->model(5, 12, 250)
                        ->echo();

                    Builder::new("Custodian Wardens")
                        ->model(4, 12, 220)
                        ->model(5, 12, 275)
                        ->echo();

                    Builder::echoUnit("Knight-Centura", 1, 14, 75);

                    Builder::new("Prosecutors")
                        ->model(4, 14, 40)
                        ->model(5, 14, 50)
                        ->model(9, 14, 90)
                        ->model(10, 10, 100)
                        ->echo();

                    Builder::echoUnit("Shield-Captain", 4, 12, 220);

                    Builder::echoUnit("Shield-Captain in Allarus Terminator Armour", 1, 12, 140);

                    Builder::echoUnit("Shield-Captain on Dawneagle Jetbike", 1, 12, 180);

                    Builder::echoUnit("Trajann Valoris", 1, 12, 160);

                    Builder::echoUnit("Valerian", 1, 12, 115);

                    Builder::echoUnit("Venerable Contemptor Dreadnought", 1, 12, 185);

                    Builder::echoUnit("Venerable Land Raider", 1, 12, 240);

                    Builder::new("Vertus Praetors")
                        ->model(2, 12, 160)
                        ->model(3, 13, 240)
                        ->echo();

                    Builder::new("Vigilators")
                        ->model(4, 14, 50)
                        ->model(5, 15, 65)
                        ->model(9, 13, 115)
                        ->model(10, 11, 130)
                        ->echo();

                    Builder::new("Witchseekers")
                        ->model(4, 14, 50)
                        ->model(5, 15, 65)
                        ->model(9, 13, 115)
                        ->model(10, 11, 130)
                        ->echo();
                    ?>
                    <h2>Forge World Units</h2>
                    <?php
                    Builder::new("Agamatus Custodians")
                        ->model(3, 12, 240)
                        ->model(6, 12, 480)
                        ->echo();

                    Builder::new("Aquilon Custodians")
                        ->model(3, 12, 210)
                        ->model(6, 12, 420)
                        ->echo();

                    Builder::echoUnit("Ares Gunship", 1, 12, 240);

                    Builder::echoUnit("Caladius Grav-tank", 1, 12, 215);

                    Builder::echoUnit("Contemptor-Achillus Dreadnought", 1, 12, 165);

                    Builder::echoUnit("Contemptor-Galatus Dreadnought", 1, 12, 175);

                    Builder::echoUnit("Coronus Grav-carrier", 1, 12, 200);

                    Builder::echoUnit("Custodian Guard with Adrasite and Pyrithite Spears", 5, 12, 300);

                    Builder::echoUnit("Orion Assualt Dropship", 1, 12, 690);

                    Builder::echoUnit("Pallas Grav-attack", 1, 12, 120);

                    Builder::echoUnit("Sagittarum Custodians", 5, 12, 225);

                    Builder::echoUnit("Telemon Heavy Dreadnought", 1, 12, 235);

                    Builder::new("Venatari Custodians")
                        ->model(3, 12, 200)
                        ->model(6, 12, 400)
                        ->echo();
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>