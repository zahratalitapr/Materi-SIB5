<?php
require_once 'Person.php';
class Mahasiswa extends Person{
    public $semester;
    public $jurusan;
    public function __construct($name, $gender, $semeter, $jurusan){
        parent::__construct($name, $gender);
        $this->semester = $semeter;
        $this->jurusan = $jurusan;
    }
    public function cetak(){
        parent::cetak();
        echo '<br> Semsterter : '.$this->semester;
        echo '<br> Jurusan : '.$this->jurusan;
        echo '<hr>';

    }
}
?>