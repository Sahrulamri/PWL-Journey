<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1> Form Edit Member</h1>
            <Form action="<?= BASEURL; ?>/member/updMember" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="11" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="tid" value="<?= $data['member']['id']; ?>"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="12" class="form-label">Nama Member</label>
                    <input type="text" class="form-control" id="id" name="tnama_member"
                        value="<?= $data['member']['nama_member']; ?>">
                </div>
                <div class="mb-3">
                    <label for="13" class="form-label">Email</label>
                    <input type="text" class="form-control" id="id" name="temail"
                        value="<?= $data['member']['email']; ?>">
                </div>
                <div class="mb-3">
                    <label for="14" class="form-label">Telp</label>
                    <input type="text" class="form-control" id="id" name="ttelp"
                        value="<?= $data['member']['telp']; ?>">
                </div>
                <div class="mb-3">
                    <label for="15" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="id" name="talamat"
                        value="<?= $data['member']['alamat']; ?>">
                </div>
                <div class="mb-3">
                    <label for="16" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="id" name="tkota"
                        value="<?= $data['member']['kota']; ?>">
                </div>
                <div class="mb-3">
                    <label for="17" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="id" name="tprovinsi"
                        value="<?= $data['member']['provinsi']; ?>">
                </div>
                <div class="mb-3">
                    <label for="18" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="id" name="tgender"
                        value="<?= $data['member']['gender']; ?>">
                </div>
                <div class="mb-3">
                    <label for="19" class="form-label">Username</label>
                    <input type="text" class="form-control" id="id" name="tusername"
                        value="<?= $data['member']['username']; ?>">

                    <div class="mb-3">
                        <label for="20" class="form-label">Password</label>
                        <input type="text" class="form-control" id="id" name="tpassword"
                            value="<?= $data['member']['password']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="21" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        <input type='hidden' name='foto_lama' value="<?= $data['member']['foto']; ?>">
                        <img class="mt-2" src="<?= BASEURL; ?>/img/daun/<?php echo $data['member']['foto']; ?>"
                            width="150px" height="120px" />
                        <input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto<br>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Update</button>

                    <a href="<?= BASEURL; ?>member" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>