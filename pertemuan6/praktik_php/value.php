<?php
//membuat fungsi umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

//mengisikan indeks umur masing-masing 
echo  "Umur saya adalah" . hitungUmur(2004,2024) . "tahun"

?>