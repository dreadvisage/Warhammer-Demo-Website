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
    <title>Imperial Knights</title>
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

            <h2>Imperial Knights</h2>
            <hr>

            <ul id="points-list">
                    <script>
                    const Builder = UnitBuilder;
                    Builder.setParentId("points-list");
                    
                    Builder.addUnit("Armiger Helverin", 1, 12, 150);

                    Builder.addUnit("Armoger Warglaive", 1, 12, 150);

                    Builder.addUnit("Canis Rex", 1, 12, 460);

                    Builder.addUnit("Knight Castellan", 1, 12, 565);

                    Builder.addUnit("Knight Crusader", 1, 12, 475);

                    Builder.addUnit("Knight Errant", 1, 12, 430);

                    Builder.addUnit("Knight Gallant", 1, 12, 400);

                    Builder.addUnit("Knight Paladin", 1, 12, 450);

                    Builder.addUnit("Knight Preceptor", 1, 12, 430);

                    Builder.addUnit("Knight Valiant", 1, 12, 565);

                    Builder.addUnit("Knight Warden", 1, 12, 480);

                    insertRawHtml("points-list", "<br><h2>Forge World Units</h2>");

                    Builder.addUnit("Acastus Knight Asterius", 1, 12, 840);

                    Builder.addUnit("Acastus Knight Porphyrion", 1, 12, 745);

                    Builder.addUnit("Armiger Moirax", 1, 12, 170);

                    Builder.addUnit("Cerastus Knight Acheron", 1, 12, 445);

                    Builder.addUnit("Cerastus Knight Atrapos", 1, 12, 440);

                    Builder.addUnit("Cerastus Knight Castigator", 1, 12, 485);

                    Builder.addUnit("Cerastus Knight Lancer", 1, 12, 495);

                    Builder.addUnit("Questoris Knight Magaera", 1, 12, 450);

                    Builder.addUnit("Questoris Knight Styrix", 1, 12, 490);
                    </script>


                </ul>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>