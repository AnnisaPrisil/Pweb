<?php
$umur = 20; //mengatur nilai umur sesuai kebutuhan

//menampilkan sebuah variabel isset umur yang telah terdefinisi
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}
// Membuat sebuah data nama dan usia
$data = array("nama" => "Jane", "usia" => 25);

// Menampilkan variabel nama dan usia yang telah terdefinisi
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>
