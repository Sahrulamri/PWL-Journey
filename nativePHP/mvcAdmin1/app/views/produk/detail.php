<div class="container mt-3">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?= BASEURL; ?>/img/daun/<?= $data['produk']['foto']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $data['produk']['nama']; ?></h5>
            <p class="card-text">Umur <?= number_format($data['produk']['hrg']); ?></p>
            <p class="card-text"><?= $data['produk']['keterangan']; ?></p>
            <a href="<?= BASEURL; ?>/produk" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>