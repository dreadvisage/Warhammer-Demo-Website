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
    <title>Grey Knights</title>
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

            <h2>Grey Knights</h2>
            <hr>

            <ul id="points-list">
                    <script>
                    const Builder = UnitBuilder;
                    Builder.setParentId("points-list");
                    Builder.setFaction("Grey Knights");
                    
                    Builder.addUnit("Brother-Captain", 1, 14, 90);

                    Builder.addUnit("Brother-Captain Stern", 1, 14, 90);

                    Builder.addUnit("Brotherhood Champion", 1, 14, 80);

                    Builder.addUnit("Brotherhood Chaplain", 1, 14, 75);

                    Builder.addUnit("Brotherhood Librarian", 1, 12, 100);

                    Builder.addUnit("Brotherhood Techmarine", 1, 14, 60);

                    Builder.new("Brotherhood Terminator Squad")
                        .model(5, 12, 210)
                        .model(10, 10, 420)
                        .add();

                    Builder.addUnit("Castellan Crowe", 1, 14, 75);

                    Builder.addUnit("Grand Master", 1, 14, 95);

                    Builder.addUnit("Grand Master in Nemesis Dreadknight", 1, 12, 200);

                    Builder.addUnit("Grand Master Voldus", 1, 14, 95);

                    Builder.addUnit("Grey Knights Land Raider", 1, 12, 240);

                    Builder.addUnit("Grey Knights Land Raider Crusader", 1, 12, 230);

                    Builder.addUnit("Grey Knights Razorback", 1, 14, 85);

                    Builder.addUnit("Grey Knights Rhino", 1, 14, 75);

                    Builder.addUnit("Grey Knights Stormhawk Interceptor", 1, 12, 160);

                    Builder.addUnit("Grey Knights Stormraven Gunship", 1, 12, 265);

                    Builder.addUnit("Grey Knights Stormtalon Gunship", 1, 12, 170);

                    Builder.addUnit("Grey Knights Venerable Dreadnought", 1, 12, 155);

                    Builder.new("Interceptor Squad")
                        .model(5, 12, 135)
                        .model(10, 10, 270)
                        .add();

                    Builder.addUnit("Kaldor Draigo", 1, 12, 125);

                    Builder.addUnit("Nemesis Dreadknight", 1, 12, 185);

                    Builder.new("Paladin Squad")
                        .model(5, 12, 225)
                        .model(10, 10, 450)
                        .add();

                    Builder.new("Purgation Squad")
                        .model(5, 12, 135)
                        .model(10, 10, 270)
                        .add();

                    Builder.new("Purifier Squad")
                        .model(5, 12, 130)
                        .model(10, 10, 260)
                        .add();

                    Builder.addUnit("Servitors", 4, 14, 50);

                    Builder.new("Strike Squad")
                        .model(5, 12, 125)
                        .model(10, 10, 250)
                        .add();

                    insertRawHtml("points-list", "<br><h2>Forge World Units</h2>");

                    Builder.addUnit("Grey Knights Thunderhawk Gunship", 1, 12, 805);

                    Builder.addUnit("Land Raider Banisher", 1, 12, 255);
                    </script>


                </ul>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>