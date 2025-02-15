<?php
session_start();
include "test_input.php";
$UsernameError = $PasswordError = $MirrorError = "";
?>


<!DOCTYPE html>
<html>  
    <head> 
        Customer Log-In
    <br>
    <br>
    <title> Noah Brown's Game Store Customer Log-In</title>
</head>
<form id="LogIn" method="post" action="checkout_page.php" onsubmit=" " >
    Username: <input type="text" id="Username"  name="Username">
    <span class="error">* <?php echo $UsernameError; ?></span>
    <br>
    <br>
    Password: <input type="text" id="Password" name="Password">
    <span class="error">* <?php echo $PasswordError; ?></span>
    <br>
    <br>
    <input type="submit" onsubmit="Checker(Username, Password)">
</form>    


<?php

function checker() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST["Username"])) {
            $UsernameError = "Username is required";
            header("Location: Log-In.php");
            exit;
        } else {
            $Username = $_POST["Username"];
        }
        if (empty($_POST["Password"])) {
            $PasswordError = "Password is required";
            header("Location: Log-In.php");
            exit;
        } else {
            $Password = $_POST['Password'];
        }
    } else {
        // send back to login
        exit;
    }

    if ($Password != $Username) {
        $MirrorError = "Username and Password is not the same.";
        header("Location: Log-In.php");
        exit;
    }
}
?>

</body>
</html>