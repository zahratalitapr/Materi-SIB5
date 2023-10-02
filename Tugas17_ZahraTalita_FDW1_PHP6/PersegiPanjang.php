<?php

require_once 'bentukTwoD.php';

class PersegiPanjang extends Bentuk2D{
    // membuat class 

    // variable
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // method nama bidang
    public function namaBidang(){
        return "Persegi Panjang";
    }

    // method luas bidang
    public function luasBidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    // method keliling bidang
    public function kelilingBidang(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }

    // method keterangan
    public function keterangan(){
        return "Menghitung luas dan keliling Persegi Panjang";
    }
}

?>