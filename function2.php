<?php
/*conoth fungsi void yang
tidak mengembalikan nilai
dan kita buat sendiri
*/

// deklarasi fungsi salam
function salam(){
    echo '<br> Selamat pagi teman - teman';
}

// output fungsi salam
salam();


function sapa($kawan){
    echo '<br> Selamat pagi '.$kawan;
}

// ini pemanggilan fungsi sapa dengan membuat variable baru
$nama = 'Deden';
sapa($nama);

// ini pemanggilan langsing dengan value dari parameter
sapa('andi');


function kabar ($kawan = ' budi'){
    echo '<br> hai apa kabar '.$kawan;
}

// output fungais kabar

// menampilkan parameter dari fungsi kabar dengan value $kawan
kabar();

// mengubah value pada parameter $kawan
kabar('Dinda');

// fungsi mengecek bilangan prima atau bukan
function prima($bilangan){
    $prima = true;
    for($i=2; $i<$bilangan; $i++){
        if ($bilangan % $i == 0){
            $prima = false;
            break;
        }
    }
    return $prima;
}
if (prima(9)){
    echo "<br> Bilangan Prima";
} else {
    echo "<br> Bukan Bilangan Prima";
}
?>