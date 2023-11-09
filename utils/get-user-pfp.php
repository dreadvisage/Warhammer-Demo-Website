<?php 
$config_path = $_SERVER['DOCUMENT_ROOT'];
$config_path .= "/project/../utils/config.php";
require_once $config_path;

function getUserPfp() {
    global $mysqli;

    $query = "SELECT pfp_path FROM users WHERE username = '" . $_SESSION['username'] . "'";
    $results = $mysqli->query($query);
    $user_pfp_row = mysqli_fetch_array($results);
    $pfp_path = $user_pfp_row['pfp_path'];

    return $pfp_path;
}
?>