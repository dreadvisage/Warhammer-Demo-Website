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

if (isNotLoggedIn()) {
    header("location: login.php");
    exit;
}

$query = "DELETE FROM " . $_SESSION['username'] . "_unit_table";
if ($stmt = $mysqli->prepare($query)) {
    if ($stmt->execute()) {
        $stmt->close();
        // Redirect to login page
        header("location: user-profile.php");
        exit;
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
    $stmt->close();
}




?>