<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$server = "localhost";
$user = "root";
$password = "";
$db_name = "user_level";

$db_connect = mysqli_connect($server, $user, $password, $db_name);

if( !$db_connect ){
    die("Failed to connect to database: " . mysqli_connect_error());
}

?>