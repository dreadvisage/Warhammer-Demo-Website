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

