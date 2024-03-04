<?php
$nilaiNumerik = 92;

/*menambahkan struktur nilai numerik yang berisi angka dibawah indeks 100 */
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

/*menentukan indeks jarak saat ini dan target yang akan ditempuh */
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo " Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

/*menentukan indeks jumlah lahan,tanaman perlahan, 
buah per tanaman yang akan dihitung jarak penentuan ukurannya */
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo " Jumlah buah yang akan dipanen adalah: $jumlahBuah";

/*menentukan indeks skor ujian dan total skor dari jarak 
sampai penentuan lahan tempat yang dituju */
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo " Total skor ujian adalah: $totalSkor";

/*menentukan indeks nilai siswa berdasarkan penilaian yang dicapai atlet 
oleh juri yang sudah ditentukan nilainya */
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo " Nilai: $nilai (Tidak lulus) <br>";
    } else {
        echo " Nilai: $nilai (Lulus) <br>";
    }
}
?>
