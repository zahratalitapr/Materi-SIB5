<?php
require_once 'abstract.php';

class Lingkaran extends Bentuk2d{
    public $jari2;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function keliling(){
        $keliling = 2 * 3.14 * $this->jari2 ;
        return $keliling;
    }
    public function LuasBidang(){
        $luas = 3.14 * ($this->jari2 * $this->jari2);
        return $luas;
    }

}
?>