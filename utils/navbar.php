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
    <div class="inner1">
        <a href="' . getDirsUp($num_dirs_up) . 'index.php"><img class="warhammer-logo" src="' . getDirsUp($num_dirs_up) . 'images/warhammer-logo-black.png" alt="Warhammer Logo"></a>
    </div>
    <div class="inner2">
        <ul>
            <li><a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'index.php">Home</a></li>
            <li>
                <div class="dropdown">
                    <a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'factions.php">Factions</a>
                    <div id="factions-dropdown" class="dropdown-content">
                        <!--Add resize listener to window and calculate the initial layout-->
                        <script>window.addEventListener("resize", function(){windowResizeMonitor("factions-dropdown", ' . $num_dirs_up . ');}); calculateDropdownLayout("factions-dropdown", ' . $num_dirs_up . ');</script>
                    </div>
                </div>
            </li>
            <li><a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'about.php">About</a></li>';
            if (isLoggedIn()) {
                echo 
                '<li>
                    <div class="dropdown">
                    <a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'points.php">Points</a>
                        <div id="points-dropdown" class="dropdown-content">
                            <!--Add resize listener to window and calculate the initial layout-->
                            <script>window.addEventListener("resize", function(){windowResizeMonitor("points-dropdown", ' . $num_dirs_up . ');}); calculateDropdownLayout("points-dropdown", ' . $num_dirs_up . ');</script>
                        </div>
                    </div>
                </li>';
            }
            
        echo '</ul>
    </div>
    <div class="inner3">
        <input type="text" placeholder="Search...">
    </div>
    <div class="inner4">
        <a href="' . getDirsUp($num_dirs_up) . 'search-sample.php"><img class="search-icon" src="' . getDirsUp($num_dirs_up) . 'images/search-bar-icon.png" alt="Search Icon"></a>
    </div>
    <div class="inner5">';
    if (isLoggedIn()) {
        echo '<a href="' . getDirsUp($num_dirs_up) . 'account/login.php"><img class="account-icon" src="' . 
        getDirsUp($num_dirs_up) .
        getUserPfp() . 
        '" alt="Account Logo"></a>';
    } else {
        echo '<a href="' . getDirsUp($num_dirs_up) . 'account/login.php"><img class="account-icon" src="' . getDirsUp($num_dirs_up) . 'images/account-logo-skull.svg" alt="Account Logo"></a>';
    }
    echo '</div>
    </div>';

}

function echoAltNavbar($num_dirs_up) {
    echo '<script type = "text/javascript" src="' . getDirsUp($num_dirs_up) . 'js/navbar-dropdown-manager.js"></script>';
    echo '<div id="alt-navbar">
    <div class="inner1">
        <a href="' . getDirsUp($num_dirs_up) . 'index.php"><img class="warhammer-logo" src="' . getDirsUp($num_dirs_up) . 'images/warhammer-logo-black.png" alt="Warhammer Logo"></a>
    </div>
    <div class="inner2">
        <ul>
            <li><a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'index.php">Home</a></li>
            <li>
                <div class="dropdown">
                    <a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'factions.php">Factions</a>
                    <div class="factions-dropdown" class="dropdown-content">
                        <!--Add resize listener to window and calculate the initial layout-->
                        <script>window.addEventListener("resize", function(){windowResizeMonitor("factions-dropdown", ' . $num_dirs_up . ');}); calculateDropdownLayout("factions-dropdown", ' . $num_dirs_up . ');</script>
                    </div>
                </div>
            </li>
            <li><a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'about.php">About</a></li>';
            if (isLoggedIn()) {
                echo 
                '<li>
                    <div class="dropdown">
                    <a class="nav-link" href="' . getDirsUp($num_dirs_up) . 'points.php">Points</a>
                        <div class="points-dropdown" class="dropdown-content">
                            <!--Add resize listener to window and calculate the initial layout-->
                            <script>window.addEventListener("resize", function(){windowResizeMonitor("points-dropdown", ' . $num_dirs_up . ');}); calculateDropdownLayout("points-dropdown", ' . $num_dirs_up . ');</script>
                        </div>
                    </div>
                </li>';
            }
            
        echo '</ul>
    </div>
    <div class="inner3">
        <input type="text" placeholder="Search...">
    </div>
    <div class="inner4">
        <a href="' . getDirsUp($num_dirs_up) . 'search-sample.php"><img class="search-icon" src="' . getDirsUp($num_dirs_up) . 'images/search-bar-icon.png" alt="Search Icon"></a>
    </div>
    <div class="inner5">';
    if (isLoggedIn()) {
        echo '<a href="' . getDirsUp($num_dirs_up) . 'account/login.php"><img class="account-icon" src="' . 
        getDirsUp($num_dirs_up) .
        getUserPfp() . 
        '" alt="Account Logo"></a>';
    } else {
        echo '<a href="' . getDirsUp($num_dirs_up) . 'account/login.php"><img class="account-icon" src="' . getDirsUp($num_dirs_up) . 'images/account-logo-skull.svg" alt="Account Logo"></a>';
    }
    echo '</div>
    </div>';
}

?>

