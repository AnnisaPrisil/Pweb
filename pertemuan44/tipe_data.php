<?php
$a = 10;
$b = 5;
$c = $a +5;
$d = $b + (10 * 5);
$e = $d - $c;

/*menentukan variabel yang akan dibuat terdapat 5 variabel yang dibuat setiap baris yang berbeda*/
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e) ;


/*menambahkan isi dari tipe data dengan menliskan beberapa tipe karakter tentang nilai matematika,IPA,bahasa indonesia*/ 
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

/* menghitung rata-rata nilai dari ketiga tipe data yang dibuat*/ 
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) /3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);

/* menambahkan kembali tipe data siswa lulus dan siswa sudah ujian*/
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo"<br>";
var_dump($apakahSiswaSudahUjian);

/* menambahkan tipe data nama lengkap yang terdiri dari nama depan,belakang*/
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';
$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo'Nama Belakang: ' .$namaBelakang . '<br>';

echo $namaLengkap;

/* menambahkan beberapa list mahasiswa */
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>