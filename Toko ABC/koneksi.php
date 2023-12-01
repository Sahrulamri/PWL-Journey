<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "toko_abc";
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error)
    die("Akses ke database gagal" . $conn->connect_error);
//echo "Akses ke database berhasil";
?>