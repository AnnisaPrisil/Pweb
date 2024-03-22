<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil
$text = 'This is a Sample Text.';

// Mencari huruf kecil sesuai pola pattern pada fungsi if else
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!" . "<br>";
} else {
    echo "Tidak ada huruf kecil!" . "<br>";
}

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit 
$text = 'There are 123 apples.';

// Menambahkan baris angka yang sesuai pola pattern pada fungsi if else
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!" . "<br>";
}

//membuat sebuah baris kode variabel kalimat berupa teks
$pattern = '/apple/';
$replacement = 'banana';
$text = "I like apple pie.";
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text . "<br>";

//membuat sebuah baris kode kalimat yang terdapat kecocokkan
$pattern = '/go*d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good.';

//menambhakan baris kalimat variabel tentang mencocokkan kata good,god,gooood
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!" . "<br>";
}
?>
