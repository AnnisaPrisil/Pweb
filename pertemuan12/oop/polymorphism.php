<?php

// Mendefinisikan interface 'Shape' dengan satu metode 'calculateArea'
interface Shape {
    public function calculateArea();
}

// Kelas 'Circle' yang mengimplementasikan interface 'Shape'
class Circle implements Shape {
    private $radius; // Properti pribadi untuk menyimpan radius lingkaran

    // Konstruktor untuk kelas 'Circle' yang mengatur nilai radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementasi metode 'calculateArea' untuk menghitung luas lingkaran
    public function calculateArea() {
        return pi() * pow($this->radius, 2); // Menggunakan fungsi pi() dan pow() untuk perhitungan
    }
}

// Kelas 'Rectangle' yang mengimplementasikan interface 'Shape'
class Rectangle implements Shape {
    private $width;  // Properti pribadi untuk menyimpan lebar persegi panjang
    private $height; // Properti pribadi untuk menyimpan tinggi persegi panjang

    // Konstruktor untuk kelas 'Rectangle' yang mengatur nilai lebar dan tinggi
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementasi metode 'calculateArea' untuk menghitung luas persegi panjang
    public function calculateArea() {
        return $this->width * $this->height; // Perkalian lebar dan tinggi untuk luas
    }
}

// Fungsi 'printArea' untuk mencetak luas bentuk yang diberikan
function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea() . "<br>"; // Menampilkan luas dengan memanggil metode 'calculateArea'
}

// Membuat objek 'circle' dari kelas 'Circle' dengan radius 5
$circle = new Circle(5);
// Membuat objek 'rectangle' dari kelas 'Rectangle' dengan lebar 4 dan tinggi 6
$rectangle = new Rectangle(4, 6);

// Memanggil fungsi 'printArea' untuk objek 'circle' dan 'rectangle'
printArea($circle);
printArea($rectangle);

?>
