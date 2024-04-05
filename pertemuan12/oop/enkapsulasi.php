<?php

// Mendefinisikan kelas 'Car' dengan properti 'model' dan 'color' yang bersifat pribadi
class Car {
    private $model; // Properti untuk menyimpan model mobil
    private $color; // Properti untuk menyimpan warna mobil

    // Konstruktor kelas 'Car' yang menginisialisasi 'model' dan 'color'
    public function __construct($model, $color) {
        $this->model = $model; // Mengatur nilai 'model'
        $this->color = $color; // Mengatur nilai 'color'
    }

    // Metode 'getModel' untuk mendapatkan nilai dari properti 'model'
    public function getModel() {
        return $this->model; // Mengembalikan nilai 'model'
    }

    // Metode 'setColor' untuk mengatur ulang nilai dari properti 'color'
    public function setColor($color) {
        $this->color = $color; // Mengatur nilai 'color'
    }

    // Metode 'getColor' untuk mendapatkan nilai dari properti 'color'
    public function getColor() {
        return $this->color; // Mengembalikan nilai 'color'
    }
}

// Membuat objek 'car' dari kelas 'Car' dengan model 'Toyota' dan warna 'Blue'
$car = new Car("Toyota", "Blue");

// Menampilkan model mobil menggunakan metode 'getModel'
echo "Model: " . $car->getModel() . "<br>";

// Menampilkan warna mobil menggunakan metode 'getColor'
echo "Color: " . $car->getColor() . "<br>";

// Mengubah warna mobil menjadi 'Red' menggunakan metode 'setColor'
$car->setColor("Red");

// Menampilkan warna mobil yang telah diperbarui menggunakan metode 'getColor'
echo "Updated Color: " . $car->getColor() . "<br>";

?>
