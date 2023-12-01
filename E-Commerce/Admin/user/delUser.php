<?php
include "../koneksi.php";
$id = $_GET['id'];

$sql = "SELECT foto FROM user WHERE id = '$id'";
$hasil = $conn->query($sql);
$foto = "";

if ($hasil->num_rows > 0) {
    while ($row = $hasil->fetch_assoc()) {
        $foto = $row['foto'];
    }
}

if ($foto != "") {
    unlink("../img/user/" . $foto);
}

$sql = "DELETE FROM user WHERE id = '$id'";

if ($conn->query($sql) === true) {
    $conn->close();
    header("location:listUser.php");
} else {
    $conn->close();
    echo "new records failed";
}
?>