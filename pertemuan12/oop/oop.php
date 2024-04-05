<?php
// Mendefinisikan sebuah kelas dengan nama Car
class Car {
    public $brand; // Properti publik untuk menyimpan merek mobil

    // Fungsi untuk memulai mesin mobil
    public function startEngine() {
        echo "Engine started"; // Menampilkan teks "Engine started"
    }
}

// Membuat objek baru dari kelas Car
$car1 = new Car();
$car1->brand = "Toyota"; // Mengatur merek mobil pertama menjadi Toyota

// Membuat objek lain dari kelas Car
$car2 = new Car();
$car2->brand = "Honda"; // Mengatur merek mobil kedua menjadi Honda

$car1->startEngine(); // Memanggil fungsi startEngine pada objek car1
echo $car2->brand; // Menampilkan merek dari objek car2

?>
