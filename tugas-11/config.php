<?php

$server = "sql211.infinityfree.com";
$user = "if0_37693410";
$password = "xUMJ0PN8bWmK";
$nama_database = "if0_37693410_daftar_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Failed to read the database: " . mysqli_connect_error());
}

?>