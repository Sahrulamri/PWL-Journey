<div class="container mt-3">
            <h1> Form Tambah Barang</h1>
    <form action="<?= BASEURL; ?>produk/insProduk" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
                <label for="12" class="form-label">Nama barang</label>
                <input type="text" class="form-control" id="nama" name="tnama" placeholder="Nama barang">
            </div>
            <div class="mb-3">
                <label for="13" class="form-label">Harga</label>
                <input type="number" class="form-control" id="hrg" name="thrg" placeholder="Harga" required>
            </div>
            <div class="mb-3">
                <label for="14" class="form-label">Jml Stok</label>
                <input type="number" min="1" class="form-control" id="jml" name="tjml" placeholder="Stok" required>
            </div>
            <div class="mb-3">
                <label for="15" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="ket" name="tket" placeholder="Keterangan">
            </div>
            <div class="mb-3">
                <label for="16" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="ket" name="foto" >
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="<?= BASEURL; ?>produk" class="btn btn-danger ">Kembali</a>
</div>
</form>
</div>