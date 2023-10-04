<?php

include_once 'top.php';
include_once 'menu.php';

?>

<html>
    <head>
        <title>Data - SB Admin</title>
    </head>
    <div>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1">
                        Data Mahasiswa
                    </i>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Program Studi</th>
                                <th>Gender</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0001111</td>
                                <td>Abdul</td>
                                <td>Sistem Informasi</td>
                                <td>L</td>
                            </tr>
                            <tr>
                                <td>0002222</td>
                                <td>Malika</td>
                                <td>Teknik Informatika</td>
                                <td>P</td>
                            </tr>
                            <tr>
                                <td>0003333</td>
                                <td>Puspita</td>
                                <td>Teknik Elektro</td>
                                <td>P</td>
                            </tr>
                            <tr>
                                <td>000444</td>
                                <td>Abdul</td>
                                <td>Teknil Elektro</td>
                                <td>L</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</html>

<?php 
include_once 'bottom.php';
?>