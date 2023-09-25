<?php

//contoh array scalar atau 1 dimensi
$ar_buah = ['pepaya','mangga','pisang','jambu'];


// menambahkan data ke variable ar_buah
$ar_buah[] = 'jeruk';
$ar_buah = 'naga';

// mengganti data pada index tertentu
$ar_buah[2] = 'nanas';

// mmenghapus data pada index teretentu
unset($ar_buah[3]);

//menampilkan urutan index pada array $ar_buah
echo '<br> cetak data array menggunakan looping foreach';
foreach($ar_buah as $id => $buah){
    echo '<br> key array buah : '.$id;
}

//menampilkan data buag
foreach($ar_buah as $buah){
    echo '<br> Data Buah : '.$buah;
}

// menampilkan urutan index dan data 
foreach($ar_buah as $id => $buah){
    echo '<br> Buah dengan id : '.$id.' adalah buah '.$buah;
}
?>