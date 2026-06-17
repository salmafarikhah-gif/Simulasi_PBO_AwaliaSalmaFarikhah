<?php
// koneksi/database.php

$host     = "localhost";
$username = "root";
$password = "";
// Diubah menjadi huruf kecil dan menggunakan underscore sesuai database asli kamu
$database = "db_simulasi_pbo_ti1c_awaliasalmafarikhah"; 

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>