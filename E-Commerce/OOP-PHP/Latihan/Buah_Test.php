<?php
include "Buah.php";
$apel = new Buah();
$mangga = new Buah();
$apel->set_nama('Apel');
$mangga->set_nama('mangga');
echo $apel->get_nama();
echo "<br>";
echo $mangga->get_nama();
?>