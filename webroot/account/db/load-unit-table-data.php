<?php
$config_path = $_SERVER['DOCUMENT_ROOT'];
$config_path .= "/project/../utils/config.php";

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";

require_once $config_path;
require_once $is_logged_in_path;

if (isNotLoggedIn()) {
    header("location: ../login.php");
    exit;
}

function echo_unit_table_data() {
    global $mysqli;

    $query = 'SELECT * FROM unit_table WHERE UserID="'. $_SESSION["UserID"] .'"';
    $results = $mysqli->query($query);
    echo '<table class="unit-table">';
    echo '<tr><td>Unit Name:</td>';
    echo '<td>Num Models:</td>';
    echo '<td>Unit Points:</td></tr>';

    while($unit_table_row = mysqli_fetch_array($results)) {
        $name = $unit_table_row['name'];
        $models = $unit_table_row['models'];
        $points = $unit_table_row['points'];

        echo '<tr><td>' . $name  . '</td><td>' . $models . '</td><td>' . $points . '</td></tr>';
    }
    echo '</table>';
}

?>