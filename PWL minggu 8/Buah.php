<?php
class Buah {
    //Properties
    public $nama;
    public $warna;

    // Methods
    function set_nama($nama) {
        $this->nama = $nama;
    }
    function get_nama() {
        return $this->nama;
    }
}
?>