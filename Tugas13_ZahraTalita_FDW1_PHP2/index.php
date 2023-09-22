<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 6 | Zahra Talita</title>
</head>
<style>

    *{
        margin-top: 0.4rem;
        text-align: center;
    }
    table, tr, td{
        border: 1px solid;
        margin: 0 auto;
    }

    select{
        margin-top: 1rem;
    }

    button{
        margin-bottom: 1rem;
        margin-top: 1rem;
    }
</style>
<body>
    <form action="" method="post">

        <!-- input nama -->
        <label for="">Nama : </label>
        <input type="text" name="nama" id="" require><br>

        <!-- seleksi pekerjaan -->
        <label for="">Pekerjaan : </label>
        <select name="pekerjaan" id="">
            <option value="">--Pilih Pekerjaan--</option>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
            <option value="Koki">Koki</option>
            <option value="Petani">Petani</option>
            <option value="Tentara">Tentara</option>
            <option value="Artis">Artis</option>
            <option value="Karyawan Swasta">Karyawan Swasta</option>
            <option value="Teknisi">Teknisi</option>
            <option value="erawat">Perawat</option>
            <option value="Arsitektur">Arsitektur</option>
        </select>
        
        <!-- hobby -->
        <p>Hobby : </p>
        <label for=""><input type="radio" name="hobby" id="memasak" value="Memasak">Memasak<br></label>

        <label for=""><input type="radio" name="hobby" id="membaca" value="Membaca">Membaca<br></label>

        <label for=""><input type="radio" name="hobby" id="menari" value="Menari">Menari<br></label>

        <label for=""><input type="radio" name="hobby" id="lari" value="Lari">Lari<br></label>

        <label for=""><input type="radio" name="hobby" id="film" value="Menonton Film">Menonton Film<br></label>

        <label for=""><input type="radio" name="hobby" id="berenang" value="Berenang">Berenang<br></label>

        <label for=""><input type="radio" name="hobby" id="berkebun" value="Berkebun">Berkebun<br></label>

        <label for=""><input type="radio" name="hobby" id="fotografi" value="Fotografi">Fotografi<br></label>

        <label for=""><input type="radio" name="hobby" id="olahraga" value="Olahraga">Olahraga<br></label>

        <label for=""><input type="radio" name="hobby" id="menyanyi" value="Menyanyi">Menyanyi<br></label>

        <!-- simpan -->
        <button name="simpan" type="submit">Simpan</button>
    </form>

    <?php
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobby = $_POST['hobby'];
    ?>

    <table>
        <tr>
            <td>Nama</td>
            <td>Pekerjaan</td>
            <td>Hobby</td>
        </tr>
        <tr>
            <td><?php echo $nama; ?></td>
            <td><?php echo $pekerjaan; ?></td>
            <td><?php echo $hobby; ?></td>
        </tr>
    </table>
   <?php } ?>
    
    </body>
</html>