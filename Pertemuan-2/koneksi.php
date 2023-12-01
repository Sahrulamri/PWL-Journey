<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="flower_store";
    $conn = new mysqli ($host, $user, $password, $db);
    if ($conn->connect_error)
        die("Akses ke database gagal" .$conn->connect_error);
    // echo "Akses ke database berhasil";
?>