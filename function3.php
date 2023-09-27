<?php

function tambah ($a, $b){
    $c = $a + $b;
    return $c;
}

// eksekusi value dari parameter
echo 'hasil dari 40 + 20 = '.tambah(40, 20);

$x = 20;
$y = 80;
echo '<br> hasil dari X + Y = '.tambah($x, $y);
?>