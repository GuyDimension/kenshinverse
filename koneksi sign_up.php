<?php
$servername = "localhost";
$database = "sign_up";
$username = "sign_up";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Koneksi Gagal: ") . mysqli_connect_error());
}   else {
    echo "Koneksi Berhasil";
}