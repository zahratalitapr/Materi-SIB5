<?php
require_once 'bentukTwoD.php';

class Lingkaran extends Bentuk2D{
    // membuat class 

    // jari2
    public $jari2;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }

    // method nama bidang
    public function namaBidang(){
        return "Lingkaran";
    }

    // method luas bidang
    public function luasBidang(){
        $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    }

    // method keliling bidang
    public function kelilingBidang(){
        $keliling = 2 * (3.14 * $this->jari2);
        return $keliling;
    }

    // method keterangan
    public function keterangan(){
        return "Menghitung luas dan keliling Lingkaran";
    }
}
?>