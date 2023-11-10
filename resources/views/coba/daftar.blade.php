@php 

$no = 1;

$s1 = ['nama' => 'Fawwaz', 'nilai'=>85];
$s2 = ['nama' => 'Ali', 'nilai'=>95];
$s3 = ['nama' => 'Ari', 'nilai'=>75];
$s4 = ['nama' => 'Andi', 'nilai'=>65];
$s5 = ['nama' => 'Aji', 'nilai'=>55];

$judul = ['No', 'Nama', 'Nilai', 'Keterangan'];

$siswa = [$s1,$s2, $s3, $s4, $s5];

@endphp

<table border="1" align="center" cellpading="10">
    <thead>
        <tr>
            @foreach($judul as $jdl)
            <th>{{$jdl}}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach($siswa as $s)
        @php
        $ket = ($s['nilai'] >= 60) ? 'Lulus' : 'Gagal';
        @endphp
        <td>{{$no++}}</td>
        <td>{{$s['nama']}}</td>
        <td>{{$s['nilai']}}</td>
        <td>{{$ket}}</td>
        </tr>
        @endforeach
        
    </tbody>
</table> 