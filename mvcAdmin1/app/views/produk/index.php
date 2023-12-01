<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <a href="<?= BASEURL; ?>/produk/tambah" class="btn btn-success text-white">Tambah Data</a>

            <table class="table table-striped mt-2">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $number = 1;
                    foreach ($data['produk'] as $p): ?>
                        <tr>
                            <td>
                                <?= $number++; ?>
                            </td>
                            <td>
                                <?= $p['nama']; ?>
                            </td>
                            <td>Rp.
                                <?= number_format($p['hrg'], 0, '.', '.'); ?>
                            </td>
                            <td>
                                <?= $p['jml']; ?>
                            </td>
                            <td>
                                <?= $p['keterangan']; ?>
                            </td>
                            <td>
                                <img style="width:100px; height:100px" src="<?= BASEURL; ?>/img/daun/<?= $p['foto']; ?>"
                                    alt="">
                            </td>
                            <td>
                                <a href="<?= BASEURL; ?>produk/edit/<?= $p['id']; ?>" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <a href="<?= BASEURL; ?>produk/delProduk/<?= $p['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>