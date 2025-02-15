<?php ?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        if ($CardNumber[0] == 5 && ($CardNumber[1] >= 1 && $CardNumber[1] <= 5) && $CardNumberQuantity == 16) {

            Function CheckMastercard($CardNumber) {
                echo "Your Mastercard ending in: ";
                echo $CardNumber[12];
                echo $CardNumber[13];
                echo $CardNumber[14];
                echo $CardNumber[15];
                echo "</br>";
                echo "has been charged ";
                echo "$";
                echo round($_SESSION['FinalTotal']);
            }

            CheckMastercard($CardNumber);
        } else if ($CardNumber[0] == 4 && ($CardNumberQuantity == 13 || $CardNumberQuantity == 16)) {
            if ($CardNumberQuantity == 13) {

                Function CheckVisaOne($CardNumber) {
                    echo "Your Visa ending in ";
                    echo $CardNumber[9];
                    echo $CardNumber[10];
                    echo $CardNumber[11];
                    echo $CardNumber[12];
                    echo "</br>";
                    echo "has been charged ";
                    echo "$";
                    echo round($_SESSION['FinalTotal']);
                }

                CheckVisaOne($CardNumber);
            }

            if ($CardNumberQuantity == 16) {

                Function CheckVisaTwo($CardNumber) {
                    echo "Your Visa ending in ";
                    echo $CardNumber[12];
                    echo $CardNumber[13];
                    echo $CardNumber[14];
                    echo $CardNumber[15];
                    echo "</br>";
                    echo "has been charged ";
                    echo "$";
                    echo round($_SESSION['FinalTotal']);
                }

                CheckVisaTwo($CardNumber);
            }
        } else if ($CardNumber[0] == 3 && ($CardNumber[1] >= 4 && $CardNumber[1] <= 7) && $CardNumberQuantity == 15) {

            Function CheckAmex($CardNumber) {
                echo "Your American Expresss ending in ";
                echo $CardNumber[11];
                echo $CardNumber[12];
                echo $CardNumber[13];
                echo $CardNumber[14];
                echo "</br>";
                echo "has been charged ";
                echo "$";
                echo round($_SESSION['FinalTotal']);
            }

            CheckAmex($CardNumber);
        } else {
            echo "The following card does not match with any of our parameters. ";
            echo "Transaction Cancelled - Please Try Again";
        }
        ?>
    </body>
</html>
