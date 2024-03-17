<?php

//membuat sebuah fungsi tentang umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;

}

//isi sesai dengan umur 
echo "Umur saya adalah ". hitungUmur(2004, 2024) ."tahun"
?>