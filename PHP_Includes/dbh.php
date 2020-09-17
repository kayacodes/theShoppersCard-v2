<?php

$servername = "localhost:3308";
$dbUsername = "root";
$dbPassword = "";
$dbName = "user_registration";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}
?>