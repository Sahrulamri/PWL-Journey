<div class="container mt-3">
    <h1>Form Tambah Member</h1>
    <form action="<?= BASEURL; ?>member/insMember" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Member</label>
            <input type="text" class="form-control" id="nama" name="tnama" placeholder="Nama">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="temail" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label for="telp" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="telp" name="ttelp" placeholder="No telepon">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="talmt" placeholder="Alamat">
        </div>
        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" class="form-control" id="kota" name="tkota" placeholder="Kota">
        </div>
        <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="tprovinsi" placeholder="Provinsi">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="tgender" placeholder="Gender">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="tusername" placeholder="Username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="tpassword" placeholder="Password" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="<?= BASEURL; ?>member" class="btn btn-danger">Kembali</a>
        </div>
    </form>
</div>