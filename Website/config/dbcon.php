<?php

// $host = "localhost";
// $username = "u117302041_vsadmin";
// $password = "DEVpass02";
// $database = "u117302041_virtualshrine";

// $con = mysqli_connect($host, $username, $password, $database);

// if (!$con) {
//     header ("Location: ../errors/dberror.php");
//     die();}


$host = "localhost";
$username = "root";
$password = "";
$database = "virtualshrine";

$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    header ("Location: ../errors/dberror.php");
    die();}


?>