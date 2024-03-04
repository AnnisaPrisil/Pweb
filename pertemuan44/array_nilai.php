<?php

// menentukan data siswa (nama dan nilai)
$dataSiswa = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90
];

// menghitung rata-rata nilai kelas
$rataRataKelas = array_sum($dataSiswa) / count($dataSiswa);

echo "Rata-rata nilai kelas: " . number_format($rataRataKelas, 2) . "<br>";

echo "Daftar siswa yang mendapatkan nilai di atas rata-rata kelas:<br>";

// menampilkan daftar siswa dengan nilai di atas rata-rata kelas
foreach ($dataSiswa as $nama => $nilai) {
    if ($nilai > $rataRataKelas) {
        echo "$nama: $nilai<br>";
    }
}

?>
