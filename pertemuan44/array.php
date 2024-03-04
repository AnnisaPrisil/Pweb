<?php
/*menentukan nilai siswa yang sesuai dengan kategori siswa yang lulus */
$nilaiSiswa = [85,92,78,64,90,55,88,79,70,96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " .implode(',', $nilaiLulus);

/*menentukan daftar nama karyawan dan pengalaman kerja */
$daftarKaryawan = [
    ['Alice',7],
    ['Bob',7],
    ['Charlie',7],
    ['David',7],
    ['Eva',7],
];

$karyawanPengalamanLimaTahun = [];
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " .implode(',',
$karyawanPengalamanLimaTahun);

/*menentukan daftar nilai siswa pada mata pelajaran yang dituju */
$daftarNilai=[
    'Matematika'=>[
        ['Alice',85],
        ['Bob',92],
        ['Charlie', 78],
    ],
    'Fisika'=> [
        ['Alice',90],
        ['Bob',88],
        ['Charlie', 75],  
    ],
    'Kimia'=>[
        ['Alice',92],
        ['Bob',80],
        ['Charlie', 85],
    ]
    ];

/*memilih daftar mata pelajaran  */
$mataKuliah = 'Fisika';
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
foreach ($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
    

