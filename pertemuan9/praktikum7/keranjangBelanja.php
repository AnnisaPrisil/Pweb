<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2> Keranjang Belanja </h2>

<?php
// Mengambil nilai dari cookie "beliNovel" dan "beliBuku"
$beliNovel = $_COOKIE['beliNovel'];
$beliBuku = $_COOKIE['beliBuku'];

// Menampilkan jumlah novel dan buku
echo "Jumlah Novel: " . $beliNovel . "<br>";
echo "Jumlah Buku: " . $beliBuku;
?>
</body>
</html>
