<?php
$config_path = $_SERVER['DOCUMENT_ROOT'];
$config_path .= "/project/../utils/config.php";

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";

require_once $config_path;
require_once $is_logged_in_path;

$debug_to_console = $_SERVER['DOCUMENT_ROOT'];
$debug_to_console .= "/project/../utils/debug_to_console.php";
require_once $debug_to_console;

if (isNotLoggedIn()) {
    header("location: login.php");
    exit;
}

function echo_unit_table_data() {
    global $mysqli;

    $query = 'SELECT * FROM unit_table WHERE UserID="'. $_SESSION["UserID"] .'"';
    $results = $mysqli->query($query);
    while($unit_table_row = mysqli_fetch_array($results)) {
        $name = $unit_table_row['name'];
        $models = $unit_table_row['models'];
        $points = $unit_table_row['points'];

        echo '<p>' . 'Unit Name:' . $name  . ', Num Models:' . $models . ', Unit Points:' . $points . '</p>';
    }
}

?>