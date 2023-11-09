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
    <title>Dark Angels</title>
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

            <h2>Dark Angels</h2>
            <hr>

            <form action="insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul style="list-style: none; color:darkred">
                    <?php
                    Builder::echoUnit("Asmodai", 1, 14, 70);

                    Builder::echoUnit("Azrael", 1, 12, 105);

                    Builder::echoUnit("Belial", 1, 14, 85);

                    Builder::new("Deathwing Command Squad")
                        ->model(5, 12, 210)
                        ->model(10, 10, 420)
                        ->echo();

                    Builder::new("Deathwing Knights")
                        ->model(5, 12, 235)
                        ->model(10, 10, 470)
                        ->echo();

                    Builder::echoUnit("Deathwing Strikemaster", 1, 14, 80);

                    Builder::new("Deathwing Terminator Squad")
                        ->model(5, 12, 200)
                        ->model(10, 10, 400)
                        ->echo();

                    Builder::echoUnit("Ezekiel", 1, 14, 75);

                    Builder::echoUnit("Lazarus", 1, 14, 70);

                    Builder::echoUnit("Lion El'Jonson", 1, 12, 380);

                    Builder::echoUnit("Nephilim Jetfighter", 1, 12, 195);

                    Builder::new("Ravenwing Black Knights")
                        ->model(3, 12, 110)
                        ->model(6, 12, 220)
                        ->echo();

                    Builder::new("Ravenwing Command Squad")
                        ->model(3, 12, 130)
                        ->model(6, 12, 260)
                        ->echo();

                    Builder::echoUnit("Ravenwing Dark Talon", 1, 12, 210);

                    Builder::echoUnit("Ravenwing Darkshroud", 1, 12, 125);

                    Builder::echoUnit("Ravenwing Land Speeder Vengeance", 1, 12, 160);

                    Builder::echoUnit("Ravenwing Talonmaster", 1, 12, 105);

                    Builder::echoUnit("Sammael", 1, 12, 130);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>