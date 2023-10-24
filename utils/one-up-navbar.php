<?php
/* The 'DOCUMENT_ROOT' for XAMPP is .../XAMPP/htdocs . But we need to follow the symlink we created. 
So we add on /project . Then wherever the 'project' folder is, we go up one directory. And then we are
able to access the required folder from our project root. We do this because not every file that 
includes/requires this php file, has the same amount of directories to navigate. So instead, we just 
use PHP's built-in tools to navigate from the 'DOCUMENT_ROOT' instead which is always a uniform distance.*/
$session_start_path = $_SERVER['DOCUMENT_ROOT'];
$session_start_path .= "/project/../utils/session-start.php";

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";

require_once $session_start_path;
require_once $is_logged_in_path;
require_once 'get-user-pfp.php';

function echoUpOneNavbar() {

    if (isLoggedIn()) {
        echo '<div id="navbar">
        <div id="inner1">
            <a href="../index.php"><img id="warhammer-logo" src="../images/warhammer-logo-black.png" alt="Warhammer Logo"></a>
        </div>
        <div id="inner2">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Factions</button>
                        <div class="dropdown-content">
                            <a href="../factions/space-marine.php">Space Marines</a>
                            <a href="../factions/necrons.php">Necrons</a>
                            <a href="../factions/adepta-sororitas.php">Adepta Sororitas</a>
                        </div>
                    </div>
                </li>
                <li><a href="../about.php">About</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Points</button>
                        <div class="dropdown-content">
                            <a href="../points/votann-points.php">Leagues of Votann</a>
                            <a href="../points/sororitas-points.php">Adepta Sororitas</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id="inner3">
            <input type="text" placeholder="Search...">
        </div>
        <div id="inner4">
            <a href="search-sample.php"><img id="search-icon" src="../images/search-bar-icon.png" alt="Search Icon"></a>
        </div>
        <div id="inner5">';

        // Output buffering. Basically, instead of echoing directly out, it keeps it in the buffer.
        // Then by using require_once 'get-user-pfp.php';, we get the user-pfp and use ob_get_clean() 
        // to store the contents of the buffer inside a variable.
        

        echo '<a href="../account/login.php"><img id="account-icon" src="../' . getUserPfp() . '" alt="Account Logo"></a>';
        echo '</div>
        </div>';
    } else {
        echo '<div id="navbar">
        <div id="inner1">
            <a href="../index.php"><img id="warhammer-logo" src="../images/warhammer-logo-black.png" alt="Warhammer Logo"></a>
        </div>
        <div id="inner2">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Factions</button>
                        <div class="dropdown-content">
                        <a href="../factions/space-marine.php">Space Marines</a>
                        <a href="../factions/necrons.php">Necrons</a>
                        <a href="../factions/adepta-sororitas.php">Adepta Sororitas</a>
                        </div>
                    </div>
                </li>
                <li><a href="../about.php">About</a></li>
            </ul>
        </div>
        <div id="inner3">
            <input type="text" placeholder="Search...">
        </div>
        <div id="inner4">
            <a href="../search-sample.php"><img id="search-icon" src="../images/search-bar-icon.png" alt="Search Icon"></a>
        </div>
        <div id="inner5">
            <a href="../account/login.php"><img id="account-icon" src="../images/account-logo-skull.svg" alt="Account Logo"></a>
    </div>
</div>';
    }
        
}

echoUpOneNavbar();



?>

