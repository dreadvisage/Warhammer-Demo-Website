<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect them to the welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials. If errors are set, do nothing.
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1) {                    
                    // Bind result variables.
                    /* On a successful store_result, we declare three variables that we want to store row data inside. We 
                    want to "bind" the data in the row to these three variables. */
                    $stmt->bind_result($id, $username, $hashed_password);
                    /* After bind_result has been created the variables to store data in, we fetch the row data and store them in each variable. 
                    Basically, we get the row that matched the username, and we store the values of the row into these three variables.  */
                    if($stmt->fetch()) {
                        /* From the database, we have the hashed password. We check that against the password the user
                        inputted in the password field. */
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
        <?php require '../../utils/one-up-navbar.php'; ?>

        <div class="form-wrapper">
            <div class="form-group">
                <div class="form-group">
                    <h2>Login</h2>
                    <p>Please fill in your credentials to login.</p>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo $password ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login">
                    </div>
                </form>
                <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
            </div>
        </div>
</body>
</html>