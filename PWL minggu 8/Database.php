<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'toko_abc');

class Database {
    public $conn;
    function __construct()
    {
    $this->conn = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    }
    public function insProduk($id,$nama,$hrg,$jml,$ket,$foto){
        $sql = "insert into barang (id,nama,hrg,jml,keterangan,foto) values('$id','$nama',$hrg,$jml,'$ket','$foto')";
        $hasil=$this->conn->query($sql);
        return $hasil;
    }
    public function produkAll(){
        $sql="select * from barang";
        $hasil=$this->conn->query($sql);
        return $hasil;
    }
    public function produk($id){
        $sql="select * from barang where id='$id'";
        $hasil=$this->conn->query($sql);
        return $hasil;
    }
    public function getFoto($id){
            $sql="select foto from barang where id='$id'";
            $hasil=$this->conn->query($sql);
            while ($row=$hasil->fetch_assoc()){
            $foto=$row['foto'];
            }
            return $foto;
    }
    public function updProduk($id,$nama,$hrg,$jml,$ket,$foto){
        if ($foto=="")
        $sql = "update barang set nama='$nama',hrg='$hrg',jml='$jml',keterangan='$ket' where id='$id'";
    else
        $sql = "update barang set
        nama='$nama',hrg='$hrg',jml='$jml',keterangan='$ket',foto='$foto' where id='$id'";

        $hasil=$this->conn->query($sql);
        return $hasil;
    }
    public function delProduk($id){
        $sql="delete from barang where id=$id";
        $hasil=$this->conn->query($sql);
        return $hasil;
    }
}
?>
