<?php

$server = "localhost";
$user = "root";
$password = "";
$db_name = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $db_name);

if(!$db){
    die("Error connecting to databse :" . mysqli_connect_error());
}
?>