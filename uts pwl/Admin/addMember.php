<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Regristrasi</title>
</head>

<body>
    <?php
    include "koneksi.php";
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama_member = $_POST['nama_member'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $kota = $_POST['kota'];
        $provinsi = $_POST['provinsi'];
        $gender = $_POST['gender'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $foto = $_POST['foto'];

        $sql = "INSERT INTO member (id, nama, hrg, stok, ket, foto)
        VALUES ('$id', '$nama_member', '$email','$alamat', '$telp', '$kota', '$provinsi','$gender', '$username', '$password', '$foto');";
        $hasil = $conn->query($sql);
    }

    $rec = array('id' => '', 'nama_member' => '', 'email' => '', 'alamat' => '', 'telp' => '', 'kota' => '', 'provinsi' => '', 'gender' => '', 'username' => '', 'password' => '', 'foto' => '');

    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Form Entry Member</h1>
                <form action="insMember.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="11" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="tid" placeholder="ID" require>
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-label">Nama Member</label>
                        <input type="text" class="form-control" id="nama_member" name="tnama_member"
                            placeholder="Nama Member" require>
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="temail" placeholder="Email" require>
                    </div>
                    <div class="mb-3">
                        <label for="14" class="form-label">Telp</label>
                        <input type="text" class="form-control" id="telp" name="ttelp" placeholder="Telepon" require>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="" name="talamat" placeholder="Alamat" require>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="" name="tkota" placeholder="Kota" require>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="" name="tprovinsi" placeholder="Provinsi" require>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="" name="tgender" placeholder="Gender" require>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Username</label>
                        <input type="text" class="form-control" id="" name="tusername" placeholder="Username" require>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Password</label>
                        <input type="text" class="form-control" id="" name="tpassword" placeholder="Password" require>
                    </div>

                    <div class="mb-3">
                        <label for="16" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>

                    <dic class="mb-3">
                        <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
            </form>
        </div>
    </div>
    </div>

    <script src="#" integrity="#" crossorigin="#"></script>
</body>

</html>