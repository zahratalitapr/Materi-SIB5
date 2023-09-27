<?php
function hitung($a1, $a2, $tombol){
    if($tombol == '+') $hasil = $a1 + $a2;
    else if ($tombol == '-') $hasil = $a1 - $a2;
    else if ($tombol == '*') $hasil = $a1 * $a2;
    else if ($tombol == '/') $hasil = $a1 / $a2;
    else $hasil = 0;
    return $hasil;
}
?>

<h1>Kalkulator</h1>
<form  method="post">
    <div class="input">
        <label for="">
            Angka 1
            <input type="text" name="a1" id="a1" require>
        </label><br>
        <label for="">
            Angka 2
            <input type="text" name="a2" id="a2" require>
        </label><br>
        <input type="submit" value="+" name="tombol" id="">
        <input type="submit" value="-" name="tombol" id="">
        <input type="submit" value="*" name="tombol" id="">
        <input type="submit" value="/" name="tombol" id="">
    </div>
    <div class="hasil">
        <?php
        if (isset($_POST['tombol'])) {
            $a1 = $_POST['a1'];
            $a2 = $_POST['a2'];
            $tombol = $_POST['tombol'];
            $hasil = hitung($a1, $a2, $tombol);
            echo "Hasilnya adalah $hasil";
        }
        ?>
        </div>
</form>
