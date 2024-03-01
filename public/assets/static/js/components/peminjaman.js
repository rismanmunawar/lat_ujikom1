document.getElementById('kd_anggota').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    var nmAnggotaInput = document.getElementById('nm_anggota');
    var namaAnggota = selectedOption.getAttribute('data-nama-anggota');
    nmAnggotaInput.value = namaAnggota;
});

 // Mengatur opsi yang memiliki status "Dipinjam" menjadi nonaktif
 var options = document.getElementById('kd_koleksi').getElementsByTagName('option');
 for (var i = 0; i < options.length; i++) {
     if (options[i].textContent.includes('(Dipinjam)')) {
         options[i].disabled = true;
     }
 }

 
document.getElementById('kd_koleksi').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    var judulInput = document.getElementById('judul');
    var jnsBhnPustakaInput = document.getElementById('jns_bhn_pustaka');
    var jnsKoleksiInput = document.getElementById('jns_koleksi');
    var jnsMediaInput = document.getElementById('jns_media');

    var judul = selectedOption.getAttribute('data-judul');
    var jnsBhnPustaka = selectedOption.getAttribute('data-jns-bhn-pustaka');
    var jnsKoleksi = selectedOption.getAttribute('data-jns-koleksi');
    var jnsMedia = selectedOption.getAttribute('data-jns-media');

    judulInput.value = judul;
    jnsBhnPustakaInput.value = jnsBhnPustaka;
    jnsKoleksiInput.value = jnsKoleksi;
    jnsMediaInput.value = jnsMedia;

    document.getElementById('jns_bhn_pustaka_hidden').value = jnsBhnPustaka;
    document.getElementById('jns_koleksi_hidden').value = jnsKoleksi;
});