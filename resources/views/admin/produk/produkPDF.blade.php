<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data produk</title>
</head>
<body>
    <h3 align="center">Data Produk</h3>
    <table border="1" cellpadding="10" align="center">
        <thead>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Minimal Stok</th>
            <th>Jenis Produk</th>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($produk as $p)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$p->kode}}</td>
                <td>{{$p->nama}}</td>
                <td>Rp. {{$p->harga_beli}}</td>
                <td>Rp. {{$p->harga_jual}}</td>
                <td>{{$p->stok}}</td>
                <td align="center">{{$p->min_stok}}</td>
                <td>{{$p->jenis}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>