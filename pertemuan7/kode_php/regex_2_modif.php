<?php
// Pola pertama: mencocokkan "o" satu atau dua kali
$pattern1 = '/go{1,2}d/'; // mencocokkan dan membuat baris 1 "god"
$text1 = 'god is good.';
if (preg_match($pattern1, $text1, $matches1)) {
    echo "Cocokkan 1: " . $matches1[0] . "<br>";
} else {
    echo "Tidak ada yang cocok untuk Cocokkan 1!" . "<br>";
}

// Pola kedua: mencocokkan "oo" dua hingga empat kali
$pattern2 = '/go{2,4}d/'; // mencocokkan dan membuat baris 2 "good"
$text2 = 'god is good.';
if (preg_match($pattern2, $text2, $matches2)) {
    echo "Cocokkan 2: " . $matches2[0] . "<br>";
} else {
    echo "Tidak ada yang cocok untuk Cocokkan 2!" . "<br>";
}
?>
