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
        <title>Aeldari</title>
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
                
                <h2>Aeldari</h2>
                <hr>

                <form action="insert-into-unit-table.php" method="post">
                  <input id="name" type="hidden" name="name" value="">
                  <input id="models" type="hidden" name="models" value="">
                  <input id="points" type="hidden" name="points" value="">
                  <ul style = "list-style: none; color:darkred">
                    
                    <?php
                    echo_html_unit_start("Asurmen");
                    echo_html_unit_model("Asurmen", 1, 12, 135);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Autarch");
                    echo_html_unit_model("Autarch", 1, 14, 75);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Autarch Skyrunner");
                    echo_html_unit_model("Autarch Skyrunner", 1, 14, 90);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Autarch Wayleaper");
                    echo_html_unit_model("Autarch Wayleaper", 1, 12, 115);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Avatar of Khaine");
                    echo_html_unit_model("Avatar of Khaine", 1, 12, 335);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Baharroth");
                    echo_html_unit_model("Baharroth", 1, 12, 125);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Corsair Voidreavers");
                    echo_html_unit_model("Corsair Voidreavers", 5, 14, 70);
                    echo_html_unit_model("Corsair Voidreavers", 10, 10, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Corsair Voidscarred");
                    echo_html_unit_model("Corsair Voidscarred", 5, 14, 90);
                    echo_html_unit_model("Corsair Voidscarred", 10, 10, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Crimson Hunter");
                    echo_html_unit_model("Crimson Hunter", 1, 12, 160);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Dark Reapers");
                    echo_html_unit_model("Dark Reapers", 5, 14, 80);
                    echo_html_unit_model("Dark Reapers", 10, 10, 160);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Death Jester");
                    echo_html_unit_model("Death Jester", 1, 14, 90);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Dire Avengers");
                    echo_html_unit_model("Dire Avengers", 5, 14, 70);
                    echo_html_unit_model("Dire Avengers", 10, 10, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Eldrad Ulthran");
                    echo_html_unit_model("Eldrad Ulthran", 1, 12, 110);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Falcon");
                    echo_html_unit_model("Falcon", 1, 12, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Farseer");
                    echo_html_unit_model("Farseer", 1, 14, 80);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Farseer Skyrunner");
                    echo_html_unit_model("Farseer Skyrunner", 1, 14, 90);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Fire Dragon");
                    echo_html_unit_model("Fire Dragon", 5, 14, 85);
                    echo_html_unit_model("Fire Dragon", 10, 10, 170);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Fire Prism");
                    echo_html_unit_model("Fire Prism", 1, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Fuegan");
                    echo_html_unit_model("Fuegan", 1, 12, 115);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Guardian Defenders");
                    echo_html_unit_model("Guardian Defenders", 11, 10, 110);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Hemlock Wraithfighter");
                    echo_html_unit_model("Hemlock Wraithfighter", 1, 12, 155);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Howling Banshees");
                    echo_html_unit_model("Howling Banshees", 5, 14, 85);
                    echo_html_unit_model("Howling Banshees", 10, 10, 170);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Illic Nightspear");
                    echo_html_unit_model("Illic Nightspear", 1, 14, 70);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Jain Zar");
                    echo_html_unit_model("Jain Zar", 1, 12, 105);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Karandras");
                    echo_html_unit_model("Karandras", 1, 12, 100);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Maugan Ra");
                    echo_html_unit_model("Maugan Ra", 1, 12, 130);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Night Spinner");
                    echo_html_unit_model("Night Spinner", 1, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Prince Yriel");
                    echo_html_unit_model("Prince Yriel", 1, 12, 100);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Rangers");
                    echo_html_unit_model("Rangers", 5, 14, 55);
                    echo_html_unit_model("Rangers", 10, 10, 110);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Shadowseer");
                    echo_html_unit_model("Shadowseer", 1, 14, 60);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Shining Spears");
                    echo_html_unit_model("Shining Spears", 3, 12, 120);
                    echo_html_unit_model("Shining Spears", 6, 12, 240);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Shroud Runners");
                    echo_html_unit_model("Shroud Runners", 3, 14, 80);
                    echo_html_unit_model("Shroud Runners", 6, 12, 160);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Skyweavers");
                    echo_html_unit_model("Skyweavers", 2, 14, 95);
                    echo_html_unit_model("Skyweavers", 4, 12, 190);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Solitaire");
                    echo_html_unit_model("Solitaire", 1, 12, 115);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Spiritseer");
                    echo_html_unit_model("Spiritseer", 1, 14, 65);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Starweaver");
                    echo_html_unit_model("Starweaver", 1, 14, 80);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Storm Guardians");
                    echo_html_unit_model("Storm Guardians", 11, 10, 115);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Striking Sqorpions");
                    echo_html_unit_model("Striking Sqorpions", 5, 14, 75);
                    echo_html_unit_model("Striking Sqorpions", 10, 10, 150);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Support Weapons");
                    echo_html_unit_model("Support Weapons", 1, 12, 125);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Swooping Hawks");
                    echo_html_unit_model("Swooping Hawks", 5, 14, 75);
                    echo_html_unit_model("Swooping Hawks", 10, 10, 150);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("The Visarch");
                    echo_html_unit_model("The Visarch", 1, 14, 90);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("The Yncarnes");
                    echo_html_unit_model("The Yncarnes", 1, 12, 350);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Troupe");
                    echo_html_unit_model("Troupe", 5, 14, 75);
                    echo_html_unit_model("Troupe", 6, 14, 90);
                    echo_html_unit_model("Troupe", 11, 10, 165);
                    echo_html_unit_model("Troupe", 12, 10, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Troupe Master");
                    echo_html_unit_model("Troupe Master", 1, 14, 55);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Voidweaver");
                    echo_html_unit_model("Voidweaver", 1, 12, 125);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Vyper");
                    echo_html_unit_model("Vyper", 1, 14, 85);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("War Walker");
                    echo_html_unit_model("War Walker", 1, 12, 110);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Warlock");
                    echo_html_unit_model("Warlock", 1, 14, 45);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Warlock Conclave");
                    echo_html_unit_model("Warlock Conclave", 2, 14, 60);
                    echo_html_unit_model("Warlock Conclave", 4, 12, 120);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Warlock Skyrunner");
                    echo_html_unit_model("Warlock Skyrunner", 1, 14, 55);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Warlock Skyrunner Conclave");
                    echo_html_unit_model("Warlock Skyrunner Conclave", 2, 12, 100);
                    echo_html_unit_model("Warlock Skyrunner Conclave", 3, 12, 150);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Warp Spiders");
                    echo_html_unit_model("Warp Spiders", 5, 12, 115);
                    echo_html_unit_model("Warp Spiders", 10, 10, 230);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Wave Serpent");
                    echo_html_unit_model("Wave Serpent", 1, 12, 120);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Webway Gate");
                    echo_html_unit_model("Webway Gate", 2, 12, 220);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Windriders");
                    echo_html_unit_model("Windriders", 3, 14, 80);
                    echo_html_unit_model("Windriders", 6, 12, 160);
                    echo_html_unit_model("Windriders", 9, 12, 240);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Wraithblades");
                    echo_html_unit_model("Wraithblades", 5, 12, 170);
                    echo_html_unit_model("Wraithblades", 10, 10, 340);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Wraithguard");
                    echo_html_unit_model("Wraithguard", 5, 12, 170);
                    echo_html_unit_model("Wraithguard", 10, 10, 340);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Wraithknight");
                    echo_html_unit_model("Wraithknight", 1, 12, 510);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Wraithlord");
                    echo_html_unit_model("Wraithlord", 1, 12, 160);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Yvraine");
                    echo_html_unit_model("Yvraine", 1, 12, 100);
                    echo_html_unit_end();
                    ?>

                    <br>
                    <h2>Forge World Units</h2>

                    <?php
                    echo_html_unit_start("Cobra");
                    echo_html_unit_model("Cobra", 1, 12, 415);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Hornet");
                    echo_html_unit_model("Hornet", 1, 12, 100);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Irillyth");
                    echo_html_unit_model("Irillyth", 1, 12, 105);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Lynx");
                    echo_html_unit_model("Lynx", 1, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Nightwing");
                    echo_html_unit_model("Nightwing", 1, 12, 150);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Scorpion");
                    echo_html_unit_model("Scorpion", 1, 12, 410);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Skathach Wraithknight");
                    echo_html_unit_model("Skathach Wraithknight", 1, 12, 490);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Shadow Specters");
                    echo_html_unit_model("Shadow Specters", 5, 14, 95);
                    echo_html_unit_model("Shadow Specters", 10, 10, 190);
                    echo_html_custom_unit_model("Shadow Specters", "Exarch", 16, "+30");
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Phantom Titan");
                    echo_html_unit_model("Phantom Titan", 1, 10, 2100);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Revenant Titan");
                    echo_html_unit_model("Revenant Titan", 1, 10, 1100);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Warp Hunter");
                    echo_html_unit_model("Warp Hunter", 1, 12, 145);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Wraithseer");
                    echo_html_unit_model("Wraithseer", 1, 12, 160);
                    echo_html_unit_end();
                    ?>
                </ul>
                </form>
                
                
            </div>
            <div class="pad"></div>
        </div>
    </body>
</html>