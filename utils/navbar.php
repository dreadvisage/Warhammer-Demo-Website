<?php
$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";
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
    echo '<script type = "text/javascript" src="' . getDirsUp($num_dirs_up) . 'js/navbar-dropdown-manager.js"></script>';
    echo '<div id="navbar">
    <div id="inner1">
        <a href="' . getDirsUp($num_dirs_up) . 'index.php"><img id="warhammer-logo" src="' . getDirsUp($num_dirs_up) . 'images/warhammer-logo-black.png" alt="Warhammer Logo"></a>
    </div>
    <div id="inner2">
        <ul>
            <li><a id="nav-link" href="' . getDirsUp($num_dirs_up) . 'index.php">Home</a></li>
            <li>
                <div class="dropdown">
                    <a id="nav-link" href="' . getDirsUp($num_dirs_up) . 'factions.php">Factions</a>
                    <div id="factions-dropdown" class="dropdown-content">
                        <!--Calculate the initial layout of the dropdown when the navbar is loaded-->
                        <script>window.addEventListener("resize", resizeDropdownMonitor("factions-dropdown", ' . $num_dirs_up . ')); calculateDropdownLayout("factions-dropdown", ' . $num_dirs_up . ');</script>
                    </div>
                </div>
            </li>
            <li><a id="nav-link" href="' . getDirsUp($num_dirs_up) . 'about.php">About</a></li>';
            if (isLoggedIn()) {
                echo 
                '<li>
                    <div class="dropdown">
                    <a id="nav-link" href="' . getDirsUp($num_dirs_up) . 'points.php">Points</a>
                        <div id="points-dropdown" class="dropdown-content">
                            <script>window.addEventListener("resize", resizeDropdownMonitor("points-dropdown", ' . $num_dirs_up . ')); calculateDropdownLayout("points-dropdown", ' . $num_dirs_up . ');</script>
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

