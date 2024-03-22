<?php
// Pola pertama: mencocokkan huruf "0" 
$pattern1 = '/go?d/'; // Cocokkan "god" atau "gd"
$text1 = 'god is good.';

//menambhakan sebuah baris yang berfungsi untuk menampilkan pattren dan teks yang dibuat 
if (preg_match($pattern1, $text1, $matches1)) {
    echo "Cocokkan 1: " . $matches1[0] . "<br>";
} else {
    echo "Tidak ada yang cocok untuk Cocokkan 1!" . "<br>";
}

// Pola kedua: mencocokkan "good" atau "god" atau "gud"
$pattern2 = '/g(o|oo)?d/'; // mencocokkan kata god pada hasil output
$text2 = 'god is good and gud.';
if (preg_match($pattern2, $text2, $matches2)) {
    echo "Cocokkan 2: " . $matches2[0] . "<br>";
} else {
    echo "Tidak ada yang cocok untuk Cocokkan 2!" . "<br>";
}
?>
