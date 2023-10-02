<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
require_once 'Staff.php';

$d1 =  new Dosen ('Budi', 'L', '111111', 'S.Kom');
$m1 = new Mahasiswa ('Wawawi', 'L', 3, 'TI');
$s1 = new Staff ('Bianca', 'P', 'Marketing', '020202', '1000000');

$data = [$d1, $m1, $s1];

echo '<h3> Data Civitas Kampus </h3>';
echo '<p>';
foreach ($data as $d){
    echo $d->cetak();
}

echo '</p>';
?>