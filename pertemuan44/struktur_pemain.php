<?php

// menentukan skor pemain
$poin = 700; // Ganti nilai sesuai dengan skor pemain

// melengkapi hadiah tambahan diberikan jika skor lebih dari 500
$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";

// menampilkan informasi total skor dan apakah mendapatkan hadiah tambahan
echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";

?>
