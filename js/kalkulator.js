function plus() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka1.value);
    var a2 =  parseFloat(frm.angka2.value);

    var total = a1 + a2;
    frm.hasil.value = total;
}

function minus() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka1.value);
    var a2 =  parseFloat(frm.angka2.value);
    
    var total = a1 - a2;
    frm.hasil.value = total;
}

function multiple() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka1.value);
    var a2 =  parseFloat(frm.angka2.value);
    
    var total = a1 * a2;
    frm.hasil.value = total;
}
function devided() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka1.value);
    var a2 =  parseFloat(frm.angka2.value);
    
    var total = a1 / a2;
    frm.hasil.value = total;
}
function pangkat() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka1.value);
    var a2 =  parseFloat(frm.angka2.value);
    
    var total = a1 ** a2;
    frm.hasil.value = total;
}