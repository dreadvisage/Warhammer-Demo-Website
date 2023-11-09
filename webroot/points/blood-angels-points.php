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
    <title>Blood Angels</title>
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

            <h2>Blood Angels</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Callidus Assassin", 1, 14, 90);

                    Builder::echoUnit("Culexus Assassin", 1, 14, 85);

                    Builder::echoUnit("Eversor Assassin", 1, 14, 75);

                    Builder::echoUnit("Extaction Squad", 10, 4, 110);

                    Builder::echoUnit("Imperial Navy Breachers", 10, 10, 105);

                    Builder::echoUnit("Inquisitor", 1, 14, 55);

                    Builder::echoUnit("Inquisitor Coteaz", 1, 14, 75);

                    Builder::echoUnit("Inquisitor Eisenhorn", 1, 14, 65);

                    Builder::echoUnit("Inquisitor Greyfax", 1, 14, 65);

                    Builder::echoUnit("Inquisitor Karamazov", 1, 12, 130);

                    Builder::echoUnit("Lord Inquisitor Kyria Draxus", 1, 14, 75);

                    Builder::echoUnit("Rogue Trader Entourage", 4, 12, 105);

                    Builder::echoUnit("Subductor Squad", 10, 4, 110);

                    Builder::echoUnit("Vigiliant Squad", 10, 4, 105);

                    Builder::echoUnit("Vindicare Assassin", 1, 14, 80);

                    Builder::new("Voidsmen-at-Arms")
                        ->model(5, 14, 50)
                        ->model(10, 10, 100)
                        ->echo();
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>