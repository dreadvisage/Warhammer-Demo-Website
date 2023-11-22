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
    <title>Drukhari</title>
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

            <h2>Drukhari</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Archon", 1, 14, 75);

                    Builder::echoUnit("Beastmaster", 7, 12, 105);

                    Builder::echoUnit("Court of the Archon", 4, 14, 85);

                    Builder::new("Cronos")
                        ->model(1, 14, 50)
                        ->model(2, 12, 100)
                        ->echo();

                    Builder::echoUnit("Drazhar", 1, 14, 90);

                    Builder::new("Grotesques")
                        ->model(3, 12, 105)
                        ->model(6, 12, 210)
                        ->echo();
                    
                    Builder::echoUnit("Haemonculus", 1, 14, 60);

                    Builder::new("Hellions")
                        ->model(5, 12, 100)
                        ->model(10, 10, 200)
                        ->echo();

                    Builder::new("Incubi")
                        ->model(5, 14, 80)
                        ->model(10, 10, 160)
                        ->echo();

                    Builder::echoUnit("Kabalite Warriors", 10, 10, 110);

                    Builder::echoUnit("Lelith Hesperax", 1, 14, 85);

                    Builder::new("Mandrakes")
                        ->model(5, 14, 65)
                        ->model(10, 10, 130)
                        ->echo();

                    Builder::echoUnit("Raider", 1, 14, 90);

                    Builder::echoUnit("Ravager", 1, 12, 115);

                    Builder::echoUnit("Razorwing Jetfighter", 1, 12, 170);

                    Builder::new("Reavers")
                        ->model(3, 14, 70)
                        ->model(6, 12, 140)
                        ->echo();

                    Builder::new("Scourges")
                        ->model(5, 12, 110)
                        ->model(10, 10, 220)
                        ->echo();

                    Builder::echoUnit("Succubus", 1, 14, 55);

                    Builder::new("Talos")
                        ->model(1, 14, 90)
                        ->model(2, 12, 180)
                        ->echo();

                    Builder::echoUnit("Urien Rakarth", 1, 14, 80);

                    Builder::echoUnit("Venom", 1, 14, 80);

                    Builder::echoUnit("Voidraven Bomber", 1, 12, 195);

                    Builder::new("Wracks")
                        ->model(5, 14, 60)
                        ->model(10, 10, 120)
                        ->echo();

                    Builder::echoUnit("Wyches", 10, 12, 90);
                    ?>

                    <h2>Forge World Units</h2>

                    <?php
                    Builder::echoUnit("Tantalus", 1, 12, 230);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>