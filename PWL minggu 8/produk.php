<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
crossorigin="anonymous">
    <title>Hello, World</title>

</head>
<body>
    <nav class="collapse navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="member.php">Member</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php
        require_once'Database.php';
        $db=new Database();
        $hasil=$db->produkAll();
        echo "<a href='addBrg.php' class='btn btn-success text-white'>Tambah Data</a>";

        if($hasil->num_rows>0) {
            echo "<table class='table table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Harga</th>
                        <th scope='col'>Stok</th>
                        <th scope='col'>Keterangan</th>
                        <th scope='col'>Foto</th>
                        <th scope='col'>Edit</th>
                        <th scope='col'>Hapus</th>
                    </tr>
                </thead>
                <tbody>";
                    while ($row=$hasil->fetch_assoc()) {
                        $teks="<tr>";
                        $teks.="<td>".$row["id"]."</td>";
                        $teks.="<td>".$row["nama"]."</td>";
                        $teks.="<td>".$row["hrg"]."</td>";
                        $teks.="<td>".$row["jml"]."</td>";
                        $teks.="<td>".$row["keterangan"]."</td>";
                        $teks.="<td><img src='img/".$row["foto"]."' style='width:100px;heigth:100px;'></img></td>";
                        $teks.="<td><a href='editBrg.php?id=".htmlentities($row["id"])."' class='btn btn-primary'>Edit</a></td>";
                        $teks.="<td><a href='delBrg.php?id=".htmlentities($row["id"])."' class='btn btn-danger'>Hapus</a></td>";
                        $teks.="</tr>";
                        echo $teks;
                    }
                echo "</table>
                </table>";
        }
        else {
            echo "jml rec: 0";
        }
        //$con->close();
        ?>

    </div>
<!-- Optional JavaScript; choose one of the two! -->
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
crossorigin="anonymous"></script> -->
 <!-- Option 2: Separate Popper and Bootstrap JS -->
 <!--
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-
cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
crossorigin="anonymous"></script>
 -->
</body>
</html>