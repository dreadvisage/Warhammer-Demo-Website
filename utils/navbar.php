<?php
$session_start_path = $_SERVER['DOCUMENT_ROOT'];
$session_start_path .= "/project/../utils/session-start.php";

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";

require_once $session_start_path;
require_once $is_logged_in_path;
require_once 'get-user-pfp.php';

function getDirsUp($num_dirs_up) {
    $dirs_up = "";
    for ($i = 0; $i < $num_dirs_up; ++$i) {
        $dirs_up .= "../";
    }
    return $dirs_up;
}

function echoNavbar($num_dirs_up) {
    echo '<div id="navbar">
    <div id="inner1">
        <a href="' . getDirsUp($num_dirs_up) . 'index.php"><img id="warhammer-logo" src="' . getDirsUp($num_dirs_up) . 'images/warhammer-logo-black.png" alt="Warhammer Logo"></a>
    </div>
    <div id="inner2">
        <ul>
            <li><a href="' . getDirsUp($num_dirs_up) . 'index.php">Home</a></li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">Factions</button>
                    <div class="dropdown-content">
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/space-marine.php">Space Marines</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/necrons.php">Necrons</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/adepta-sororitas.php">Adepta Sororitas</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/adeptus-custodes.php">Adeptus Custodes</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/adeptus-mechanicus.php">Adeptus Mechanicus</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/adeptus-titanicus.php">Adeptus Titanicus</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/aeldari.php">Aeldari</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/agents-of-imperium.php">Agents of the Imperium</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/astra-militarum.php">Astra Militarum</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/black-templars.php">Black Templars</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/blood-angels.php">Blood Angels</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/chaos-daemons.php">Chaos Daemons</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/chaos-knights.php">Chaos Knights</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/chaos-marines.php">Chaos Space Marines</a>
                        <a href="' . getDirsUp($num_dirs_up) . 'factions/dark-angels.php">Dark Angels</a>
                    </div>
                </div>
            </li>
            <li><a href="' . getDirsUp($num_dirs_up) . 'about.php">About</a></li>';
            if (isLoggedIn()) {
                echo 
                '<li>
                    <div class="dropdown">
                        <button class="dropbtn">Points</button>
                        <div class="dropdown-content">
                            <a href="' . getDirsUp($num_dirs_up) . 'points/votann-points.php">Leagues of Votann</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/sororitas-points.php">Adepta Sororitas</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/custodes-points.php">Adeptus Custodes</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/mechanicus-points.php">Adeptus Mechanicus</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/titanicus-points.php">Adeptus Titanicus</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/aeldari-points.php">Aeldari</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/agents-points.php">Agents of the Imperium</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/militarum-points.php">Astra Militarum</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/templars-points.php">Black Templars</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/blood-angels-points.php">Blood Angels</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/daemons-points.php">Chaos Daemons</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/chaos-knights-points.php">Chaos Knights</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/chaos-marines-points.php">Chaos Space Marines</a>
                            <a href="' . getDirsUp($num_dirs_up) . 'points/dark-angels-points.php">Dark Angels</a>
                        </div>
                    </div>
                </li>';
            }
            
        echo '</ul>
    </div>
    <div id="inner3">
        <input type="text" placeholder="Search...">
    </div>
    <div id="inner4">
        <a href="' . getDirsUp($num_dirs_up) . 'search-sample.php"><img id="search-icon" src="' . getDirsUp($num_dirs_up) . 'images/search-bar-icon.png" alt="Search Icon"></a>
    </div>
    <div id="inner5">';
    if (isLoggedIn()) {
        echo '<a href="' . getDirsUp($num_dirs_up) . 'account/login.php"><img id="account-icon" src="' . 
        getDirsUp($num_dirs_up) .
        getUserPfp() . 
        '" alt="Account Logo"></a>';
    } else {
        echo '<a href="' . getDirsUp($num_dirs_up) . 'account/login.php"><img id="account-icon" src="' . getDirsUp($num_dirs_up) . 'images/account-logo-skull.svg" alt="Account Logo"></a>';
    }
    echo '</div>
    </div>';

}

?>

