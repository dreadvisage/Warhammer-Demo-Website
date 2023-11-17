<?php
session_start();

require '../../utils/navbar.php';

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";
require_once $is_logged_in_path;

if (isNotLoggedIn()) {
    header("location: ../account/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adeptus Titanicus</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/article-section.css">
    <link rel="stylesheet" href="../css/points.css">
    <script src="../js/create-unit-helper.js"></script>
</head>

<body>

    <div id="background-image"></div>

    <?php
    echoNavbar(1);
    ?>

    <div class="display">
        <div class="pad"></div>
        <div id="article">

            <h2>Adeptus Titanicus</h2>
            <hr>

            <ul id="points-list">

                    <script>
                    const Builder = UnitBuilder;
                    Builder.setParentId("points-list");
                    
                    insertRawHtml("points-list", "<h2>Forge World Units</h2>");

                    Builder.addUnit("Reaver Titan", 1, 12, 2200);

                    Builder.addUnit("Warbringer Nemesis Titan", 1, 12, 2600);

                    Builder.addUnit("Warhound Titan", 1, 12, 1100);

                    Builder.addUnit("Warlord Titan", 1, 12, 3500);
                    </script>

                </ul>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>