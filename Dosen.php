<?php 
require_once 'Person.php';
class Dosen extends Person{
    public $nidn;
    public $gelar;

    public function __construct($name, $gender, $nidn, $gelar){
        parent::__construct($name, $gender);
        $this->nidn = $nidn;
        $this->gelar = $gelar;
    }
    public function cetak(){
        parent::cetak();
        echo '<br> NIDN : '.$this->nidn;
        echo '<br> Gelar : '.$this->gelar;
        echo '<hr>';
    }
}
?>