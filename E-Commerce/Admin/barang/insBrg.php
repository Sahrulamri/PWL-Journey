<?php
include "../koneksi.php";
include "../uploadFoto.php";
$id = $_POST['tid'];
$nama = $_POST['tnama'];
$hrg = $_POST['thrg'];
$ket = $_POST['tket'];
$jml = $_POST['tjml'];

if (upload_foto($_FILES["foto"], "barang")) {
    $foto = $_FILES["foto"]["name"];
    $sql = "insert into barang (id,nama,hrg,jml,keterangan,foto) values ('$id','$nama',$hrg,$jml,'$ket','$foto')";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("location:listbarang.php");
    } else {
        $conn->close();
        echo "New records failed";
    }
} else
    echo "sorry, there was an error uploading your file.";
?>