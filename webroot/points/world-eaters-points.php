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
    <title>World Eaters</title>
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

            <h2>World Eaters</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Angron", 1, 12, 415);
                    
                    Builder::new("Eightbound")
                        ->model(3, 12, 135)
                        ->model(6, 12, 270)
                        ->echo();
                    
                    Builder::new("Exalted Eightbound")
                        ->model(3, 12, 150)
                        ->model(6, 12, 300)
                        ->echo();

                    Builder::new("Jakhals")
                        ->model(10, 12, 70)
                        ->model(20, 10, 140)
                        ->echo();

                    Builder::new("Khorne Berzerkers")
                        ->model(5, 12, 100)
                        ->model(10, 10, 200)
                        ->echo();

                    Builder::echoUnit("Khorne Lord of Skulls", 1, 12, 480);

                    Builder::echoUnit("Khârn the Betrayer", 1, 14, 80);

                    Builder::echoUnit("Lord Invocatus", 1, 12, 140);

                    Builder::echoUnit("World Eaters Chaos Spawn", 2, 14, 65);

                    Builder::echoUnit("World Eaters Daemon Prince", 1, 12, 200);

                    Builder::echoUnit("World Eaters Daemon Prince with Wings", 1, 12, 195);

                    Builder::echoUnit("World Eaters Defiler", 1, 12, 190);

                    Builder::echoUnit("World Eaters Forgefiend", 1, 12, 170);

                    Builder::echoUnit("World Eaters Helbrute", 1, 12, 140);

                    Builder::echoUnit("World Eaters Heldrake", 1, 12, 210);

                    Builder::echoUnit("World Eaters Land Raider", 1, 12, 240);

                    Builder::echoUnit("World Eaters Lord on Juggernaut", 1, 12, 100);

                    Builder::echoUnit("World Eaters Master of Executions", 1, 14, 80);

                    Builder::echoUnit("World Eaters Maulerfiend", 1, 12, 155);

                    Builder::echoUnit("World Eaters Predator Annihilator", 1, 12, 130);

                    Builder::echoUnit("World Eaters Predator Destructor", 1, 12, 130);

                    Builder::echoUnit("World Eaters Rhino", 1, 14, 75);

                    Builder::new("World Eaters Terminator Squad")
                        ->model(5, 12, 190)
                        ->model(10, 10, 380)
                        ->echo();
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>