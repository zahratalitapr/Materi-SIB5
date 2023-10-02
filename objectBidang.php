<?php
require_once 'abstract.php';
require_once 'Lingkaran.php';

$l1 = new Lingkaran(88);

$hasilBidang = [$l1];

foreach ($hasilBidang as $h){
    echo'<br>'.$h->keliling();
    echo'<br>'.$h->luasBidang();
}