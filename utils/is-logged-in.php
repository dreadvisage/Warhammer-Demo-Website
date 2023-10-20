<?php
    function isLoggedIn() {
        return isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true;
    }

    function isNotLoggedIn() {
        return !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true;
    }
?>