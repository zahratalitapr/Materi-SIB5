<?php
$model = new Produk();
$data_produk = $model->dataProduk();
?>

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>kode</th>
                                            <th>nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($data_produk as $p){

                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $p['kode'] ?></td>
                                            <td><?= $p['nama'] ?></td>
                                            <td><?= $p['harga_beli'] ?></td>
                                            <td><?= $p['harga_jual'] ?></td>
                                            <td><?= $p['stok'] ?></td>
                                            <td><?= $p['min_stok'] ?></td>
                                            <td><?= $p['jenis'] ?></td>
                                            <td>
                                                <form>
                                                    <a href="index.php?url=produk_detail&id=<?= $p['id'] ?>">
                                                        <button type="button" class="btn btn-info btn-sm">Details</button>
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php

                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>