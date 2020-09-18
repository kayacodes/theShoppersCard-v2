<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = mysqli_connect($server, $username, $password, $db);

/*$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);*/

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}

/*$servername = "localhost:3308";
$dbUsername = "root";
$dbPassword = "";
$dbName = "user_registration";

*/
?>