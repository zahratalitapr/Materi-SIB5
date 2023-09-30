<?php

class KonversiSuhu{
    public $satuanSuhuAwal;
    public $besaranSuhu;
    public $satuanSuhuTujuan;

    public function __construct ($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }


    public function CelciusToFahrenheit(){
        if($this->satuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Fahrenheit'){
            return ($this->besaranSuhu * (9/5)) + 32;
        }
    }

    public function FahrenheitToCelcius(){
        if($this->satuanSuhuAwal == 'Fahrenheit' && $this->satuanSuhuTujuan == 'Celcius'){
            return ($this->besaranSuhu - 32 ) * 5/9;
        }
    }

    public function CelciusToReamur(){
        if($this->satuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Reamur'){
            return ($this->besaranSuhu * (4/5) );
        }
    }

    public function ReamurToCelcius(){
        if($this->satuanSuhuAwal == 'Reamur' && $this->satuanSuhuTujuan == 'Celcius'){
            return ($this->besaranSuhu * (5/4) );
        }
    }

    public function cetak() {
        $hasilKonversi = null;
        if ($this->satuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Fahrenheit') {
            $hasilKonversi = $this->CelciusToFahrenheit();
        } elseif ($this->satuanSuhuAwal == 'Fahrenheit' && $this->satuanSuhuTujuan == 'Celcius') {
            $hasilKonversi = $this->FahrenheitToCelcius();
        } elseif ($this->satuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Reamur') {
            $hasilKonversi = $this->CelciusToReamur();
        } elseif ($this->satuanSuhuAwal == 'Reamur' && $this->satuanSuhuTujuan == 'Celcius') {
            $hasilKonversi = $this->ReamurToCelcius();
        }
        
        if ($hasilKonversi !== null) {
            echo "<tr>";
            echo "<td>{$this->satuanSuhuAwal}</td>";
            echo "<td>{$this->besaranSuhu}</td>";
            echo "<td>{$this->satuanSuhuTujuan}</td>";
            echo "<td>{$hasilKonversi}</td>";
            echo "</tr>";
        }
    }
}

?>