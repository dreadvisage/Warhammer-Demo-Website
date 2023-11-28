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
    $faction = $_REQUEST["faction"];
    $name = $_REQUEST["name"];
    $models = $_REQUEST["models"];
    $points = $_REQUEST["points"];
    $optional_models = json_decode($_REQUEST["optionalmodels"]);

    /* For each user, create a table for them so that we can insert their units into it */
    $query = 'INSERT INTO unit_table (UserID, faction, name, models, points) VALUES (?,?,?,?,?)';
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("issss", $param_user_id, $param_faction, $param_name, $param_models, $param_points);
        
        $param_user_id = $_SESSION["UserID"];
        $param_faction = $faction;

        $param_name = $name;
        
        // name plus any optional units pending
        $param_models = $models;
        for ($i = 0; $i < count($optional_models); ++$i) {
            $param_models .= ", " . $optional_models[$i][2];
        } 

        $param_points = $points;
        for ($i = 0; $i < count($optional_models); ++$i) {
            $param_points .= $optional_models[$i][3];
        } 
        /* You really shouldn't use eval here like this because it's not error resilient.
        But since I can expect optional units to always have a +x value where `x` is 
        an integer, it works well enough. for expressions like `30+10`. Which is about
        as complex as I can expect eval to work reliably. Anything outside of that beware. */
        $param_points = eval("return $param_points;");

        if ($stmt->execute()) {
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}
