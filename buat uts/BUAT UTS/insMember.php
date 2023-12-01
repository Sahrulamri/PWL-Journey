<?php
    include "koneksi.php";
    include "uploadFoto.php";
    $id=$_POST['tid'];
    $nama_member=$_POST['tnama_member'];
    $email=$_POST['temail'];
    $telp=$_POST['ttelp'];
    $alamat=$_POST['talamat'];
    $kota=$_POST['tkota'];
    $provinsi=$_POST['tprovinsi'];
    $gender=$_POST['tgender'];
    $username=$_POST['tusername'];
    $password=$_POST['tpassword'];

    if (upload_foto($_FILES["foto"],"member")) {
        $foto=$_FILES["foto"]["name"];
        $sql = "INSERT INTO member (id,nama_member,email,telp,alamat,kota,provinsi,gender,username,password,foto) value ('$id','$nama_member','$email','$telp','$alamat','$kota','$provinsi','$gender','$username','$password','$foto')";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("location:listMember.php");
        }
        else {
            $conn->close();
            echo "New record failed";
        }
    } else 
        echo "Sorry, there was an error uploading your file.";
?>