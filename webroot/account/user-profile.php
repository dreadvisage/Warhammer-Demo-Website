<?php
session_start();
$is_logged_in_path = $_SERVER['DOCUMENT_ROOT'];
$is_logged_in_path .= "/project/../utils/is-logged-in.php";

$get_user_pfp_path = $_SERVER['DOCUMENT_ROOT'];
$get_user_pfp_path .= "/project/../utils/get-user-pfp.php";
    
require_once $is_logged_in_path;
require_once $get_user_pfp_path;
require '../../utils/navbar.php'; 
 
// Check if the user is logged in, if not then redirect him to login page
if(isNotLoggedIn()){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/user-profile.css">
    <link rel="stylesheet" href="../css/modal.css">
    <script src="../js/pfp-table-values.js"></script>
    <script src="../js/modal.js"></script>
    <script src="../js/load-unit-table-data.js"></script>
    <script src="../js/user-profile.js"></script>
</head>
<body>
    
    <?php 
        echoNavbar(1);
    ?>

<div class="left-panel">
            <div> <!-- Outer div needed for flexbox spacing -->
                <div class="profile-picture-content">
                    <div id="pfp-frame-id" class="profile-picture-frame">
                        <img class="profile-picture" src="../<?php echo getUserPfp(); ?>">
                        <img class="file-upload-icon" src="../images/file-upload.png">
                    </div>
                </div>
                <p class="profile-name"><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
                <hr>
            </div>
            <div class="account-control">
                <p class="section-header">Account Control</p>
                <hr class="section-header-rule">
                <div class="account-control-btns">
                    <a class="btn-option btn-pad" href="reset-password.php">Reset Password</a>
                    <a class="btn-option" href="logout.php">Logout</a> <!--Put a popup to confirm logout-->
                </div>
            </div>
        </div>

    <div class="main-wrapper">
        <div id="model-pfp" class="modal">
            <div id="modal-pfp-content" class="modal-content">
                <div class="wrapper-table">
                    <span class="close">&times;</span>
                    <table class="image-table">
                        <script>loadPfpTableValues(3, 1);</script>
                    </table>
                </div>
                <script>registerModelListeners();</script>
            </div>
        </div>

        <div class="main-content">
            <a class="btn-option" href="db/clear-unit-table.php">Clear Table</a>
            <table id="unit-table" class="unit-table">
                <script>loadUnitTableData(1);</script>
            </table>

            <p id="total-points"></p>
        </div>

        <script>registerLeftPanelListener();</script>

    </div>
</body>
</html>