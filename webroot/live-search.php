<?php
session_start();

$config_path = $_SERVER['DOCUMENT_ROOT'];
$config_path .= "/project/../utils/config.php";
require_once $config_path;

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";
require_once $is_logged_in_path;

require_once "../utils/debug_to_console.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_str = $_REQUEST["q"];
    $search_str = strtolower($search_str);
    $search_results = array();

    $query = "SELECT * FROM search_suggestions";
    $results = $mysqli->query($query);
    $i = 0;
    while($row = mysqli_fetch_array($results)) {
        $suggestionID = $row['suggestionID'];
        $suggestionMatchOn = $row['suggestionMatchOn'];
        $suggestionDisplay = $row['suggestionDisplay'];
        $suggestionLink = $row['suggestionLink'];
        $sectionTitle = $row['sectionTitle'];
        $requireLogin = $row['requireLogin'];
         
        if ($requireLogin && isNotLoggedIn()) {
            continue;
        } else {
            $search_results[$i++] = [$suggestionMatchOn, $suggestionDisplay, $sectionTitle, $suggestionLink];
        }
    }

    echo json_encode($search_results);
}
    
    
?>