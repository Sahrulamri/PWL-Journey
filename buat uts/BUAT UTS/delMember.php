<?php
    include "koneksi.php";
    $id = $_GET['id'];

    $sql = "SELECT foto FROM member WHERE id = '$id'";
    $hasil = $conn->query($sql);
    $foto = "";

    if ($hasil->num_rows > 0) {
        while ($row = $hasil->fetch_assoc()) {
            $foto = $row['foto'];
        }
    }

    if ($foto != "") {
        unlink("img/".$foto);
    }

    $sql = "DELETE FROM member WHERE id = '$id'";

    if ($conn->query($sql) === true){
        $conn->close();
        header("location:listMember.php");
    } else {
        $conn->close();
        echo "new records failed";
    }