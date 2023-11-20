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
    echo '<script type="text/javascript" src="' . getDirsUp($num_dirs_up) . 'js/navbar-dropdown-manager.js"></script>';
    echo '<script type="text/javascript" src="' . getDirsUp($num_dirs_up) . 'js/live-search.js"></script>';
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
        <div id="search-suggestions-dropdown">
            <input id="search-bar" type="text" placeholder="Search...">
                <div id="search-suggestions" class="search-dropdown-content"></div>
                <script>registerSearchBarListeners(\'search-suggestions-dropdown\', \'search-bar\', \'search-suggestions\', ' . $num_dirs_up . ')</script>
        </div>
    </div>
    <div class="inner4">
        <img class="search-icon" src="' . getDirsUp($num_dirs_up) . 'images/search-bar-icon.png" alt="Search Icon">
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

    echoAltNavbar($num_dirs_up);
}

function echoAltNavbar($num_dirs_up) {
    echo '<script type = "text/javascript" src="' . getDirsUp($num_dirs_up) . 'js/alt-navbar-three-line-menu.js"></script>';

    /* Because we can't add an event listener to an html element until after it loads, we instead move the registering of the events until after the 
    entire window has loaded. This ensure that the elements are present in the document when we register event listeners. These listeners solely govern
    how the menu can open and close. */
    echo '<script>window.addEventListener("load", registerThreeLineMenuListeners);</script>';

    echo '<div id="alt-navbar">
    <div class="alt-inner1">
        <div class="alt-dropdown">
            <button id="three-line-menu-btn"><img class="three-line-icon" src="' . getDirsUp($num_dirs_up) . 'images/three-line-icon.png" alt="Menu Button"></button>
            <div id="three-line-dropdown" class="alt-dropdown-content">
                <a href="' . getDirsUp($num_dirs_up) . 'factions.php">Factions</a>
                <a href="' . getDirsUp($num_dirs_up) . 'about.php">About</a>
                <a href="' . getDirsUp($num_dirs_up) . 'points.php">Points</a>
            </div>
        </div>
    </div>
    <div class="alt-inner2">
        <a href="' . getDirsUp($num_dirs_up) . 'index.php"><img class="alt-warhammer-logo" src="' . getDirsUp($num_dirs_up) . 'images/warhammer-logo-black.png" alt="Warhammer Logo"></a>
    </div>
    <div class="alt-inner-3-4-wrapper">
        <div class="alt-inner3">
            <div id="alt-search-suggestions-dropdown">
                <button class="alt-search-btn" onclick="document.getElementById(\'alt-search-bar\').style.display=\'flex\'"><img class="alt-search-icon" src="' . getDirsUp($num_dirs_up) . 'images/search-bar-icon.png" alt="Search Icon"></button>
                <input id="alt-search-bar" type="text" placeholder="Search...">
                <script>registerAltSearchBarListeners(\'alt-search-suggestions-dropdown\', \'alt-search-bar\', \'alt-search-suggestions\', ' . $num_dirs_up . ')</script>
                <div id="alt-search-suggestions" class="alt-search-dropdown-content"></div>
            </div>
        </div>
        <div class="alt-inner4">';
            if (isLoggedIn()) {
                echo '<a href="' . getDirsUp($num_dirs_up) . 'account/login.php"><img class="alt-account-icon" src="' . 
                getDirsUp($num_dirs_up) .
                getUserPfp() . 
                '" alt="Account Logo"></a>';
            } else {
                echo '<a href="' . getDirsUp($num_dirs_up) . 'account/login.php"><img class="alt-account-icon" src="' . getDirsUp($num_dirs_up) . 'images/account-logo-skull.svg" alt="Account Logo"></a>';
            }
            echo '</div>
        </div>
    </div>';
}

?>

