<form action="" method="get">
    <label for="">nama</label> <br>
    <input type="text" name="nama"> <br>
    <label for="">Alamat</label><br>
    <input type="text" name="alamat"><br>
    <input type="submit" value="simpan" name="proses" id="">

</form>

<?php
$nama = $_GET ['nama'];
$alamat = $_GET ['alamat'];

// menampilkan output
$proses = $_GET['proses'];
if (isset($proses)){
    echo 'Nama : '.$nama. '<br> Alamat : '.$alamat;
}

?>