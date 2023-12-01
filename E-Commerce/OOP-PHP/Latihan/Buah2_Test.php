<?php
include "Buah2.php";
$apel = new Buah("Apel");
$mangga = new Buah("Mangga");
echo $apel->get_nama();
echo "<br>";
echo $mangga->get_nama();
?>