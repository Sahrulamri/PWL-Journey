<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "select * from member where id='$id'";
$hasil = $conn->query($sql);
while ($row = $hasil->fetch_assoc()) {
        $id = $row['id'];
        $nama_member = $row['nama_member'];
        $email = $row['email'];
        $alamat = $row['alamat'];
        $telp = $row['telp'];
        $kota = $row['kota'];
        $provinsi = $row['provinsi'];
        $gender = $row['gender'];
        $username = $row['username'];
        $password = $row['password'];
        $foto = $row['foto'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/.We" crossorigin="anonymous">
    <title>Registrasi</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Form Edit Member</h1>
                <form action="updMember.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                <div class="mb-3">
                        <label for="11" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="tid" placeholder="ID" require>
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-label">Nama Member</label>
                        <input type="text" class="form-control" id="nama_member" name="tnama_member" placeholder="Nama Member"
                            require>
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-label">email</label>
                        <input type="text" class="form-control" id="email" name="temail" placeholder="email" require>
                    </div>
                    <div class="mb-3">
                        <label for="14" class="form-label">telp</label>
                        <input type="text" class="form-control" id="telp" name="ttelp" placeholder="telp" require>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">alamat</label>
                        <input type="text" class="form-control" id="" name="talamat" placeholder="alamat" require>
                    </div>
                    <div class="mb-3">
                        <label for="16" class="form-label">kota</label>
                        <input type="text" class="form-control" id="" name="tkota" placeholder="KOTA" require>
                    </div>
                    <div class="mb-3">
                        <label for="17" class="form-label">provinsi</label>
                        <input type="text" class="form-control" id="" name="tprovinsi" placeholder="PROVINSI" require>
                    </div>
                    <div class="mb-3">
                        <label for="18" class="form-label">gender</label>
                        <input type="text" class="form-control" id="" name="tgender" placeholder="GENDER" require>
                    </div>
                    <div class="mb-3">
                        <label for="19" class="form-label">username</label>
                        <input type="text" class="form-control" id="" name="tusername" placeholder="USERNAME" require>
                    </div>
                    <div class="mb-3">
                        <label for="20" class="form-label">password</label>
                        <input type="text" class="form-control" id="" name="tpassword" placeholder="PASSWORD" require>
                    </div>

                        <label for="21" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        <input type='hidden' name='foto' value="<?= $foto; ?>">
                        <img src="img/<?php echo $foto; ?>" width="150px" height="120px" />
                        <input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto<br>
</div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://sdm.jsdelivr.net/nps/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7SK0Gln4gmtz2MIOnikT1wXgYsOg+OMhuP+I1RH9sENBO0LRn5q+8nbTov4+1p" crossorigin="an0nymous">
    </script>
</body>

</html>