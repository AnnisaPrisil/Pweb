<?php

// Mendefinisikan kelas 'Car' dengan properti 'brand' yang bersifat pribadi
class Car {
    private $brand; // Properti untuk menyimpan merek mobil

    // Konstruktor kelas 'Car' yang menginisialisasi 'brand' saat objek dibuat
    public function __construct($brand) {
        echo "A new car is created.<br>"; // Menampilkan pesan saat objek mobil baru dibuat
        $this->brand = $brand; // Mengatur nilai 'brand' dengan nilai yang diberikan
    }

    // Metode 'getBrand' untuk mendapatkan merek mobil
    public function getBrand() {
        return $this->brand; // Mengembalikan nilai dari properti 'brand'
    }

    // Destruktor kelas 'Car' yang dipanggil saat objek dihancurkan
    public function __destruct() {
        echo "The car is destroyed.<br>"; // Menampilkan pesan saat objek mobil dihancurkan
    }
}

// Membuat objek 'car' dari kelas 'Car' dengan merek 'Toyota'
$car = new Car("Toyota");

// Menampilkan merek mobil menggunakan metode 'getBrand'
echo "Brand: " . $car->getBrand() . "<br>";

?>
