<?php
include "../koneksi.php";
include "../uploadFoto.php";
$id = $_POST['tid'];
$nama_member = $_POST['tnama_member'];
$email = $_POST['temail'];
$alamat = $_POST['talamat'];
$telp = $_POST['ttelp'];
$kota = $_POST['tkota'];
$provinsi = $_POST['tprovinsi'];
$gender = $_POST['tgender'];
$username = $_POST['tusername'];
$password = $_POST['tpassword'];
$foto_lama = $_POST['foto_lama'];
$qry = true;
$flagFoto = true;
if (isset($_POST['ubah_foto'])) {
    if (upload_foto($_FILES["foto"], "member")) {
        $foto = $_FILES["foto"]["name"];
        $sql = "UPDATE member SET nama_member='$nama_member', email='$email', alamat='$alamat', telp='$telp',kota='$kota',provinsi='$provinsi',gender='$gender',username='$username',password='$password', foto='$foto' WHERE id='$id'";
    } else {
        $qry = false;
        echo "Foto gagal diupload";
    }
} else {
    $sql = "UPDATE member SET nama_member='$nama_member', email='$email', alamat='$alamat', telp='$telp',kota='$kota',provinsi='$provinsi',gender='$gender',username='$username',password='$password' WHERE id='$id'";
    $flagFoto = false;
}

if ($qry == true) {
    if ($conn->query($sql) === true) {
        //jika gambar ada
        if (is_file("img/" . $foto_lama) && ($flagFoto == true)) {
            unlink("img/" . $foto_lama);
        }
        $conn->close();
        header("location:listMember.php");
    } else {
        $conn->close();
        echo "Update record failed";
    }
}
?>