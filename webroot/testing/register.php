<?php
// https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    /* Validate username. Takes whatever input is inside the form marked with name="username".
    Trims the input to remove any leading/trailing whitespace. Finally checks to see if the 
    input is empty. If it's empty, we set $username_err to enter a username. */
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }
    /* Validate the trimmed input by checking that it only contains letters, numbers, and underscores. */
    elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        /* Create an SQL statement that needs to have 'prepare' called
        on it yet (notice the question mark). */
        $sql = "SELECT id FROM users WHERE username = ?";
        
        /* Initialize variable $stmt with the result of $mysqli->prepare($sql) and 
        check to see if it failed. If it did, we skip storing the username. 
        The 'prepare' statement is an SQL statement template that is created and 
        sent to the database. Certain values are left unspecified, called parameters 
        (labeled "?"). The database parses, compiles, and performs query optimization 
        on the SQL statement template, and stores the result without executing it. 
        Execute: At a later time, the application binds the values to the parameters, 
        and the database executes the statement. The application may execute the 
        statement as many times as it wants with different values. 
        https://www.w3schools.com/php/php_mysql_prepared_statements.asp */
        // $stmt is short for 'statement'
        if($stmt = $mysqli->prepare($sql)){
            /* Bind variables to the prepared statement as parameters.
            's' tells that $param_username is of type string. Note that
            $param_username currently has no value. We later will initialize 
            the value of $param_username, but we create/bind it now. */
            $stmt->bind_param("s", $param_username);
            
            // Take the user's validated username and store it in $param_username
            $param_username = trim($_POST["username"]);
            
            /* Attempt to execute the prepared statement. The application may execute 
            the statement as many times as it wants with different values. But we only 
            do it once. Execute basically places $param_username inside of $sql where 
            the question-mark is. Remember that the $sql is a SELECT statement. Meaning 
            that we're only checking if username exists first before we may INSERT it later*/
            if($stmt->execute()){
                /* Store the result of successful execute statement so that we can check it. */
                $stmt->store_result();
                
                /* We want to check and see if the username already exists. We do this by 
                seeing if the number of rows is equal to 1. If it already exists, we set 
                $username_err */
                if($stmt->num_rows == 1){
                    $username_err = "This username is already taken.";
                } else{
                    /* We finally store the data inside $username from the 'username' form. We only do 
                    this after we 1.) Check to see if the field isn't empty. 2.) Check to see if the 
                    input only contains letters, numbers, and underscores. 3.) It doesn't already exist 
                    within the database, we don't allow duplicate usernames. */
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    /* Validate password. Takes whatever input is inside the form marked with name="password". 
    Same as username, checks to see if the password field is empty. If it's not empty, we then 
    check to see if the password is at least 6 characters long. Basic security stuff. Unlike
    username, we allow duplicate passwords. This is because we utilize a technique called 
    PASSWORD SALTING. Password salting is a technique which is widely used to secure passwords 
    by randomizing password hashes, so that if two users have the same password, they will not 
    have the same password hashes. This is done by appending or prepending a random string, 
    called a salt, to the password before hashing. We salt the password only after we've 
    confirmed all the required fields are valid. */
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have at least 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password. Basically checking to see if $password matches 
    // $confirm_password to ensure the right password was entered.
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    /* Check input errors before inserting in database. If any of the _err variables were set, 
    we don't store the username and password in the database. */
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        /* Prepare an INSERT statement. We now know that we're good to insert a new 
        username/password into the database. */
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            // Hash the password to encrypt it. This also helps allow duplicate passwords to exist.
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            /* Attempt to execute the prepared statement. If success, then the new username/password
            is now in the database and the user can log in with their credentials. */
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
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
<head>`
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <!-- action=phpstuff simply gets the name of the currently executing script. Which in this context means
        that it returns this file name from the server root: /project/testing/register.php 
        htmlspecialchars protects against hackers. htmlspecialchars only needs to be used with a certain set of 
        variables such as $_SERVER. https://www.w3schools.com/php/func_string_htmlspecialchars.asp -->
        <!-- The form action only gets triggered when a input type is pressed and also has the type="submit" attribute. -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <!-- The first php is an inline ternary operation. Basically, if $username_err has been set, then the class is set to class="form-control is-invalid" 
                Since class names can't have spaces in them, this means that the element has two classes. This is allowed. Otherwise, if no error has been set,
                the class is just class="form-control" -->
                <!-- The second php just gets the initial value of $username and sets that value in the field. If it's empty, then the field is empty. -->
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <!-- If $username_err is set, then an error will appear beneath the field. -->
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <!-- The first php is an inline ternary operation. Basically, if $password_err has been set, then the class is set to class="form-control is-invalid" 
                Since class names can't have spaces in them, this means that the element has two classes. This is allowed. Otherwise, if no error has been set,
                the class is just class="form-control" -->
                <!-- The second php just gets the initial value of $password and sets that value in the field. If it's empty, then the field is empty. -->
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <!-- If $password_err is set, then an error will appear beneath the field. -->
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <!-- The first php is an inline ternary operation. Basically, if $confirm_password_err has been set, then the class is set to class="form-control is-invalid" 
                Since class names can't have spaces in them, this means that the element has two classes. This is allowed. Otherwise, if no error has been set,
                the class is just class="form-control" -->
                <!-- The second php just gets the initial value of $confirm_password and sets that value in the field. If it's empty, then the field is empty. -->
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <!-- If $confirm_password_err is set, then an error will appear beneath the field. -->
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>