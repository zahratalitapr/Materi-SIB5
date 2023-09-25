<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 3 | Zahra Talita</title>
</head>
<body>
     <?php 
        $m1 = ['nim' => '01111111', 'nama' => 'Andika Pratama', 'nilai' => 95];
        $m2 = ['nim' => '01111112', 'nama' => 'Susi Susanti', 'nilai' => 80];
        $m3 = ['nim' => '01111113', 'nama' => 'Irfan Hakim', 'nilai' => 78];
        $m4 = ['nim' => '01111114', 'nama' => 'Tara Basro', 'nilai' => 76];
        $m5 = ['nim' => '01111115', 'nama' => 'Cinta Laura', 'nilai' => 86];
        $m6 = ['nim' => '01111116', 'nama' => 'Farhan Candika', 'nilai' => 50];
        $m7 = ['nim' => '01111117', 'nama' => 'Agnes Monica', 'nilai' => 20];
        $m8 = ['nim' => '01111118', 'nama' => 'Diva Barus', 'nilai' => 30];
        $m9 = ['nim' => '01111119', 'nama' => 'SZA', 'nilai' => 70];
        $m10 = ['nim' => '01111110', 'nama' => 'Clay Jensen', 'nilai' => 65];

        // array asossiatif
        $data_mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

        // deklatari header table dengan looping
        $ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Grade', 'Predikat', 'Keterangan'];
        $grade = [];
        $predikat = [];
        $ket = [];
        $jumlah_mahasiswa = count($data_mahasiswa);
        $jumlah_nilai = array_column($data_mahasiswa,'nilai');
        $total_nilai = array_sum($jumlah_nilai);
        $nilai_tertinggi = max($jumlah_nilai);
        $nilai_terendah = min($jumlah_nilai);
        $rata_rata_nilai = $total_nilai / $jumlah_mahasiswa;
        $hasil = [
            'Nilai Tertinggi' => $nilai_tertinggi,
            'Nilai Terendah' => $nilai_terendah,
            'Rata - Rara Nilai' => $rata_rata_nilai,
            'Jumlah Mahasiswa' => $jumlah_mahasiswa,
            'Total Keseluruhan Nilai' => $total_nilai
        ]
        
     ?>

     <h3 align="center">Daftar Kelulusan Mahasiswa</h3>
     <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php 
                    foreach ($ar_judul as $judul){
                ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php $no=1;
            foreach ($data_mahasiswa as $dm) {
                if (($dm ['nilai'] == 100) || ($dm ['nilai'] > 85)){
                    $dm ['Grade'] = 'A';
                }  else if (($dm ['nilai'] == 85) || ($dm ['nilai'] > 75)) {
                    $dm ['Grade'] = 'B';
                } else if (($dm ['nilai'] == 75) || ($dm ['nilai'] > 65)) {
                    $dm ['Grade'] = 'C';
                } elseif (($dm ['nilai'] == 65) || ($dm ['nilai'] > 55)) {
                    $dm ['Grade'] = 'D';
                } else if (($dm ['nilai'] == 45) || ($dm ['nilai'] > 0)){
                    $dm ['Grade'] = 'E';
                } else { $dm ['Grade'] = '';}
                
                switch ($dm ['Grade']) {
                    case 'A' : $dm ['predikat'] = "Sempurna"; break;
                    case 'B' : $dm ['predikat'] = "Baik"; break;
                    case 'C' : $dm ['predikat'] = "Cukup"; break;
                    case 'D' : $dm ['predikat'] = "Kurang"; break;
                    case 'E' : $dm ['predikat'] = "Buruk"; break;
                    default: $dm ['predikat'] = ""; break;
                }

                $dm ['ket'] = $dm['nilai'] >= 60 ? 'LULUS' : 'TIDAK LULUS';
                ?>
            <tr align ="center">
                <td><?= $no ++ ?></td>
                <td><?= $dm ['nim'] ?></td>
                <td><?= $dm ['nama'] ?></td>
                <td><?= $dm ['nilai'] ?></td>
                <td><?= $dm ['Grade'] ?></td>
                <td><?= $dm ['predikat'] ?></td>
                <td><?= $dm ['ket'] ?></td>
            </tr>
        <?php } ?> 
        </tbody>
        <tfoot>
            <?php
                foreach ($hasil as $hsl => $hasilAkir){
                    ?>
                    <tr>
                        <th colspan="3"><?= $hsl ?></th>
                        <th colspan="5"><?= $hasilAkir ?></th>
                    </tr>
               <?php } ?>
        </tfoot>
     </table>
</body>
</html>