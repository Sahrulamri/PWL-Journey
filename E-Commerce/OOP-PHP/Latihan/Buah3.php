<?php
class Buah
{
    // Properties
    public $nama;
    public $warna;
    // constructor
    function __construct($nama, $warna)
    {
        $this->nama = $nama;
        $this->warna = $warna;
    }
    // constructor
    function __destruct()
    {
        echo "Buah{$this->nama},warna {$this->warna} :di hancurkan dari memory ";
    }

}
?>