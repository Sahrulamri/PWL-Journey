<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "abc";
$conn = new mysqli ($servername, $username, $password, $myDB);
if ($conn->connect_error)
    die ("Konkesi ke server-database gagal" . $conn->connect_error);
?>