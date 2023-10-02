<?php 

require_once 'bentukTwoD.php';
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$l1 = new Lingkaran (10);
$pp1 = new PersegiPanjang(10,10);
$s1 =  new Segitiga(10,10);

$hasilBidang = [$l1, $pp1, $s1];
$no = 1;
?>


<html>
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($hasilBidang as $h){
                echo "<tr>";
                echo"<td>".$no++."</td>";
                echo "<td>".$h->namaBidang()."</td>";
                echo "<td>".$h->keterangan()."</td>";
                echo "<td>".$h->LuasBidang()."</td>";
                echo "<td>".$h->kelilingBidang()."</td>";
                echo "</tr>";
            }
            ?>
        </tr>
        </tbody>
    </table>
</html>
