document.addEventListener('DOMContentLoaded', function(){
    // kecil: menambahkan event listener pada tombol 'Pelajari'
    document.querySelectorAll('.btn').forEach(function(b){
        b.addEventListener('click', function(e){
            // jika link dummy, cegah reload
            if (this.getAttribute('href') === '#') {
                e.preventDefault();
                alert('Fungsi "Pelajari" belum diimplementasikan. Ini demo.');
            }
        });
    });
});
