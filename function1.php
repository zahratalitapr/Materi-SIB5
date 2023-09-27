<?php
$str = 'Belajar PHP di Kampus Merderka';
echo $str;

// cara mengubah upper case
$str = strtoupper($str);
echo '<br>'.$str;

// cara mengubah lower case
$str =  strtolower($str);
echo '<br>'.$str;

// cara mengurutkan sesuai abjad
$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Jambu', 'Apel'];
sort($ar_buah);
foreach($ar_buah as $buah){
    echo '<br>'.$buah;
}

// artsort => fungsi yang membalikan urutan abjad
echo('<hr>');
arsort($ar_buah);
foreach($ar_buah as $buah){
    echo '<br>'.$buah;
}
?>