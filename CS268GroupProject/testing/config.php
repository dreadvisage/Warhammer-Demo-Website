<?php
// Database credentials.
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'CS268Tyler');
define('DB_PASSWORD', '12345');
define('DB_NAME', 'guestbook');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if(!$mysqli){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// If you reach here, you're connected!
?>
