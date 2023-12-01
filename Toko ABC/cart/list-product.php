<?php
session_start();

//pemeriksaan session 
if (isset($_SESSION['login'])) {
    //jika sudah login 
    if (empty($_SESSION['cart']["arrCart"]))
        $_SESSION['cart']["arrCart"] = array();

    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>daftar produk </title>
    </head>

    <body>
        Selamat Datang,
        <?php echo $_SESSION['login'] ?> (<a href="cart-disp.php">Cek Cart</a>) (<a href="logout.php">Log Out</a>)
        <h2>Tanaman Hias Aglonema</h2>

        <table align="center">
            <tr>
                <td>
                    <img src='img/aglonemaSnowWhiteRemaja.jpg' style='width:100px;height:100px' /><br />
                    <a href="addCart.php?brg=AglonemaSnowWhiteRemaja&hrg=35000&jml=1">AglonemaSnowWhiteRemaja</a><br />
                    35000
                </td>
                <td>
                    <img src='img/aglonemaBigroy.jpg' style='width:100px;height:100px' /><br />
                    <a href="addCart.php?brg=AglonemaBigroy&hrg=68000&jml=1">AglonemaBigroy</a><br />
                    60000
                </td>
                <td>
                    <img src='img/aglonemakhocin.jpg' style='width:100px;height:100px' /><br />
                    <a href="addCart.php?brg=Aglonenakhocin&hrg=60000&jml=1">Aglonemakhocin</a><br />
                    60000
                </td>
            </tr>
            <tr>
                <td>
                    <img src='img/aglonemaRedAnjamaniDewasa.jpg' style='width:100px;height:100px' /><br />
                    <a href="addCart.php?brg=AglonemaRedAnjamaniDewasa&hrg=80000&jml=1">AglonemaRedAnjamaniDewasa</a><br />
                    80000
                </td>
                <td>
                    <img src='img/aglonemaRedChocin.jpg' style='width:100px;height:100px' /><br />
                    <a href="addCart.php?brg=AglonemaRedChocin&hrg=80000&jml=1"> AglonemaRedChocin</a><br />
                    80000
                </td>
                <td>
                    <img src='img/aglonemaRedMajesty.jpg' style='width:100px;height:100px' /><br />
                    <a href="addCart.php?brg=AglonemakedMajesty&hrg=50000&jml=1">AglonemaRedMajesty</a><br />
                    100000
                </td>
            </tr>
        </table>
    </body>

    </html>

    <?php
} else {
    //session belum ada artinya belum login 
    header("location: loginsession.php");
}
?>