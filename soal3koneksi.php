<?php
$hostname = "localhost";
$database = "testdb";
$username = "root";
$password = "";
$kon = mysqli_connect($hostname, $username, $password, $database);
if (!$kon) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?> 