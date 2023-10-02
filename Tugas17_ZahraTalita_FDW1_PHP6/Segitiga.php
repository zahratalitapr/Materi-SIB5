<?php

require_once 'bentukTwoD.php';

class Segitiga extends Bentuk2D{
    // membuat class 

    // variable
    public $alas;
    public $tinggi;
    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    // method nama bidang
    public function namaBidang(){
        return "Segitiga";
    }

    // method luas bidang
    public function luasBidang(){
        $luas = ($this->alas * $this->tinggi)/2;
        return $luas;
    }

    // method keliling bidang
    public function kelilingBidang(){
        $keliling = 3 * ($this->alas); //sisi a + sisi b + sisi c
        return $keliling;
    }

    // method keterangan
    public function keterangan(){
        return "Menghitung luas dan keliling Segitiga";
    }
}

?>