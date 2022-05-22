var input = document.getElementById("input");
function setOnClickListener(val) {

    switch (val) {
        // jika tombol C ditekan, maka kosongkan isi textbox
        case 'C':
            input.value = "";
            // tidak mengembalikan apa-apa, proses selanjutnya tidak tereksekusi
            return;
            break;
    
        default:
            break;
    }
    // tombol yang ditekan akan muncul pada textbox ditambah dengan nilai textbox yang sebelumnya
    input.value = input.value + val;
}