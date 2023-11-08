<?php

function echo_html_unit($name, $models, $padding, $points) {
    echo '<li>' . $name . '</li>';
    echo '<ul style = "color:black">';
    echo '<li>' . $models . ' models' . create_padding($padding) . $points . ' pts ';

    /* This is ugly has hell. Find a more natural way to make this happen. */
    $js = "(
        function() {
            document.getElementById('name').value = '" . $name . "';
            document.getElementById('models').value = '" . $models . "';
            document.getElementById('points').value = '" . $points . "';
        }
        )(); return true;";

    echo '<button type="submit" onclick="' . $js . '">➕</button></li></ul>';
}

/* TODO. Replace these with a builder class? */
function echo_html_unit_start($name) {
    echo '<li>' . $name . '</li>';
    echo '<ul style = "color:black">';
}
function echo_html_unit_model($name, $models, $padding, $points) {
    echo '<li>' . $models . ' models' . create_padding($padding) . $points . ' pts ';
    $js = "(
        function() {
            document.getElementById('name').value = '" . $name . "';
            document.getElementById('models').value = '" . $models . "';
            document.getElementById('points').value = '" . $points . "';
        }
        )(); return true;";

    echo '<button type="submit" onclick="' . $js . '">➕</button></li>';
    
}
function echo_html_custom_unit_model($name, $models, $padding, $points) {
    echo '<li>' . $models . create_padding($padding) . $points . ' pts ';
    $js = "(
        function() {
            document.getElementById('name').value = '" . $name . "';
            document.getElementById('models').value = '" . $models . "';
            document.getElementById('points').value = '" . $points . "';
        }
        )(); return true;";
    echo '<button type="submit" onclick="' . $js . '">➕</button></li>';
}
function echo_html_unit_end() {
    echo '</ul>';
}

function create_padding($padding) {
    $padding_str = "";
    for ($i = 0; $i < $padding; ++$i) {
        $padding_str .= '.';
    }
    return $padding_str;
}

?>