<?php

function echo_html_unit($unit_name, $num_models, $padding, $unit_points) {
    echo '<li>' . $unit_name . '</li>';
    echo '<ul style = "color:black">';
    echo '<li>' . $num_models . ' models' . create_padding($padding) . $unit_points . ' pts ';

    /* This is ugly has hell. Find a more natural way to make this happen. */
    $js = "(
        function() {
            document.getElementById('unit-name').value = '" . $unit_name . "';
            document.getElementById('num-models').value = '" . $num_models . "';
            document.getElementById('unit-points').value = '" . $unit_points . "';
        }
        )(); return true;";

    echo '<button type="submit" onclick="' . $js . '">➕</button></li></ul>';
}

/* TODO. Replace these with a builder class? */
function echo_html_unit_start($unit_name) {
    echo '<li>' . $unit_name . '</li>';
    echo '<ul style = "color:black">';
}
function echo_html_unit_model($unit_name, $num_models, $padding, $unit_points) {
    echo '<li>' . $num_models . ' models' . create_padding($padding) . $unit_points . ' pts ';
    $js = "(
        function() {
            document.getElementById('unit-name').value = '" . $unit_name . "';
            document.getElementById('num-models').value = '" . $num_models . "';
            document.getElementById('unit-points').value = '" . $unit_points . "';
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