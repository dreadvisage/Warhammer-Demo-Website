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
    <title>Chaos Knights</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/article-section.css">
    <link rel="stylesheet" href="../css/article-contents.css">
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

            <h2>Chaos Knights</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Knight Abominant", 1, 12, 455);

                    Builder::echoUnit("Knight Desecrator", 1, 12, 450);

                    Builder::echoUnit("Knight Despoiler", 1, 12, 470);

                    Builder::echoUnit("Knight Rampager", 1, 12, 380);

                    Builder::echoUnit("Knight Tyrant", 1, 12, 555);

                    Builder::echoUnit("War Dog Executioner", 1, 12, 150);

                    Builder::echoUnit("War Dog Huntsman", 1, 12, 150);

                    Builder::echoUnit("War Dog Karnivore", 1, 12, 140);

                    Builder::echoUnit("War Dog Stalker", 1, 12, 150);
                    ?>

                    <h2>Forge World Units</h2>

                    <?php
                    Builder::echoUnit("Chaos Acastus Knight Asterius", 1, 12, 840);

                    Builder::echoUnit("Chaos Acastus Knight Porphyrion", 1, 12, 740);

                    Builder::echoUnit("Chaos Cerastus Knight Acheron", 1, 12, 465);

                    Builder::echoUnit("Chaos Cerastus Knight Atrapos", 1, 12, 465);

                    Builder::echoUnit("Chaos Cerastus Knight Castigator", 1, 12, 480);

                    Builder::echoUnit("Chaos Cerastus Knight Lancer", 1, 12, 465);

                    Builder::echoUnit("Chaos Questoris Knight Magaera", 1, 12, 465);

                    Builder::echoUnit("Chaos Questoris Knight Styrix", 1, 12, 505);

                    Builder::echoUnit("War Dog Moirax", 1, 12, 170);
                    ?>
                </ul>
            </form>
            
        </div>
        <div class="pad"></div>
    </div>
</body>

</html>