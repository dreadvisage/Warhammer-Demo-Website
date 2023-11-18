<?php
session_start();

$config_path = $_SERVER['DOCUMENT_ROOT'];
$config_path .= "/project/../utils/config.php";
require_once $config_path;

$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";
require_once $is_logged_in_path;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_str = $_REQUEST["q"];
    $search_str = strtolower($search_str);
    $search_results = array();

    $query = "SELECT * FROM search_suggestions";
    $results = $mysqli->query($query);
    $i = 0;
    while($row = mysqli_fetch_array($results)) {
        // Limit to 10
        if (count($search_results) >= 10) {
            break;
        }

        $suggestionID = $row['suggestionID'];
        $suggestionMatchOn = $row['suggestionMatchOn'];
        $suggestionDisplay = $row['suggestionDisplay'];
        $suggestionLink = $row['suggestionLink'];
        $sectionTitle = $row['sectionTitle'];
        $requireLogin = $row['requireLogin'];

        $combineSearch = "";
        if ($sectionTitle == '') {
            $combineSearch = $suggestionMatchOn;
        } else {
            $combineSearch = $suggestionMatchOn . $sectionTitle;
        }
         
        if (str_contains(strtolower($combineSearch), $search_str)) {
            if ($requireLogin && isNotLoggedIn()) {
                continue;
            } else {
                /* Because a Set data structure does not exists within the base PHP,
                this is a workaround that loops through every value in the array and 
                tests if it already exists. */
                $exists = 0;
                for ($i = 0; $i < count($search_results); ++$i) {
                    if ($suggestionLink == $search_results[$i][2]) {
                        $exists = 1;
                        break;
                    }
                }

                // Only insert if the data already exists
                if(!$exists) {
                    $search_results[$i++] = [$suggestionDisplay, $sectionTitle, $suggestionLink];
                }
            }
        }
    }

    echo json_encode($search_results);
}
    
    
?>