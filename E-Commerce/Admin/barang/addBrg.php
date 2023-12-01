<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Registrasi</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Form Entry Barang</h1>
                <form action="insBrg.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="11" class="form-label">ID</label>
                        <input type="text" class="form-control" name="tid" id="id" placeholder="ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="tnama" id="nama" placeholder="Nama barang"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="thrg" id="hrg" placeholder="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="14" class="form-label">Jml Stok</label>
                        <input type="text" class="form-control" name="tjml" id="jml" placeholder="stok" required>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" name="tket" id="ket" placeholder="keterangan">
                    </div>
                    <div class="mb-3">
                        <label for="16" class="form-label">Gambar</label>
                        <input type="file" class="form-control" name="foto" id="ket">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>