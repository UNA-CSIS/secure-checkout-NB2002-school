<?php
session_start();
?> 



<!DOCTYPE html>
<html>  
    <head> 
        Gamestore Gateway Page
        <title> Noah Brown's Game Store Welcome Page</title>
    <body>
        <p> Welcome to my Game Store. Please press the button to continue. </p> 
        <button onclick="goToPage()">Press to Enter the Store</button>

        <script>
            function goToPage() {
                window.location.href = "HomeMenu.php";
            }
        </script>

    </body>
</html>

