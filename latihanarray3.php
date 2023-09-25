<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>

<?php
    $m1 = ['nim' => '0111111', 'nama' => 'andi setyo', 'nilai'=>95];
    $m2 = ['nim' => '0111111', 'nama' => 'rafel', 'nilai'=>80];
    $m3 = ['nim' => '0111111', 'nama' => 'budi', 'nilai'=>78];
    $m4 = ['nim' => '0111111', 'nama' => 'hana', 'nilai'=>76];
    $m5 = ['nim' => '0111111', 'nama' => 'anna', 'nilai'=>86];
    $m6 = ['nim' => '0111111', 'nama' => 'joko', 'nilai'=>50];
    $m7 = ['nim' => '0111111', 'nama' => 'farhan', 'nilai'=>20];
    $m8 = ['nim' => '0111111', 'nama' => 'kio', 'nilai'=>30];
    $m9 = ['nim' => '0111111', 'nama' => 'kiki', 'nilai'=>70];
    $m10 = ['nim' => '0111111', 'nama' => 'kinan', 'nilai'=>65];

    $ar_judul = ['no','NIM','nama mahasiswa', 'nilai','keterangan','grade','predikat'];
    $mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
?>
    <h3>Daftar Nilai mahasiswa</h3>
    <table>
        <thead>
            <tr>
                <?php
                foreach($ar_judul as $judul){

                } ?>
            </tr>
        </thead>
    </table>

</body>
</html>