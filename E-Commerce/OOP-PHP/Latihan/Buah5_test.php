<!DOCTYPE html>
<html>

<body>
    <?php
    include "BuahHard.php";
    include "BuahSoft.php";
    $pear = new BuahHard(
        "Pear",
        "Kuning"
    );
    $pear->message();
    $pear->intro();
    echo "<br />";
    $raspberry = new
        BuahSoft("raspberry", "Merah");
    $raspberry->message();
    $raspberry->intro();
    //err krn hny bisa diakses oleh
//class itu sendiri/anaknya
    $pear->printManfaat();
    ?>
</body>

</html>