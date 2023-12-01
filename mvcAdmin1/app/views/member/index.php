<div class="container mt-3">

    <a href="<?= BASEURL; ?>/member/tambah" class="btn btn-success mt-2">Tambah Data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Telp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kota</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Gender</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Foto</th>
                <th scope="col">Edit</th>
                <th scope="col">Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php $number = 1;
            foreach ($data['member'] as $p): ?>
                <tr>
                    <td>
                        <?= $number++; ?>
                    </td>
                    <td>
                        <?= $p['nama_member']; ?>
                    </td>
                    <td>
                        <?= $p['email']; ?>
                    </td>
                    <td>
                        <?= $p['telp']; ?>
                    </td>
                    <td>
                        <?= $p['alamat']; ?>
                    </td>
                    <td>
                        <?= $p['kota']; ?>
                    </td>
                    <td>
                        <?= $p['provinsi']; ?>
                    </td>
                    <td>
                        <?= $p['gender']; ?>
                    </td>
                    <td>
                        <?= $p['username']; ?>
                    </td>
                    <td>
                        <?= $p['password']; ?>
                    </td>
                    <td>
                        <img style="width:100px; height:100px" src="<?= BASEURL; ?>/img/member/<?= $p['foto']; ?>" alt="">
                    </td>
                    <td>
                        <a href="<?= BASEURL; ?>member/edit/<?= $p['id']; ?>" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="<?= BASEURL; ?>member/delMember/<?= $p['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>