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
    <title>Space Marines</title>
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

            <h2>Space Marines</h2>
            <hr>

            <form action="db/insert-into-unit-table.php" method="post">
                <input id="name" type="hidden" name="name" value="">
                <input id="models" type="hidden" name="models" value="">
                <input id="points" type="hidden" name="points" value="">
                <ul class="points-list">
                    <?php
                    Builder::echoUnit("Adrax Agatone", 1, 14, 90);

                    Builder::new("Aggressor Squad")
                        ->model(3, 12, 100)
                        ->model(6, 12, 200)
                        ->echo();
                    
                    Builder::echoUnit("Ancient in Terminator Armour", 1, 14, 90);

                    Builder::echoUnit("Apothecary Biologis", 1, 14, 55);

                    Builder::new("Assault Intercessor Squad")
                        ->model(5, 14, 80)
                        ->model(10, 10, 160)
                        ->echo();
                    
                    Builder::new("Assault Squad")
                        ->model(5, 14, 95)
                        ->model(10, 10, 190)
                        ->echo();

                    Builder::new("Assault Squad with Jump Packs")
                        ->model(5, 12, 115)
                        ->model(10, 10, 230)
                        ->echo();

                    Builder::echoUnit("Astartes Servitors", 4, 14, 55);

                    Builder::new("Attack Bike Squad")
                        ->model(1, 14, 55)
                        ->model(2, 12, 110)
                        ->model(3, 12, 165)
                        ->echo();

                    Builder::echoUnit("Ballistus Dreadnought", 1, 12, 150);

                    Builder::new("Bike Squad")
                        ->model(3, 14, 80)
                        ->model(6, 12, 160)
                        ->modelCustom("Attack Bike", 10, +55)
                        ->echo();

                    Builder::echoUnit("Bladeguard Ancient", 1, 14, 50);

                    Builder::new("Bladeguard Veteran Squad")
                        ->model(3, 14, 90)
                        ->model(6, 12, 180)
                        ->echo();

                    Builder::echoUnit("Brutalis Dreadnought", 1, 12, 175);

                    Builder::echoUnit("Captain", 1, 14, 80);

                    Builder::echoUnit("Captain in Gravis Armour", 1, 14, 80);

                    Builder::echoUnit("Captain in Phobos Armour", 1, 14, 80);

                    Builder::echoUnit("Captain in Terminator Armour", 1, 14, 95);

                    Builder::echoUnit("Captain on Bike", 1, 14, 95);

                    Builder::echoUnit("Captain Sicarius", 1, 14, 85);

                    Builder::echoUnit("Captain with Jump Pack", 1, 12, 100);

                    Builder::new("Centurion Assault Squad")
                        ->model(3, 12, 150)
                        ->model(6, 12, 300)
                        ->echo();

                    Builder::new("Centurion Devastator Squad")
                        ->model(3, 12, 175)
                        ->model(6, 12, 350)
                        ->echo();

                    Builder::echoUnit("Chaplain", 1, 14, 70);

                    Builder::echoUnit("Chaplain Cassius", 1, 14, 80);

                    Builder::echoUnit("Chaplain in Terminator Armour", 1, 14, 90);

                    Builder::echoUnit("Chaplain on Bike", 1, 14, 80);

                    Builder::echoUnit("Chaplain with Jump Pack", 1, 14, 85);

                    Builder::echoUnit("Chief Librarian Tigurius", 1, 14, 80);

                    Builder::echoUnit("Command Squad", 5, 12, 165);

                    Builder::echoUnit("Contemptor Dreadnought", 1, 12, 170);

                    Builder::echoUnit("Darnath Lysander", 1, 12, 105);

                    Builder::echoUnit("Desolation Squad", 5, 12, 200);

                    Builder::new("Devastator Squad")
                        ->model(5, 12, 120)
                        ->model(10, 10, 200)
                        ->echo();

                    Builder::echoUnit("Dreadnought", 1, 12, 135);

                    Builder::echoUnit("Drop Pod", 1, 14, 70);

                    Builder::echoUnit("Eliminator Squad", 3, 14, 75);

                    Builder::new("Eradicator Squad")
                        ->model(3, 14, 95)
                        ->model(6, 12, 190)
                        ->echo();

                    Builder::new("Firestrike Servo-turrets")
                        ->model(1, 14, 80)
                        ->model(2, 12, 160)
                        ->echo();

                    Builder::echoUnit("Gladiator Lancer", 1, 12, 160);

                    Builder::echoUnit("Gladiaror Reaper", 1, 12, 150);

                    Builder::echoUnit("Gladiaror Valiant", 1, 12, 150);

                    Builder::echoUnit("Hammerfall Bunker", 1, 12, 210);

                    Builder::new("Heavy Intercessor Squad")
                        ->model(5, 12, 125)
                        ->model(10, 10, 250)
                        ->echo();

                    Builder::echoUnit("Hunter", 1, 12, 100);

                    Builder::echoUnit("Impulsor", 1, 14, 85);

                    Builder::new("Inceptor Squad")
                        ->model(3, 12, 115)
                        ->model(6, 12, 230)
                        ->echo();

                    Builder::new("Incursor Squad")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::new("Infernus Squad")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::new("Infiltrator Squad")
                        ->model(5, 12, 100)
                        ->model(10, 10, 200)
                        ->echo();

                    Builder::new("Intercessor Squad")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::echoUnit("Invader ATV", 1, 14, 70);

                    Builder::echoUnit("Invictor Tactical Warsuit", 1, 12, 150);

                    Builder::echoUnit("Iron Father Feirros", 1, 14, 95);

                    Builder::echoUnit("Ironclad Dreadnought", 1, 12, 150);

                    Builder::echoUnit("Judiciar", 1, 14, 75);

                    Builder::echoUnit("Kayvaan Shrike", 1, 12, 105);

                    Builder::echoUnit("Kor'sarro Khan", 1, 14, 75);

                    Builder::echoUnit("Land Raider", 1, 12, 240);

                    Builder::echoUnit("Land Raider Crusader", 1, 12, 230);

                    Builder::echoUnit("Land Raider Redeemer", 1, 12, 260);

                    Builder::echoUnit("Land Speeder", 1, 14, 80);

                    Builder::echoUnit("Land Speeder Storm", 1, 14, 70);

                    Builder::echoUnit("Land Speeder Tornado", 1, 14, 95);

                    Builder::echoUnit("Land Speeder Typhoon", 1, 12, 100);

                    Builder::echoUnit("Librarian", 1, 14, 75);

                    Builder::echoUnit("Librarian in Phobos Armour", 1, 14, 75);

                    Builder::echoUnit("Librarian in Terminator Armour", 1, 14, 90);

                    Builder::echoUnit("Librarian in Jump Pack", 1, 14, 75);

                    Builder::echoUnit("Lieutenant", 1, 14, 80);

                    Builder::echoUnit("Lieutenant in Phobos Armour", 1, 14, 60);

                    Builder::echoUnit("Lieutenant in Reiver Armour", 1, 14, 60);

                    Builder::echoUnit("Lieutenant with Combi-weapon", 1, 14, 70);

                    Builder::echoUnit("Marneus Calgar", 3, 12, 185);

                    Builder::new("Outrider Squad")
                        ->model(3, 12, 105)
                        ->model(6, 12, 210)
                        ->modelCustom("Invader ATV", 10, +70)
                        ->echo();

                    Builder::echoUnit("Pedro Kantor", 1, 14, 95);

                    Builder::echoUnit("Predator Annihilator", 1, 12, 130);

                    Builder::echoUnit("Predator Destructor", 1, 12, 130);

                    Builder::echoUnit("Primaris Ancient", 1, 14, 55);

                    Builder::echoUnit("Primaris Apothecary", 1, 14, 55);

                    Builder::echoUnit("Primaris Captain", 1, 14, 80);

                    Builder::echoUnit("Primaris Chaplain", 1, 14, 65);

                    Builder::echoUnit("Primaris Company Champion", 1, 14, 55);

                    Builder::echoUnit("Primaris Librarian", 1, 14, 70);

                    Builder::echoUnit("Primaris Lieutenant", 1, 14, 75);

                    Builder::echoUnit("Primaris Techmarine", 1, 14, 65);

                    Builder::echoUnit("Razorback", 1, 12, 100);

                    Builder::echoUnit("Redemptor Dreadnought", 1, 12, 210);

                    Builder::new("Reiver Squad")
                        ->model(5, 14, 85)
                        ->model(10, 10, 170)
                        ->echo();

                    Builder::new("Relic Terminator Squad")
                        ->model(5, 12, 200)
                        ->model(10, 10, 400)
                        ->echo();

                    Builder::echoUnit("Repulsor", 1, 12, 195);

                    Builder::echoUnit("Repulsor Executioner", 1, 12, 230);

                    Builder::echoUnit("Rhino", 1, 14, 75);

                    Builder::echoUnit("Roboute Guilliman", 1, 12, 380);

                    Builder::new("Scout Bike Squad")
                        ->model(3, 14, 75)
                        ->model(6, 12, 150)
                        ->echo();

                    Builder::new("Scout Sniper Squad")
                        ->model(3, 14, 75)
                        ->model(6, 12, 150)
                        ->echo();

                    Builder::new("Scout Squad")
                        ->model(3, 14, 65)
                        ->model(6, 12, 130)
                        ->echo();

                    Builder::echoUnit("Sergeant Chronus", 1, 14, 75);

                    Builder::echoUnit("Sergeant Telion", 1, 14, 70);

                    Builder::echoUnit("Stalker", 1, 12, 140);

                    Builder::new("Sternguard Vetern Squad")
                        ->model(5, 12, 110)
                        ->model(10, 10, 220)
                        ->echo();

                    Builder::echoUnit("Storm Speeder Hailstrike", 1, 12, 140);

                    Builder::echoUnit("Storm Speeder Hammerstrike", 1, 12, 160);

                    Builder::echoUnit("Storm Speeder Thunderstrike", 1, 12, 170);

                    Builder::echoUnit("Stormhawk Interceptor", 1, 12, 165);

                    Builder::echoUnit("Stormraven Gunship", 1, 12, 255);

                    Builder::echoUnit("Stormtalon Gunship", 1, 12, 175);

                    Builder::echoUnit("Suppressor Squad", 3, 14, 85);

                    Builder::echoUnit("Tactical Squad", 10, 10, 160);

                    Builder::echoUnit("Techmarine", 1, 14, 70);

                    Builder::new("Terminator Assault Squad")
                        ->model(5, 12, 205)
                        ->model(10, 10, 410)
                        ->echo();

                    Builder::new("Terminator Squad")
                        ->model(5, 12, 190)
                        ->model(10, 10, 380)
                        ->echo();

                    Builder::echoUnit("Thunderfire Cannon", 2, 14, 90);

                    Builder::echoUnit("Tor Garadon", 1, 14, 90);

                    Builder::echoUnit("Tyrannic War Veterans", 5, 14, 85);

                    Builder::echoUnit("Uriel Ventris", 1, 14, 75);

                    Builder::new("Vanguard Veteran Squad")
                        ->model(5, 12, 120)
                        ->model(10, 10, 240)
                        ->echo();

                    Builder::new("Vanguard Vetern Squad with Jump Packs")
                        ->model(5, 12, 105)
                        ->model(10, 10, 210)
                        ->echo();

                    Builder::echoUnit("Vinicator", 1, 12, 190);

                    Builder::echoUnit("Vulkan He'stan", 1, 14, 80);

                    Builder::echoUnit("Whirlwind", 1, 12, 150);
                    ?>

                    <h2>Forge World Units</h2>

                    <?php
                    Builder::echoUnit("Astraeus", 1, 12, 525);

                    Builder::echoUnit("Thunderhawk Gunship", 1, 12, 840);
                    ?>
                </ul>
            </form>

        </div>
        <div class="pad"></div>
    </div>
</body>

</html>