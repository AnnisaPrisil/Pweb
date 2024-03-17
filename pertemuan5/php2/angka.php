<?php
function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    // panggil diri sendiri selama indeks kurang dari atau sama dengan jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
// panggil fungsi untuk menampilkan angka dari 1 hingga 5
tampilkanAngka(5);
?>