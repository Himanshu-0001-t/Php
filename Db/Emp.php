<?php

// echo "Hello";


// $server = 'localhost';
// $user = 'root';
// $password = "";
// $db = 'hacker';

// $conn = mysqli_connect($server, $user, $password, $db);

// // $sql = "CREATE DATABASE hacker";

// // if (mysqli_query($conn, $sql)) {
// //     echo "Database create succefully";
// // } else {
// //     echo "Database connot create";
// // }

// // $sql = mysqli_query($conn, 'CREATE TABLE `hacker`.`detail` (`Sno` INT NOT NULL , `Name` VARCHAR(11) NOT NULL , `Email` VARCHAR(15) NOT NULL , `Password` INT(15) NOT NULL )');

// // $name = $email = $pass = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];

//     mysqli_query($conn, "INSERT INTO `detail` ( `Name`, `Email`, `Password`) VALUES ( '$name', '$email', '$pass');");
// }
// ;

$server = 'localhost';
$user = "root";
$password = "";
$db = "panda";

$conn = mysqli_connect($server, $user, $password, $db);

if (!$conn) {
    die("Not Connect");
}
;

// $sql = "CREATE DATABASE Panda";

// if (mysqli_query($conn, $sql)) {
//     echo "Data base created succefully";
// } else {
//     echo "Data basee alredy aggest";
// }

// mysqli_query($conn, "CREATE TABLE `panda`.`Student` (`Sno` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(15) NOT NULL , `Email` VARCHAR(15) NOT NULL , `Password` INT(10) NOT NULL , PRIMARY KEY (`Sno`))")

// mysqli_query($conn, "INSERT INTO `Student` (`Sno`, `Name`, `Email`, `Password`) VALUES (NULL, 'Himanshu', 'Harsh@gmail.com', '11566');")
// 


$sql = "SELECT * FROM `student`";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Hello " . $row['Name'];
        echo "<br>";
    }
} else {
    echo "No Result found";
}




?>