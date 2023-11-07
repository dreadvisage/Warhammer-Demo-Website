<?php
$config_path = $_SERVER['DOCUMENT_ROOT'];
$config_path .= "/project/../utils/config.php";

$session_start_path = $_SERVER['DOCUMENT_ROOT'];
$session_start_path .= "/project/../utils/session-start.php";

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";

require_once $config_path;
require_once $session_start_path;
require_once $is_logged_in_path;

if(isNotLoggedIn()) {
    header("location: ../account/login.php");
    exit;
}

$unit_name = "";
$num_models = 0;
$unit_points = 0;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $unit_name = $_POST["unit-name"];
    $num_models = $_POST["num-models"];
    $unit_points = $_POST["unit-points"];


    /* For each user, create a table for them so that we can insert their units into it */
    $query = 'INSERT INTO ' . $_SESSION['username'] . '_unit_table (unit_name, num_models, unit_points) VALUES (?,?,?)';
    if($stmt = $mysqli->prepare($query)) {
    $stmt->bind_param("sii", $param_unit_name, $param_num_models, $param_unit_points);
    $param_unit_name = $unit_name;
    $param_num_models = $num_models;
    $param_unit_points = $unit_points;
    if ($stmt->execute()) {
        header("location: " . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
    }
}


?>