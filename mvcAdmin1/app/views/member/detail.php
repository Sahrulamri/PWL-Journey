<div class="container mt-3">
    <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="<?= BASEURL; ?>/img/daun/<?= $data['member']['foto']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">
                <div class="col-md-5">
                    <b>Nama : </b>
                </div>
                <div class="col-md-7">
                    <?= $data['member']['nama_member']; ?>
                </div>
            </h5>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <b>Alamat</b>
                    </div>
                    <div class="col-md-7">
                        :
                        <?= ($data['member']['alamat']); ?>
                    </div>
                    <div class="col-md-5">
                        <b>No Telp</b>
                    </div>
                    <div class="col-md-7">
                        :
                        <?= ($data['member']['telp']); ?>
                    </div>
                    <div class="col-md-5">
                        <b>Email</b>
                    </div>
                    <div class="col-md-7">
                        :
                        <?= ($data['member']['email']); ?>
                    </div>
                    <div class="col-md-5">
                        <b>Username</b>
                    </div>
                    <div class="col-md-7">
                        :
                        <?= ($data['member']['userName']); ?>
                    </div>
                </div>
            </div>
            <a href="<?= BASEURL; ?>member" class="btn btn-danger mt-2">Kembali</a>
        </div>
    </div>
</div>