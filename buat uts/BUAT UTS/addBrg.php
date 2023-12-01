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
        $nama = $_POST['nama'];
        $hrg = $_POST['hrg'];
        $stok = $_POST['stok'];
        $ket = $_POST['ket'];
        $foto = $_POST['foto'];

        $sql = "INSERT INTO barang (id, nama, hrg, stok, ket, foto)
        VALUES ('$id', '$nama', '$hrg', '$stok', '$ket', '$foto');";
        $hasil = $conn->query($sql);
    }

    $rec = array('id' => '', 'nama' => '', 'hrg' => '', 'stok' => '', 'ket' => '', 'foto' => '');

    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Form Entry Barang</h1>
                <form action="insBrg.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="11" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="tid" placeholder="ID" require>
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama" name="tnama" placeholder="Nama Barang"
                            require>
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="hrg" name="thrg" placeholder="Harga" require>
                    </div>
                    <div class="mb-3">
                        <label for="14" class="form-label">Jml Stok</label>
                        <input type="text" class="form-control" id="stok" name="tjml" placeholder="Stok" require>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="tket" placeholder="Keterangan" require>
                    </div>
                    <div class="mb-3">
                        <label for="16" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="ket" name="foto">
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