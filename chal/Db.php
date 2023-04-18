<!-- let conection to data base  -->

<?php

$server = "localhost";
$user = "root";
$password = "";

$coon = mysqli_connect($server, $user, $password);

if (!$coon) {
    die("Connection fail :" . mysqli_connect_error());
} else {
    echo "Created succefully";
}
// let create database 

$sql = "CREATE DATABASE HARSH5";


if (mysqli_query($coon, $sql)) {
    echo "Database create succefully";
} else {
    echo "Database connot create";
}




?>