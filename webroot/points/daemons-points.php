<?php

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";
require_once $is_logged_in_path;

require_once 'create-unit-helper.php';
require_once 'insert-into-unit-table.php';;

if(isNotLoggedIn()){
  header("location: ../account/login.php");
  exit;
}

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
                  <ul style = "list-style: none; color:darkred">
                  <?php
                  echo_html_unit_start("Beast of Nurgle");
                  echo_html_unit_model("Beast of Nurgle", 1, 14, 70);
                  echo_html_unit_model("Beast of Nurgle", 2, 12, 140);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Be'lakor");
                  echo_html_unit_model("Be'lakor", 1, 12, 350);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Bloodcrushers");
                  echo_html_unit_model("Bloodcrushers", 3, 12, 120);
                  echo_html_unit_model("Bloodcrushers", 6, 12, 240);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Bloodletters");
                  echo_html_unit_model("Bloodletters", 10, 10, 140);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Bloodmaster");
                  echo_html_unit_model("Bloodmaster", 1, 14, 75);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Bloodthirster");
                  echo_html_unit_model("Bloodthirster", 1, 12, 320);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Blue Horrors");
                  echo_html_unit_model("Blue Horrors", 1, 12, 125);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Burning Chariot");
                  echo_html_unit_model("Burning Chariot", 1, 12, 115);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Changecaster");
                  echo_html_unit_model("Changecaster", 1, 14, 65);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Contorted Epitome");
                  echo_html_unit_model("Contorted Epitome", 1, 14, 85);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Daemon Prince of Chaos");
                  echo_html_unit_model("Daemon Prince of Chaos", 1, 12, 200);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Daemon Prince of Chaos with Winges");
                  echo_html_unit_model("Daemon Prince of Chaos with Winges", 1, 12, 195);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Daemonettes");
                  echo_html_unit_model("Daemonettes", 1, 12, 120);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Epidemius");
                  echo_html_unit_model("Epidemius", 1, 14, 85);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Exalted Flamer");
                  echo_html_unit_model("Exalted Flamer", 1, 14, 70);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Exalted Seeker Chariot");
                  echo_html_unit_model("Exalted Seeker Chariot", 1, 12, 115);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Fateskimmer");
                  echo_html_unit_model("Fateskimmer", 1, 12, 105);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Feculent Gnarimaw");
                  echo_html_unit_model("Feculent Gnarimaw", 1, 12, 100);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Fiends");
                  echo_html_unit_model("Fiends", 3, 12, 130);
                  echo_html_unit_model("Fiends", 6, 12, 260);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Flamers");
                  echo_html_unit_model("Flamers", 3, 14, 80);
                  echo_html_unit_model("Flamers", 6, 12, 160);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Flesh Hounds");
                  echo_html_unit_model("Flesh Hounds", 5, 14, 70);
                  echo_html_unit_model("Flesh Hounds", 10, 10, 140);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Fluxmaster");
                  echo_html_unit_model("Fluxmaster", 1, 14, 60);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Great Unclean One");
                  echo_html_unit_model("Great Unclean One", 1, 12, 250);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Hellflayer");
                  echo_html_unit_model("Hellflayer", 1, 12, 105);
                  echo_html_unit_model("Hellflayer", 2, 12, 210);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Horticulous Slimux");
                  echo_html_unit_model("Horticulous Slimux", 1, 12, 120);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Infernal Enrapturess");
                  echo_html_unit_model("Infernal Enrapturess", 1, 14, 65);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Kairos Fateweaver");
                  echo_html_unit_model("Kairos Fateweaver", 1, 12, 285);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Karanak");
                  echo_html_unit_model("Karanak", 1, 14, 75);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Keeper of Secrets");
                  echo_html_unit_model("Keeper of Secrets", 1, 12, 330);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Lord of Change");
                  echo_html_unit_model("Lord of Change", 1, 12, 260);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Nurglings");
                  echo_html_unit_model("Nurglings", 3, 14, 35);
                  echo_html_unit_model("Nurglings", 6, 14, 70);
                  echo_html_unit_model("Nurglings", 9, 12, 105);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Pink Horrors");
                  echo_html_unit_model("Pink Horrors", 10, 10, 140);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Plague Drones");
                  echo_html_unit_model("Plague Drones", 3, 12, 120);
                  echo_html_unit_model("Plague Drones", 6, 12, 240);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Plaguebearers");
                  echo_html_unit_model("Plaguebearers", 10, 10, 125);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Poxbringer");
                  echo_html_unit_model("Poxbringer", 1, 14, 65);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Rendmaster on Blood Throne");
                  echo_html_unit_model("Rendmaster on Blood Throne", 1, 12, 150);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Rotigus");
                  echo_html_unit_model("Rotigus", 1, 12, 260);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Screamers");
                  echo_html_unit_model("Screamers", 3, 14, 80);
                  echo_html_unit_model("Screamers", 6, 12, 180);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Seeker Chariot");
                  echo_html_unit_model("Seeker Chariot", 1, 14, 75);
                  echo_html_unit_model("Seeker Chariot", 2, 12, 150);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Seekers");
                  echo_html_unit_model("Seekers", 5, 14, 85);
                  echo_html_unit_model("Seekers", 10, 10, 170);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Shalaxi Helbane");
                  echo_html_unit_model("Shalaxi Helbane", 1, 12, 450);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Skarbrand");
                  echo_html_unit_model("Skarbrand", 1, 12, 345);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Skull Altar");
                  echo_html_unit_model("Skull Altar", 1, 12, 105);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Skull Cannon");
                  echo_html_unit_model("Skull Cannon", 1, 12, 105);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Skullmaster");
                  echo_html_unit_model("Skullmaster", 1, 12, 105);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Skulltaker");
                  echo_html_unit_model("Skulltaker", 1, 14, 95);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Sloppity Bilepiper");
                  echo_html_unit_model("Sloppity Bilepiper", 1, 14, 55);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Soul Grinder");
                  echo_html_unit_model("Soul Grinder", 1, 12, 200);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Spoilpox Scrivener");
                  echo_html_unit_model("Spoilpox Scrivener", 1, 14, 65);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Syll'esske");
                  echo_html_unit_model("Syll'esske", 1, 12, 120);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("The Blue Scribes");
                  echo_html_unit_model("The Blue Scribes", 1, 14, 65);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("The Changeling");
                  echo_html_unit_model("The Changeling", 1, 14, 90);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("The Masque of Slaanesh");
                  echo_html_unit_model("The Masque of Slaanesh", 1, 12, 105);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Tormenbringer on Exalted Seeker Chariot");
                  echo_html_unit_model("Tormenbringer on Exalted Seeker Chariot", 1, 12, 140);
                  echo_html_unit_end();
                  
                  echo_html_unit_start("Tranceweaver");
                  echo_html_unit_model("Tranceweaver", 1, 14, 60);
                  echo_html_unit_end();
                  
                  
                  ?>
                </ul>
                </form>
                
                
            </div>
            <div class="pad"></div>
        </div>
    </body>
</html>