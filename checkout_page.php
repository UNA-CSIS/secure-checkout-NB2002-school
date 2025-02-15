<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <h1> Checkout Page  </h1>
</head>
<body>
    <form method="post" action="confirmation.php">
        <p>
            <label for="Name">Please Enter your Name: </label>
            <input type="text" name="Name" id="Name" required>
        </p>
        <p>
            <label for="CardNumber">Please Enter your Card Number: </label>
            <input type="text" name="CardNumber" id="CardNumber">
        </p>
        <p>
            <label for="ExpirationDate">Please Enter your Card's Expiration Date: </label>
            <input type="date" name="ExpirationDate" id="ExpirationDate">
        </p>
        <p>
            <label for="SecurityCode">Please Enter your Card's Security Code: </label>
            <input type="text" name="SecurityCode" id="SecurityCode">
        </p>
        <p>
            <input type="submit" name="next" value="Next &gt;">
        </p>
    </form>



</body>
</html>
