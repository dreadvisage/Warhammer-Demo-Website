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
    <title>Genestealer Cults</title>
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

            <h2>Genestealer Cults</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::new("Aberrants")
                        ->model(5, 12, 185)
                        ->model(10, 10, 370)
                        ->echo();

                    Builder::echoUnit("Abominant", 1, 14, 75);

                    Builder::new("Achilles Ridgerunners")
                        ->model(1, 14, 85)
                        ->model(2, 12, 170)
                        ->echo();

                    Builder::new("Acolyte Hybrids")
                        ->model(5, 14, 85)
                        ->model(10, 10,170)
                        ->echo();

                    Builder::echoUnit("Acolyte Iconward", 1, 14, 50);

                    Builder::new("Atalan Jackals")
                        ->model(5, 14, 90)
                        ->model(10, 10, 180)
                        ->echo();

                    Builder::echoUnit("Biophagus", 1, 14, 60);

                    Builder::echoUnit("Clamavus", 1, 14, 50);

                    Builder::echoUnit("Goliath Rockgrinder", 1, 12, 155);

                    Builder::echoUnit("Goliath Truck", 1, 12, 110);

                    Builder::new("Hybrid Metamorphs")
                        ->model(5, 14, 80)
                        ->model(10, 10, 160)
                        ->echo();

                    Builder::echoUnit("Jackal Alphus", 1, 14, 60);

                    Builder::echoUnit("Kelermorph", 1, 14, 55);

                    Builder::echoUnit("Locus", 1, 14, 45);

                    Builder::echoUnit("Magus", 1, 14, 50);

                    Builder::new("Neophyte Hybrids")
                        ->model(10, 12, 90)
                        ->model(20, 10, 180)
                        ->echo();

                    Builder::echoUnit("Nexos", 1, 14, 60);

                    Builder::echoUnit("Patriarch", 1, 14, 85);

                    Builder::echoUnit("Primus", 1, 14, 90);

                    Builder::new("Purestrain Genestealers")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::echoUnit("Reductus Saboteur", 1, 14, 65);

                    Builder::echoUnit("Sanctus", 1, 14, 50);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>