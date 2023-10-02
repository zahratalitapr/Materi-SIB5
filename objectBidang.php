<?php
require_once 'Lingkaran.php';

$l1 = new Lingkaran(15);

$hasilBidang = [$l1];

foreach ($hasilBidang as $Bentuk2D){
    echo'<br>'.$Bentuk2D->keliling();
    echo'<br>'.$Bentuk2D->LuasBidang();
    
}