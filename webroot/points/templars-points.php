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
    <title>Black Templars</title>
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

            <h2>Black Templars</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">

                    <?php
                    Builder::echoUnit("Black Templars Gladiator Lancer", 1, 12, 165);

                    Builder::echoUnit("Black Templars Gladiator Reaper", 1, 12, 155);

                    Builder::echoUnit("Black Templars Gladiator Valiant", 1, 12, 155);

                    Builder::echoUnit("Black Templars Impulsor", 1, 14, 85);

                    Builder::echoUnit("Black Templars Repulsor", 1, 12, 200);

                    Builder::echoUnit("Black Templars Gladiator Executioner", 1, 12, 235);

                    Builder::echoUnit("Castellan", 1, 14, 65);

                    Builder::echoUnit("Chaplain Grimaldus", 1, 14, 95);

                    Builder::new("Crusader Squad")
                        ->modelCustom("1 Sword Brother, 4 Initiates", 30, 65)
                        ->modelCustom("1 Sword Brother, 9 Initiates", 28, 125)
                        ->modelCustom("1 Sword Brother, 4 Initiates, 5 Neophytes", 6, 125)
                        ->modelCustom("1 Sword Brother, 9 Initiates, 10 Neophytes", 4, 250)
                        ->echo();

                    Builder::echoUnit("High Marshal Helbrecht", 1, 14, 95);

                    Builder::echoUnit("Marshal", 1, 14, 80);

                    Builder::new("Primaris Crusader Squad")
                        ->modelCustom("1 Sword Brother, 5 Initiates, 4 Neophytes", 6, 140)
                        ->modelCustom("1 Sword Brother, 11 Initiates, 8 Neophytes", 6, 280)
                        ->echo();

                    Builder::new("Primaris Sword Brethren")
                        ->model(5, 12, 140)
                        ->model(10, 10, 280)
                        ->echo();

                    Builder::echoUnit("The Emperor's Champion", 1, 14, 75);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>