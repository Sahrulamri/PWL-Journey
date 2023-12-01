<?php
session_start();
if (isset($_SESSION["username"]))
    $user=$_SESSION["username"];
else
    header("location:index.php");       //Perlu diubah nanti
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Hello, World</title>
</head>
<body>
    <nav class="navav-pills flex-sm-row bg-primary">
    <a class="flex-sm-fill text-sm-start nav-link text-light" href="dashboard.php">Dashboard</a>
    <span class="nav-link text-warning disabled" aria-current="page">List Product</span>
    <a class="flex-sm-fill text-sm-end nav-link text-ligth disabled" href="#">User :<?= $user ;?> </a>
    <a class="flex-sm-fill text-sm-end nav-link text-ligth" href="logout.php">Logout</a>
    </nav>

    <div class="container">
    <?php
        include "koneksi.php";
        $sql= "SELECT * from barang ORDER BY id";
        $hasil=$conn->query($sql);
        echo "<a href='addBrg.php' class='btn btn-success text-white'>Tambah Data</a>";

        if ($hasil->num_rows>0) {
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
                $teks.="<td>".$row["id"]. "</td>";
                $teks.="<td>".$row["nama"]. "</td>";
                $teks.="<td>".$row["hrg"]. "</td>";
                $teks.="<td>".$row["jml"]. "</td>";
                $teks.="<td>".$row["keterangan"]. "</td>";
                $teks.="<td><img src='img/".$row["foto"]. "' style='width:100px;  height:100px;'></img></td>";
                $teks.="<td><a href='editBrg.php?id=".$row["id"]. "'>Edit</a></td>";
                $teks.="<td><a href='delBrg.php?id=".$row["id"]. "'>Hapus</a></td>";
                $teks.="</tr>";
                echo $teks;
            }
            echo "</tbody>
                 </table>";
        } else {
            echo "jml rec: 0";
        }
        $conn->close();
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>