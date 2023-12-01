<div class="container mt-3">
    <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="<?= BASEURL; ?>/img/daun/<?= $data['produk']['foto']; ?>" alt="">
        <div class="card-body">
            <h5 class="card-title">
                <?= $data['produk']['nama']; ?>
            </h5>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <b>Harga</b>
                    </div>
                    <div class="col-md-7">
                        : Rp.
                        <?= number_format($data['produk']['hrg'], '0', '.', '.'); ?>
                    </div>
                    <div class="col-md-5">
                        <b>Stok</b>
                    </div>
                    <div class="col-md-7">
                        :
                        <?= ($data['produk']['jml']); ?>
                    </div>
                    <div class="col-md-5">
                        <b>Keterangan</b>
                    </div>
                    <div class="col-md-7">
                        :
                        <?= ($data['produk']['keterangan']); ?>
                    </div>
                </div>
            </div>
            <a href="<?= BASEURL; ?>produk" class="btn btn-danger mt-2">Kembali</a>
        </div>
    </div>
</div>