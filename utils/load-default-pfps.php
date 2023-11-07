<?php
/* The 'DOCUMENT_ROOT' for XAMPP is .../XAMPP/htdocs . But we need to follow the symlink we created. 
So we add on /project . Then wherever the 'project' folder is, we go up one directory. And then we are
able to access the required folder from our project root. We do this because not every file that 
includes/requires this php file, has the same amount of directories to navigate. So instead, we just 
use PHP's built-in tools to navigate from the 'DOCUMENT_ROOT' instead which is always a uniform distance.*/
$config_path = $_SERVER['DOCUMENT_ROOT'];
$config_path .= "/project/../utils/config.php";

$session_start_path = $_SERVER['DOCUMENT_ROOT'];
$session_start_path .= "/project/../utils/session-start.php";

require_once $config_path;
require_once $session_start_path;

$query = "SELECT * FROM default_pfps";
$results = $mysqli->query($query);

echo '<table class="image-table">';
echo '<input id="db-pfp-choice" type="hidden" name="pfpChoice" value="">';
echo '<tr>';
$i = 0;
while ($row_default_pfps = mysqli_fetch_array($results)) {
    if ($i % 3 == 0 && $i != 0) {
        echo '</tr>';
        
        echo '<tr>';
    }

    $p = $row_default_pfps['pfp_path'];
    /* Holy God is this ugly. I plan to clean this up, but I'll give the run down on what it does. It's an anonymous function that can run inline with HTML. Never do this
    unless you want to offend God. At the very end, "return true" is needed in order for PHP to work after it. PHP form submit request will not occur unless that is set to
    true. */
    $js = "(function() {document.getElementById('db-pfp-choice').value = '" . $p . "'; console.log('Done');})();return true;";

    echo '<td><input type="image" src="../' . $p . '" alt="' . $p . '" onclick="' . $js . '"></td>';
    
    if ($i == 7) {
        // TODO, currently have this as a do-nothing input
        echo '<td><img src="../images/file-upload-icon2.png" alt="file-upload-icon2.png"></td>';
        break;
    }

    $i++;
}
echo '</table>';


?>