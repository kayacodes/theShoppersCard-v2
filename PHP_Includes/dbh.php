<?php

$servername = "eu-cdbr-west-03.cleardb.net";
$dbUsername = "b19d128e414970";
$dbPassword = "a7636806";
$dbName = "user_registration";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}
?>