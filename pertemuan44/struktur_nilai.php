<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

/* menentukan urutan nilai siswa dalam bentuk array secara ascending*/
sort($nilaiSiswa);

// Menghapus dua nilai siswa yang terendah
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);

// Menghapus dua nilai siswa tertinggi
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

// Menghitung total nilai siswa 
$totalNilai = array_sum($nilaiSiswa);

// Menghitung rata-rata nilai indeks siswa
$jumlahSiswa = count($nilaiSiswa);
$rataRataNilai = $totalNilai / $jumlahSiswa;

echo "Daftar Nilai Siswa: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai setelah mengabaikan  2 nilai tertinggi dan 2 nilai terendah: $totalNilai <br>";
echo "Rata-rata nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: " . number_format($rataRataNilai, 2);

?>
