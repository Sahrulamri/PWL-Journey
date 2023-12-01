<?php
    $host= "localhost";
    $user= "root";
    $pass= "";
    $db= "toko_abc";
    $conn = new mysqli($host,$user,$pass,$db);
    if(!$conn){
        die("Access ke database gagal");
    }else{
        // echo "Access ke database berhasil";
    }