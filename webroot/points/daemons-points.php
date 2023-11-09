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
    <title>Chaos Daemons</title>
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

            <h2>Chaos Daemons</h2>
            <hr>

            <form action="insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul style="list-style: none; color:darkred">
                    <?php
                    Builder::new("Beast of Nurgle")
                        ->model(1, 14, 70)
                        ->model(2, 12, 140)
                        ->echo();

                    Builder::echoUnit("Be'lakor", 1, 12, 350);

                    Builder::new("Bloodcrushers")
                        ->model(3, 12, 120)
                        ->model(6, 12, 240)
                        ->echo();

                    Builder::echoUnit("Bloodletters", 10, 10, 140);

                    Builder::echoUnit("Bloodmaster", 1, 14, 75);

                    Builder::echoUnit("Bloodthirster", 1, 12, 320);

                    Builder::echoUnit("Blue Horrors", 1, 12, 125);

                    Builder::echoUnit("Burning Chariot", 1, 12, 115);

                    Builder::echoUnit("Changecaster", 1, 14, 65);

                    Builder::echoUnit("Contorted Epitome", 1, 14, 85);

                    Builder::echoUnit("Daemon Prince of Chaos", 1, 12, 200);

                    Builder::echoUnit("Daemon Prince of Chaos with Winges", 1, 12, 195);

                    Builder::echoUnit("Daemonettes", 1, 12, 120);

                    Builder::echoUnit("Epidemius", 1, 14, 85);

                    Builder::echoUnit("Exalted Flamer", 1, 14, 70);

                    Builder::echoUnit("Exalted Seeker Chariot", 1, 12, 115);

                    Builder::echoUnit("Fateskimmer", 1, 12, 105);

                    Builder::echoUnit("Feculent Gnarimaw", 1, 12, 100);

                    Builder::new("Fiends")
                        ->model(3, 12, 130)
                        ->model(6, 12, 260)
                        ->echo();

                    Builder::new("Flamers")
                        ->model(3, 14, 80)
                        ->model(6, 12, 160)
                        ->echo();

                    Builder::new("Flesh Hounds")
                        ->model(5, 14, 70)
                        ->model(10, 10, 140)
                        ->echo();

                    Builder::echoUnit("Fluxmaster", 1, 14, 60);

                    Builder::echoUnit("Great Unclean One", 1, 12, 250);

                    Builder::new("Hellflayer")
                        ->model(1, 12, 105)
                        ->model(2, 12, 210)
                        ->echo();

                    Builder::echoUnit("Horticulous Slimux", 1, 12, 120);

                    Builder::echoUnit("Infernal Enrapturess", 1, 14, 65);

                    Builder::echoUnit("Kairos Fateweaver", 1, 12, 285);

                    Builder::echoUnit("Karanak", 1, 14, 75);

                    Builder::echoUnit("Keeper of Secrets", 1, 12, 330);

                    Builder::echoUnit("Lord of Change", 1, 12, 260);

                    Builder::new("Nurglings")
                        ->model(3, 14, 35)
                        ->model(6, 14, 70)
                        ->model(9, 12, 105)
                        ->echo();

                    Builder::echoUnit("Pink Horrors", 10, 10, 140);

                    Builder::new("Plague Drones")
                        ->model(3, 12, 120)
                        ->model(6, 12, 240)
                        ->echo();

                    Builder::echoUnit("Plaguebearers", 10, 10, 125);

                    Builder::echoUnit("Poxbringer", 1, 14, 65);

                    Builder::echoUnit("Rendmaster on Blood Throne", 1, 12, 150);

                    Builder::echoUnit("Rotigus", 1, 12, 260);

                    Builder::new("Screamers")
                        ->model(3, 14, 80)
                        ->model(6, 12, 180)
                        ->echo();

                    Builder::new("Seeker Chariot")
                        ->model(1, 14, 75)
                        ->model(2, 12, 150)
                        ->echo();

                    Builder::new("Seekers")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::echoUnit("Shalaxi Helbane", 1, 12, 450);

                    Builder::echoUnit("Skarbrand", 1, 12, 345);

                    Builder::echoUnit("Skull Altar", 1, 12, 105);

                    Builder::echoUnit("Skull Cannon", 1, 12, 105);

                    Builder::echoUnit("Skullmaster", 1, 12, 105);

                    Builder::echoUnit("Skulltaker", 1, 14, 95);

                    Builder::echoUnit("Sloppity Bilepiper", 1, 14, 55);

                    Builder::echoUnit("Soul Grinder", 1, 12, 200);

                    Builder::echoUnit("Spoilpox Scrivener", 1, 14, 65);

                    Builder::echoUnit("Syll'esske", 1, 12, 120);

                    Builder::echoUnit("The Blue Scribes", 1, 14, 65);

                    Builder::echoUnit("The Changeling", 1, 14, 90);

                    Builder::echoUnit("The Masque of Slaanesh", 1, 12, 105);

                    Builder::echoUnit("Tormenbringer on Exalted Seeker Chariot", 1, 12, 140);

                    Builder::echoUnit("Tranceweaver", 1, 14, 60);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>