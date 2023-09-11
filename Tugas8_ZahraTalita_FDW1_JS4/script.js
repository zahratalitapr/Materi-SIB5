function dataPembeli() {
    let form = document.getElementById('form');
    let nama =  form.nama.value;
    let produk =  form.produk.value;
    let jumlah = form.jumlah.value;
    let hargaSatuan = 0;

    switch (produk) {
        case "TV": hargaSatuan = 2000000; break;
        case "AC": hargaSatuan = 3000000; break;
        case "Kulkas": hargaSatuan = 4000000; break;
        default: hargaSatuan = 0; break;
    }

    const hargaKotor = hargaSatuan * jumlah;

    let diskon = 0;

    if (produk === "Kulkas" && jumlah >= 3) {
        diskon = 0.3 * hargaKotor;
    } else if (produk === "AC" && jumlah >=3){
        diskon = 0.2 * hargaKotor;
    } else {
        diskon = 0.1 * hargaKotor;
    }

    const ppn = 0.1 * (hargaKotor - diskon);
    const hargaBayar = (hargaKotor - diskon) + ppn;
    
    let proses = `Input Data
     Nama : ${nama}
     Produk beli : ${produk}
     Harga Satuan : ${hargaSatuan}
     Jumlah produk (pcs) : ${produk}
     Harga kotor : ${hargaKotor}
     Diskon : ${diskon}
     PPN : ${ppn}
     Harga Bayar : ${hargaBayar}
    `;

    alert(proses);
}