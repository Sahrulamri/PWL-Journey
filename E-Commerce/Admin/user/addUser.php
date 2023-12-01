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
    include "../koneksi.php";
    if (isset($_POST['submit'])) {
        $iduser = $_POST['iduser'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $foto = $_POST['foto'];

        $sql = "INSERT INTO user (iduser, username, password, foto)
        VALUES ('$iduser', '$username', '$password', '$foto');";
        $hasil = $conn->query($sql);
    }

    $rec = array('iduser' => '', 'username' => '', 'password' => '', 'foto' => '');

    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Form Entry User</h1>
                <form action="insUser.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="11" class="form-label">ID</label>
                        <input type="text" class="form-control" id="iduser" name="tiduser" placeholder="ID" require>
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="tusername" placeholder="Username"
                            require>
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="tpassword" placeholder="Password"
                            require>
                    </div>
                    <div class="mb-3">
                        <label for="16" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="#" integrity="#" crossorigin="#"></script>
</body>

</html>