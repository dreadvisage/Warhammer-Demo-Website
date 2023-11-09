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
    <title>Adeptus Titanicus</title>
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

            <h2>Adeptus Titanicus</h2>
            <hr>

            <form action="insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul style="list-style: none; color:darkred">

                    <h2>Forge World Units</h2>

                    <?php
                    Builder::echoUnit("Reaver Titan", 1, 12, 2200);

                    Builder::echoUnit("Warbringer Nemesis Titan", 1, 12, 2600);

                    Builder::echoUnit("Warhound Titan", 1, 12, 1100);

                    Builder::echoUnit("Warlord Titan", 1, 12, 3500);
                    ?>

                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>