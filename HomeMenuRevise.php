<?php
session_start();
?> 



<!DOCTYPE html>
<html>
    <head>
        Welcome to Noah's Game Store!!!
        <meta charset="UTF-8">
        <title> Game Store Home Page (Revised)</title>
    </head>
    <body>
        <?php
        $ItemOne = $ItemTwo = $ItemThree = "0";
        ?> 

        <form method="post" action="order_summary.php">
            <p>
                <label for="ItemOne">Game Console: $75.99 </label>
                <input type="number" name="ItemOne" id="ItemOne" min='0' max='100'>
            </p>
            <p>
                <label for="ItemTwo">Game Console Controller: $50.99</label>
                <input type="number" name="ItemTwo" id="ItemTwo" min='0' max='100'>
            </p>
            <p>
                <label for="ItemThree">Game Console Accessories: $30.99</label>
                <input type="number" name="ItemThree" id="ItemThree" min='0' max='100'> 
            </p>
            <p>
                <input type="submit" name="SUBMIT" value="Next &gt;">
            </p>
        </form>

        <?php
        include 'test_input.php';
        ?>
    </body>
</html>
