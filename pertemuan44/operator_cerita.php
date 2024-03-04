<?php

/* sebuah restoran yang memiliki 45 kursi dan 28 diantaranya sudah tetisi*/
$totalKursi = 45;
$kursiTerisi = 28;

/*menambahkan kode operator hitungan pengurangan kursi kosong,total kursi,kursi terisi */
$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

/* melengkapi kode program operator perhitungan diatas dengan melengkapi kode yang dibuat*/
echo "Jumlah total kursi: $totalKursi <br>";
echo "Jumlah kursi yang terisi: $kursiTerisi <br>";
echo "Jumlah kursi yang kosong: $kursiKosong <br>";
echo "Persentase kursi yang masih kosong: " . number_format($persentaseKursiKosong, 2) . "%";

?>