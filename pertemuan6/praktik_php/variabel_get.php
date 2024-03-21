<?php
$nama = @$_GET['nama']; //@ menambahkan karakter tersebut agar tidak eror
$usia = @$_GET['usia']; // tanda @ agar tidak ada peringatan eror saat key program kosong 

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>