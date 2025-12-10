<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pdf_practice";
$port = 3306; 

$db_connect = mysqli_connect($server, $user, $password, $nama_database, $port);
if( !$db_connect ){
    die("Failed to connect to database: " . mysqli_connect_error());
}

?>