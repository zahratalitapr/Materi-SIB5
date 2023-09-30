<?php

require 'suhu.php';



$dataKonversiSuhu = [
    new KonversiSuhu('Celcius', 25, 'Fahrenheit'),
    new KonversiSuhu('Fahrenheit', 77, 'Celcius'),
    new KonversiSuhu('Celcius', 30, 'Reamur'),
    new KonversiSuhu('Reamur', 24, 'Celcius'),
];

// Cetak data dalam format tabel
echo "<table border='1'>";
echo "<tr>";
echo "<th>Satuan Suhu Awal</th>";
echo "<th>Besaran Suhu</th>";
echo "<th>Satuan Suhu Tujuan</th>";
echo "<th>Hasil Konversi Suhu</th>";
echo "</tr>";

foreach ($dataKonversiSuhu as $konversiSuhu) {
    $konversiSuhu->cetak();
}

echo "</table>";
?>