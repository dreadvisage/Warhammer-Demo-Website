<?php
require_once "../../utils/session-start.php";
require_once "../../utils/is-logged-in.php";
 
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
    <link rel="stylesheet" href="user-profile.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>

    <?php require '../../utils/one-up-navbar.php'; ?>

    <div>
        <div>
            <img src="../images/account-logo-skull.svg"> <!--
                1.) Have option to change image https://stackoverflow.com/questions/348363/what-is-the-best-place-for-storing-uploaded-images-sql-database-or-disk-file-sy
                2.) You'll have to store images on the filesystem (outside of the webroot), and put paths to those images for each user in the MySQL database. 
                3.) Keep the user images out of Github. They should remain on the "server" which in this case it just our machines. 
                4.) In project directory file structure should be something like /account-data/ and then insdie that /default (for default images to pick from) and /<username> for each user in the database. Store the images in the /<username> directory.
            -->
        </div>
        <p>Username: <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
        <a href="reset-password.php">Reset Your Password</a>
        <br>
        <a href="logout.php">Logout</a> <!--Put a popup to confirm logout-->


    </div>
</body>
</html>