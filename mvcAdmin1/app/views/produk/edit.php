<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1> Form Edit Barang</h1>
            <Form action="<?= BASEURL; ?>/produk/updProduk" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="11" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="tid" value="<?= $data['produk']['id']; ?>"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="12" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="id" name="tnama" value="<?= $data['produk']['nama']; ?>">
                </div>
                <div class="mb-3">
                    <label for="13" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="id" name="thrg" value="<?= $data['produk']['hrg']; ?>">
                </div>
                <div class="mb-3">
                    <label for="14" class="form-label">Jml Stok</label>
                    <input type="text" class="form-control" id="id" name="tjml" value="<?= $data['produk']['jml']; ?>">
                </div>
                <div class="mb-3">
                    <label for="15" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="id" name="tket"
                        value="<?= $data['produk']['keterangan']; ?>">
                </div>
                <div class="mb-3">
                    <label for="16" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                    <input type='hidden' name='foto_lama' value="<?= $data['produk']['foto']; ?>">
                    <img class="mt-2" src="<?= BASEURL; ?>/img/daun/<?php echo $data['produk']['foto']; ?>"
                        width="150px" height="120px" />
                    <input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto<br>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Update</button>

                    <a href="<?= BASEURL; ?>produk" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>