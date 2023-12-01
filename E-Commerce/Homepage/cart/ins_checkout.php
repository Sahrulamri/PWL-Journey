<?php
session_start();

include "../koneksi.php";
$idmember = $_POST["hidmember"];
$pembelian = $_POST["tpembelian"];
$ekspedisi = $_POST["tekspedisi"];
$biayaKirim = $_POST["tbiayaKirim"];
$totalByr = $_POST["ttotalByr"];
$jenisByr = $_POST["tjenisByr"];

$sql = "SELECT IF(max(id) IS NULL,0,max(id)) AS maks FROM tborder";
$hasil = $conn->query($sql);
while ($row = $hasil->fetch_assoc()) {
    $orderid = $row['maks'] + 1;
}

$sql = "INSERT INTO tborder (idmember,tgl,jenisByr,biayaKirim,pembelian,totalByr,ekspedisi,status) VALUES ('$idmember',now(),'$jenisByr','$biayaKirim','$pembelian','$totalByr','$ekspedisi','0')";
$conn->query($sql);
echo $sql;
echo "<br>";
$productid = 0;
if (!empty($_SESSION['cart'])) {
    $max = sizeof($_SESSION['cart']['arrCart']);
    for ($i = 0; $i < $max; $i++) {
        $productid = $_SESSION['cart']['arrCart'][$i]['productid'];
        $jml = $_SESSION['cart']['arrCart'][$i]['jml'];
        $hrg = $_SESSION['cart']['arrCart'][$i]['hrg'];
        $sql = "INSERT INTO tborder_detail (idorder,idbarang,jml,hrg) VALUES ('$orderid','$productid','$jml','$hrg')";
        $conn->query($sql);
        //echo $sql;
        //echo "<br>";
    }
}
unset($_SESSION['cart']);
$conn->close();
header("location:../index.html");
?>