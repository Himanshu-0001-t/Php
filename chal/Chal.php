<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Welcome</h1>

    <!-- <form action="" method="post">

        <div>
            <label for="Fnum">First Num</label>
            <input type="text" name="Num1" id="Fnum">
        </div>
        <div>
            <label for="Snum">Sec Num</label>
            <input type="text" name="Num2" id="Snum">
        </div>
        <div>
            <label for="Tnum">Third Num</label>
            <input type="text" name="Num3" id="Tnum">
        </div>
        <div>
            <label for="Fnum">Fourth Num</label>
            <input type="text" name="Num4" id="Fnum">
        </div>
        <div>
            <label for="Fifth"> Fifth Num</label>
            <input type="text" name="Num5" id="Fifth">
        </div>

        <button type="submit">Login</button>
    </form> -->

    <form action="" method="post">

        <div>
            <label for="Fnum">Customer Name</label>
            <input type="text" name="Num1" id="Fnum">
        </div>
        <div>
            <label for="Snum">Check-in-date</label>
            <input type="date" name="Num2" id="Snum">
        </div>
        <div>
            <label for="Tnum">Third Num</label>
            <input type="text" name="Num3" id="Tnum">
        </div>
        <div>
            <label for="Fnum">Fourth Num</label>
            <input type="text" name="Num4" id="Fnum">
        </div>
        <div>
            <label for="Fifth"> Fifth Num</label>
            <input type="text" name="Num5" id="Fifth">
        </div>

        <button type="submit">Login</button>
    </form>

    <div class="deg">

        <?php

        $num1 = $_POST['Num1'];
        $num2 = $_POST['Num2'];
        $num3 = $_POST['Num3'];
        $num4 = $_POST['Num4'];
        $num5 = $_POST['Num5'];


        echo $num2;

        // Q1
        // if ($num1 <= 18) {
        //     echo "You are not aligibal " . $num1;
        // } else {
        //     echo "You are aligibal " . $num1;
        // }
        
        // ===================================
        
        // Q2 
        // if ($num1 > $num2) {
        //     echo "The num1 is bigger " . $num1;
        // } else {
        //     echo "The num2 is bigger " . $num2;
        // }
        
        // =======================================
        
        // Q3 
        // if (empty($num1) || empty($num2) || empty($num3)) {
        //     echo "Pls Enter some value in all section";
        // } else if ($num1 < 0 || $num2 < 0 || $num3 < 0) {
        //     echo "Negative Value not Alow";
        // } else {
        
        //     if ($num1 > $num2 && $num1 > $num3) {
        //         echo "The num1 is bigger " . $num1;
        //     } else if ($num2 > $num1 && $num2 > $num3) {
        //         echo "The num2 is bigger " . $num2;
        //     } else if ($num3 > $num2 && $num3 > $num1) {
        //         echo "The num3 is bigger " . $num3;
        //     } else {
        //         echo "Pls Fiel Diffrent Value ";
        //     }
        // }
        
        // =============================================
        
        // Q4 
        // if ($num1 % 7 == 0) {
        //     echo " Num Is Divisibal By 7 " . $num1;
        //     echo "<br>";
        // } else {
        //     echo $num1 . " Is Not Divisibal By 7 ";
        // }
        
        // ===============================================
        
        // Q5 
        // if ($num1 % 5 === 0) {
        //     echo "Hi ";
        // } else {
        //     echo "Bye";
        // }
        
        // =============================================
        
        // Q6 
        
        // if ($num1 < 0) {
        //     echo "Nagative Value not Alow";
        // } else {
        //     if ($num1 <= 100) {
        //         echo "No charge";
        
        //     } else if ($num1 > 100 && $num1 <= 200) {
        //         echo " 5 Rs Per Unit ";
        //     } else {
        //         echo " 10 Rs Per Unit";
        //     }
        // }
        // ===============================================
        
        // Q7 
        
        // if ($num1 < 100) {
        //     echo " No Charge";
        // } elseif ($num1 >= 100 && $num1 < 200) {
        //     echo $num1 * 5;
        // } elseif ($num1 >= 200) {
        //     echo $num1 * 10;
        // } else {
        //     echo "Enter Valid Number";
        // }
        
        //  =======================================================
        // Q8
        // $price = null;
        
        // if ($num1 > 100000) {
        
        //     $price = $num1 / 100 * 15;
        
        //     echo "Price of your bike with tax is " . ($price + $num1);
        // } else if ($num1 > 50000 && $num1 <= 100000) {
        
        //     $price = $num1 / 100 * 10;
        
        //     echo "Price of your bike with tax is " . $price + $num1;
        // } else if ($num1 <= 50000) {
        
        //     $price = $num1 / 100 * 5;
        
        //     echo "Price of your bke with tax is " . $price + $num1;
        // } else {
        //     echo "Enter valid price";
        // }
        
        // ==============================================================
        
        // Q9
        
        // switch ($num1) {
        //     case 1:
        //         echo "Mon";
        //         break;
        //     case 2:
        //         echo "Tus";
        //         break;
        //     case 3:
        //         echo "Wed";
        //         break;
        //     case 4:
        //         echo "Thu";
        //         break;
        //     case 5:
        //         echo "Fri";
        //         break;
        //     case 6:
        //         echo "Sat";
        //         break;
        //     case 7:
        //         echo "Sun";
        //         break;
        
        //     default:
        //         echo "Enter a valid day";
        //         break;
        // }
        
        // =============================================================
        // Q10
        // switch ($num1) {
        //     case 'Delhi':
        //         echo 'Red Fort';
        //         break;
        //     case 'Agra':
        //         echo 'Tajmahal';
        //         break;
        //     case 'Jaipur':
        //         echo 'Hawa Mahal';
        //         break;
        //     default:
        //         echo "Not Found";
        //         break;
        // }
        
        // ===============================================================
        // Q12
        
        // if ($num1 > 0 && $num1 <= 4) {
        //     echo "Price is 10Rs";
        // } else if ($num1 > 4 && $num1 < 8) {
        //     echo "Price is 15Rs";
        // } else if ($num1 >= 8 && $num1 < 12) {
        //     echo "Price is 20Rs";
        // } else {
        //     echo "Price is 25Rs";
        // }
        
        // ===============================================================
        // Q 13
        
        // $sum = ($num1 + $num2 + $num3 + $num4 + $num5);

        // $avg = "";
        // if ($sum < 500) {
        //     $avg = ($sum / 500 * 100);
        //     echo "Average is $avg";
        // } else {
        //     echo "Enter valid number";
        // }

        // echo "<br>";

        // if ($avg > 0 && $avg <= 100) {

        //     if ($avg < 50) {
        //         echo "You are fail";
        //     } elseif ($avg >= 50 && $avg < 65) {
        //         echo "Your Grade is C";
        //     } else if ($avg >= 65 && $avg < 80) {
        //         echo "Your Grade is B";
        //     } elseif ($avg >= 80 && $avg < 90) {
        //         echo "Your Grade is A";
        //     } else {
        //         echo "Your Grade is S";
        //     }
        //     ;

        // } else {
        //     echo "Enter Valid Avarage";
        // }

        // =========================================================

        // Q 14

        

        ?>

    </div>
</body>

</html>