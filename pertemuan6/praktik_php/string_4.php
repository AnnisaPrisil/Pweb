<?php

//membuat sebuah pesan baris kalimat 
$pesan = "saya arek malang";
//mengubah variabel menjadi array dengan menggunakan variabel explode
$pesanPerkata = explode(" ", $pesan);
//mengubah setiap kata dalam array
$pesanPerkata = array_map(fn($pesan) => str_split($pesan), $pesanPerkata);
//menggabungkan kembali array menjadi tipe data string
$pesan = implode(" ", array_map(fn($pesan) => implode("", $pesan), $pesanPerkata));

echo $pesan . "<br>";
?>
