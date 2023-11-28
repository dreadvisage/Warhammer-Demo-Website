<?php
session_start();

$config_path = $_SERVER['DOCUMENT_ROOT'];
$config_path .= "/project/../utils/config.php";

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";

require_once $config_path;
require_once $is_logged_in_path;

if (isNotLoggedIn()) {
    header("location: ../../account/login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = 'SELECT * FROM unit_table WHERE UserID="'. $_SESSION["UserID"] .'"';
    $results = $mysqli->query($query);
    
    $data = array();
    
    $total_points = 0;
    $i = 0;
    while($unit_table_row = mysqli_fetch_array($results)) {
        $faction = $unit_table_row['faction'];
        $name = $unit_table_row['name'];
        $models = $unit_table_row['models'];
        $points = $unit_table_row['points'];
    
        $total_points += $points;
    
        $data[$i++] = [$faction, $name, $models, $points];
    }
    echo json_encode([$data, $total_points]);
}


?>