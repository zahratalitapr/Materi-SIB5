<?php

class Person{
    public $name;
    public $gender;

    // buat construct
    public function __construct ($name, $gender){
        $this->name = $name;
        $this->gender = $gender;
    }
    public function cetak(){
        echo 'Nama : '.$this->name;
        echo '<br> Jenis Kelamin : '.$this->gender;
    }
}
?>