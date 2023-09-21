<?php
//  echo "Hello World";

// latihan membuat variable
$jari2 = 15;
define('PHI', 3.14);

$luas = PHI * $jari2 *$jari2;
$namaSiswa = "Budi Santoso";
$umur = 25;
$beratBadan = 30.5;
$_pekerjaan = 'mahasiswa';

// print
echo '<br>Nama Mahasiswa : '.$namaSiswa;
echo '<br>Umur : '.$umur;
echo '<br>Berat Badan : '.$beratBadan;
echo '<br>Pekerjaan : '.$_pekerjaan;
?>

?>
<hr> 
<br> Siswa : 1: <?= $namaSiswa ?>
<p>Umur : <?= $umur ?></p>
<p> Luas jari jari diatas adalah <?= $luas ?></p>
