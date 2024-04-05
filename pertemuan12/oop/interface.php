<?php

// Mendefinisikan interface 'Shape' dengan metode 'calculateArea'
interface Shape {
    public function calculateArea();
}

// Mendefinisikan interface 'Color' dengan metode 'getColor'
interface Color {
    public function getColor();
}

// Kelas 'Circle' yang mengimplementasikan kedua interface 'Shape' dan 'Color'
class Circle implements Shape, Color {
    private $radius; // Properti pribadi untuk menyimpan radius lingkaran
    private $color;  // Properti pribadi untuk menyimpan warna lingkaran

    // Konstruktor untuk kelas 'Circle' yang mengatur nilai radius dan warna
    public function __construct($radius, $color) {
        $this->radius = $radius; // Mengatur nilai 'radius'
        $this->color = $color;  // Mengatur nilai 'color'
    }

    // Implementasi metode 'calculateArea' dari interface 'Shape'
    public function calculateArea() {
        return pi() * pow($this->radius, 2); // Mengembalikan luas lingkaran
    }

    // Implementasi metode 'getColor' dari interface 'Color'
    public function getColor() {
        return $this->color; // Mengembalikan warna lingkaran
    }
}

// Membuat objek 'circle' dari kelas 'Circle' dengan radius 5 dan warna "Blue"
$circle = new Circle(5, "Blue");

// Menampilkan luas lingkaran menggunakan metode 'calculateArea'
echo "Area of Circle: " . $circle->calculateArea() . "<br>";

// Menampilkan warna lingkaran menggunakan metode 'getColor'
echo "Color of Circle: " . $circle->getColor() . "<br>";

?>
