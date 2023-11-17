<?php
session_start();
$config_path = $_SERVER['DOCUMENT_ROOT'];
$config_path .= "/project/../utils/config.php";

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";

require_once $config_path;
require_once $is_logged_in_path;

if (isNotLoggedIn()) {
    header("location: ../account/login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $models = $_REQUEST["models"];
    $points = $_REQUEST["points"];

    /* For each user, create a table for them so that we can insert their units into it */
    $query = 'INSERT INTO unit_table (UserID, name, models, points) VALUES (?,?,?,?)';
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("isss", $param_user_id, $param_name, $param_models, $param_points);
        
        $param_user_id = $_SESSION["UserID"];
        $param_name = $name;
        $param_models = $models;
        $param_points = $points;
        if ($stmt->execute()) {
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}
