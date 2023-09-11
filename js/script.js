function dataPerson() {
    let froms = document.getElementById('frm');
    let nama = froms.nama.value;
    let pekerjaan =  froms.pekerjaan.value;
    let hobby = froms.hobby.value;
    let data = `Input data
    <br> Nama : ${nama}
    <br> Pekerjaan : ${pekerjaan}
    <br> Hobby : ${hobby}
    `;
    document.getElementById('hasil').innerHTML = data;
}