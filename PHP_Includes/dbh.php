<?php

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = $cleardb_server;
$db['default']['username'] = $cleardb_username;
$db['default']['password'] = $cleardb_password;
$db['default']['database'] = $cleardb_db;


$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}

/*$servername = "localhost:3308";
$dbUsername = "root";
$dbPassword = "";
$dbName = "user_registration";

*/
?>