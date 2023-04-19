<?php

echo "Hello";


$server = 'localhost';
$user = 'root';
$password = "";
$db = 'hacker';

$conn = mysqli_connect($server, $user, $password, $db);

// $sql = "CREATE DATABASE hacker";

// if (mysqli_query($conn, $sql)) {
//     echo "Database create succefully";
// } else {
//     echo "Database connot create";
// }

// $sql = mysqli_query($conn, 'CREATE TABLE `hacker`.`detail` (`Sno` INT NOT NULL , `Name` VARCHAR(11) NOT NULL , `Email` VARCHAR(15) NOT NULL , `Password` INT(15) NOT NULL )');

// $name = $email = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    mysqli_query($conn, "INSERT INTO `detail` ( `Name`, `Email`, `Password`) VALUES ( '$name', '$email', '$pass');");
}
;


?>