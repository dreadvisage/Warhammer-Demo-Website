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
        <title>Adeptus Custodes</title>
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
                
                <h2>Adeptus Custodes</h2>
                <hr>

                <form action="insert-into-unit-table.php" method="post">
                  <input id="name" type="hidden" name="name" value="">
                  <input id="models" type="hidden" name="models" value="">
                  <input id="points" type="hidden" name="points" value="">
                  <ul style = "list-style: none; color:darkred">
                    <?php
                    echo_html_unit_start("Aleya");
                    echo_html_unit_model("Aleya", 1, 14, 80);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Allarus Custodians");
                    echo_html_unit_model("Allarus Custodians", 2, 12, 140);
                    echo_html_unit_model("Allarus Custodians", 3, 12, 210);
                    echo_html_unit_model("Allarus Custodians", 5, 12, 350);
                    echo_html_unit_model("Allarus Custodians", 6, 12, 420);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Anathema Psykana Rhino");
                    echo_html_unit_model("Anathema Psykana Rhino", 1, 14, 75);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Blade Champion");
                    echo_html_unit_model("Blade Champion", 1, 12, 120);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Custodian Guard");
                    echo_html_unit_model("Custodian Guard", 4, 12, 200);
                    echo_html_unit_model("Custodian Guard", 5, 12, 250);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Custodian Wardens");
                    echo_html_unit_model("Custodian Wardens", 4, 12, 220);
                    echo_html_unit_model("Custodian Wardens", 5, 12, 275);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Knight-Centura");
                    echo_html_unit_model("Knight-Centura", 1, 14, 75);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Prosecutors");
                    echo_html_unit_model("Prosecutors", 4, 14, 40);
                    echo_html_unit_model("Prosecutors", 5, 14, 50);
                    echo_html_unit_model("Prosecutors", 9, 14, 90);
                    echo_html_unit_model("Prosecutors", 10, 10, 100);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Shield-Captain");
                    echo_html_unit_model("Shield-Captain", 4, 12, 220);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Shield-Captain in Allarus Terminator Armour");
                    echo_html_unit_model("Shield-Captain in Allarus Terminator Armour", 1, 12, 140);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Shield-Captain on Dawneagle Jetbike");
                    echo_html_unit_model("Shield-Captain on Dawneagle Jetbike", 1, 12, 180);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Trajann Valoris");
                    echo_html_unit_model("Trajann Valoris", 1, 12, 160);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Valerian");
                    echo_html_unit_model("Valerian", 1, 12, 115);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Venerable Contemptor Dreadnought");
                    echo_html_unit_model("Venerable Contemptor Dreadnought", 1, 12, 185);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Venerable Land Raider");
                    echo_html_unit_model("Venerable Land Raider", 1, 12, 240);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Vertus Praetors");
                    echo_html_unit_model("Vertus Praetors", 2, 12, 160);
                    echo_html_unit_model("Vertus Praetors", 3, 13, 240);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Vigilators");
                    echo_html_unit_model("Vigilators", 4, 14, 50);
                    echo_html_unit_model("Vigilators", 5, 15, 65);
                    echo_html_unit_model("Vigilators", 9, 13, 115);
                    echo_html_unit_model("Vigilators", 10, 11, 130);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Witchseekers");
                    echo_html_unit_model("Witchseekers", 4, 14, 50);
                    echo_html_unit_model("Witchseekers", 5, 15, 65);
                    echo_html_unit_model("Witchseekers", 9, 13, 115);
                    echo_html_unit_model("Witchseekers", 10, 11, 130);
                    echo_html_unit_end();
                    ?>
                    <h2>Forge World Units</h2>
                    <?php
                    echo_html_unit_start("Agamatus Custodians");
                    echo_html_unit_model("Agamatus Custodians", 3, 12, 240);
                    echo_html_unit_model("Agamatus Custodians", 6, 12, 480);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Aquilon Custodians");
                    echo_html_unit_model("Aquilon Custodians", 3, 12, 210);
                    echo_html_unit_model("Aquilon Custodians", 6, 12, 420);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Ares Gunship");
                    echo_html_unit_model("Ares Gunship", 1, 12, 240);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Caladius Grav-tank");
                    echo_html_unit_model("Caladius Grav-tank", 1, 12, 215);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Contemptor-Achillus Dreadnought");
                    echo_html_unit_model("Contemptor-Achillus Dreadnought", 1, 12, 165);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Contemptor-Galatus Dreadnought");
                    echo_html_unit_model("Contemptor-Galatus Dreadnought", 1, 12, 175);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Coronus Grav-carrier");
                    echo_html_unit_model("Coronus Grav-carrier", 1, 12, 200);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Custodian Guard with Adrasite and Pyrithite Spears");
                    echo_html_unit_model("Custodian Guard with Adrasite and Pyrithite Spears", 5, 12, 300);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Orion Assualt Dropship");
                    echo_html_unit_model("Orion Assualt Dropship", 1, 12, 690);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Pallas Grav-attack");
                    echo_html_unit_model("Pallas Grav-attack", 1, 12, 120);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Sagittarum Custodians");
                    echo_html_unit_model("Sagittarum Custodians", 5, 12, 225);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Telemon Heavy Dreadnought");
                    echo_html_unit_model("Telemon Heavy Dreadnought", 1, 12, 235);
                    echo_html_unit_end();
                    
                    echo_html_unit_start("Venatari Custodians");
                    echo_html_unit_model("Venatari Custodians", 3, 12, 200);
                    echo_html_unit_model("Venatari Custodians", 6, 12, 400);
                    echo_html_unit_end();
                    
                    
                    ?>
                </ul>
                </form>
                
                
            </div>
            <div class="pad"></div>
        </div>
    </body>
</html>