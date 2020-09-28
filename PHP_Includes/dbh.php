<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$dbPassword = $url["pass"];
$db = substr($url["path"], 1);

$conn = mysqli_connect($server, $username, $dbPassword, $db);


if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}


?>