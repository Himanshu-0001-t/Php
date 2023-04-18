<?php

$Num1 = $Num2 = $Num3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Num1 = $_POST['Num1'];
    $Num2 = $_POST['Num2'];
    $Num3 = $_POST['Num3'];
}
;
echo "Number1 is $Num1 and number2 is $Num2 and number3 is $Num3";

?>