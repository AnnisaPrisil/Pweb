<?php

// melengkapi harga produk jual
$hargaProduk = 120000;

// melengkapi batas nilai untuk mendapatkan diskon
$batasDiskon = 100000;

// menentukan persentase diskon
$persentaseDiskon = 20;

// Menghitung harga setelah diskon
if ($hargaProduk > $batasDiskon) {
    // Menghitung diskon
    $diskon = ($persentaseDiskon / 100) * $hargaProduk;

    // Menghitung harga yang harus dibayar setelah diskon
    $hargaSetelahDiskon = $hargaProduk - $diskon;

    echo "Harga produk sebelum diskon: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
    echo "Diskon ($persentaseDiskon%): Rp " . number_format($diskon, 0, ',', '.') . "<br>";
    echo "Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
} else {
    // Jika harga produk tidak mencapai batas diskon
    echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
    echo "Tidak ada diskon yang diberikan.";
}

?>
