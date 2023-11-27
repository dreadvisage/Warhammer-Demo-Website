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
    <title>Chaos Knights</title>
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

            <h2>Chaos Knights</h2>
            <hr>

            <ul id="points-list">
                    <script>
                    const Builder = UnitBuilder;
                    Builder.setParentId("points-list");
                    Builder.setFaction("Chaos Knights");
                    
                    Builder.addUnit("Knight Abominant", 1, 12, 455);

                    Builder.addUnit("Knight Desecrator", 1, 12, 450);

                    Builder.addUnit("Knight Despoiler", 1, 12, 470);

                    Builder.addUnit("Knight Rampager", 1, 12, 380);

                    Builder.addUnit("Knight Tyrant", 1, 12, 555);

                    Builder.addUnit("War Dog Executioner", 1, 12, 150);

                    Builder.addUnit("War Dog Huntsman", 1, 12, 150);

                    Builder.addUnit("War Dog Karnivore", 1, 12, 140);

                    Builder.addUnit("War Dog Stalker", 1, 12, 150);

                    insertRawHtml("points-list", "<br><h2>Forge World Units<h2>");

                    Builder.addUnit("Chaos Acastus Knight Asterius", 1, 12, 840);

                    Builder.addUnit("Chaos Acastus Knight Porphyrion", 1, 12, 740);

                    Builder.addUnit("Chaos Cerastus Knight Acheron", 1, 12, 465);

                    Builder.addUnit("Chaos Cerastus Knight Atrapos", 1, 12, 465);

                    Builder.addUnit("Chaos Cerastus Knight Castigator", 1, 12, 480);

                    Builder.addUnit("Chaos Cerastus Knight Lancer", 1, 12, 465);

                    Builder.addUnit("Chaos Questoris Knight Magaera", 1, 12, 465);

                    Builder.addUnit("Chaos Questoris Knight Styrix", 1, 12, 505);

                    Builder.addUnit("War Dog Moirax", 1, 12, 170);
                    </script>
                </ul>
            
        </div>
        <div class="pad"></div>
    </div>
</body>

</html>