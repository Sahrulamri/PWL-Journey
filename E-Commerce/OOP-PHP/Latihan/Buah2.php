<?php
class Buah
{
    // Properties
    public $nama;
    public $warna;
    // constructor
    function __construct($nama)
    {
        $this->nama = $nama;
    }

    // Methods
    function set_nama($nama)
    {
        $this->nama = $nama;
    }
    function get_nama()
    {
        return $this->nama;
    }
}
?>