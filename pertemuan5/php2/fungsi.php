<?php

//membuat fungsi baris umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

//membuat baris fungsi
function perkenalan($nama, $salam="Assalamualaikum") {
    echo "$salam.","";
    echo "Perkenalkan, nama saya Prisil<br/>"; // menuliskan variabel nama 
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi kembali tanpa parameter salam
perkenalan("Prisil");

//memanggil fungsi lain 
echo "Saya berusia ". hitungUmur(2004, 2024) ."tahun<br/>";

//memanggil fungsi parameter yang dibuat
perkenalan("Hamdana", "Hallo");
?>