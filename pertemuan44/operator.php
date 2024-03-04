<?php
$a =10;
$b = 5;

/*membuat dan menambahkan sebuah operator perhitungan dari variabel angka yang telah ditentukan */
$hasilTambah = $a + $b;
$hasilKurang = $a + $b;
$hasilKali = $a + $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

/*menambahkan kode operator */
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

/*menambahkan kode operator */
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

/*menambahkan kode hitung tambahan */
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

/* membuat sebuah hasil identik atau tidak 
yang bertujuan untuk mementuka hasil yang didapat pada variabel sudah sesuai atau belum*/
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;


echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";

/*melengkapi kode program soal (no 3.1) */
echo "<br> Hasil Penjumlahan: {$hasilTambah} <br>";
echo "Hasil Pengurangan: {$hasilKurang} <br>";
echo "Hasil Perkalian: {$hasilKali} <br>";
echo "Hasil Pembagian: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";

/*melengkapii kode program (soal no 3.2) */
echo "<br> Hasil Sama: {$hasilSama} <br>";
echo "Hasil Tidak Sama: {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama} <br>";

/*melenkapi kode program (soal no 3.3) */
echo "<br> Hasil AND: " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR: " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A: " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B: " . ($hasilNotB ? 'true' : 'false') . "<br>";

/*melengkai kode penambahan,pengurangan,perkalian,pembagian,modulus pada langkah 11 */
$a += $b;
echo "<br> Setelah penambahan, nilai a: $a <br>";
$a -= $b;
echo "Setelah pengurangan, nilai a: $a <br>";
$a *= $b;
echo "Setelah perkalian, nilai a: $a <br>";
$a /= $b;
echo "Setelah pembagian, nilai a: $a <br>";
$a %= $b;
echo "Setelah modulus, nilai a: $a <br>";

/*melengkapi kode operator pada langkah 14 */
echo "<br> Nilai a: $a <br>";
echo "Nilai b: $b <br>";

echo "Hasil Identik: ";
echo $hasilIdentik ? "True" : "False";
echo "<br>";

echo "Hasil Tidak Identik: ";
echo $hasilTidakIdentik ? "True" : "False";
echo "<br>";

?>


