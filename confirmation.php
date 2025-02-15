<?php
session_start();
include "test_input.php";
$Name = test_input($_POST["Name"]);
$CardNumber = test_input($_POST["CardNumber"]);
$ExpirationDate = test_input($_POST["ExpirationDate"]);
$SecurityCode = test_input($_POST["SecurityCode"]);
$CardNumberQuantity = strlen($CardNumber);
?> 




<!DOCTYPE html>

<html>
    <head>
        Confirmation Page
    <br>
    <br>
    <meta charset="UTF-8">
    <title> Final Page</title>
</head>
<body>
    <?php
    echo "Your final total:";
    echo " $";
    echo round($_SESSION['FinalTotal']);
    echo " ";
    echo "<br>";
    echo "The first two numbers of your card are: ";
    echo $CardNumber[0];
    echo $CardNumber[1];
    echo "</br>";
    include 'Credit_CardVerify.php';
    ?>

</body>
</html>
