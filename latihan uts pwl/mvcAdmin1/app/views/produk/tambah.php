<div class="container mt-3">
    <form action="<?= BASEURL; ?>/produk/insProduk" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="12" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control" id="nama" name="tnama" placeholder="Nama User">
        </div>
        <div class="mb-3">
            <label for="13" class="form-label">Umur </label>
            <input type="text" class="form-control" id="hrg" name="thrg" placeholder="umur" required>
        </div>

        <div class="mb-3">
            <label for="15" class="form-label">keterangan</label>
            <input type="text" class="form-control" id="ket" name="tket" placeholder="keterangan">
        </div>
        <div class="mb-3">
            <label for="16" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="ket" name="foto">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="<?= BASEURL; ?>/produk" class="btn btn-primary mt-2">Kembali</a>
        </div>
    </form>
</div>