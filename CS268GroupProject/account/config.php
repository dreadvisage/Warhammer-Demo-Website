<?php
require "../../secrets/secrets.php";

/* Database credentials. $db_ variables are kept separate
so that this implementation is shown without showing 
sensitive information */
define('DB_SERVER', $db_server);
define('DB_USERNAME', $db_username);
define('DB_PASSWORD', $db_password);
define('DB_NAME', $db_name);
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if(!$mysqli){
    die("Failed to connect to server. " . $mysqli->connect_error);
}

// If you reach here, you're connected!
?>
