<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Diri</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="pekerjaan">Pekerjaan :</label>
        <select name="pekerjaan" id="pekerjaan" required>
            <option value="">--Pilih Pekerjaan--</option>
            <option value="Pekerjaan 1">Pekerjaan 1</option>
            <option value="Pekerjaan 2">Pekerjaan 2</option>
            <option value="Pekerjaan 3">Pekerjaan 3</option>
            <option value="Pekerjaan 4">Pekerjaan 4</option>
            <option value="Pekerjaan 5">Pekerjaan 5</option>
            <option value="Pekerjaan 6">Pekerjaan 6</option>
            <option value="Pekerjaan 7">Pekerjaan 7</option>
            <option value="Pekerjaan 8">Pekerjaan 8</option>
            <option value="Pekerjaan 9">Pekerjaan 9</option>
            <option value="Pekerjaan 10">Pekerjaan 10</option>
        </select><br><br>

        <p>Hobby :</p>
        <label for="hobby1"><input type="radio" name="hobby" id="hobby1" value="Hobby 1"> Hobby 1<br></label>
        <label for="hobby2"><input type="radio" name="hobby" id="hobby2" value="Hobby 2"> Hobby 2<br></label>
        <label for="hobby3"><input type="radio" name="hobby" id="hobby3" value="Hobby 3"> Hobby 3<br></label>
        <label for="hobby4"><input type="radio" name="hobby" id="hobby4" value="Hobby 4"> Hobby 4<br></label>
        <label for="hobby5"><input type="radio" name="hobby" id="hobby5" value="Hobby 5"> Hobby 5<br></label>
        <label for="hobby6"><input type="radio" name="hobby" id="hobby6" value="Hobby 6"> Hobby 6<br></label>
        <label for="hobby7"><input type="radio" name="hobby" id="hobby7" value="Hobby 7"> Hobby 7<br></label>
        <label for="hobby8"><input type="radio" name="hobby" id="hobby8" value="Hobby 8"> Hobby 8<br></label>
        <label for="hobby9"><input type="radio" name="hobby" id="hobby9" value="Hobby 9"> Hobby 9<br></label>
        <label for="hobby10"><input type="radio" name="hobby" id="hobby10" value="Hobby 10"> Hobby 10<br></label><br>

        <button name="simpan" type="submit">Simpan</button>
    </form>

    <?php
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobby = $_POST['hobby'];
    ?>

    <h2>Data Diri:</h2>
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
