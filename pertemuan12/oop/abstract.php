<?php

// Mendefinisikan kelas abstrak 'Shape'
abstract class Shape {
    // Deklarasi metode abstrak 'calculateArea'
    abstract public function calculateArea();
}

// Kelas 'Circle' yang mewarisi kelas abstrak 'Shape'
class Circle extends Shape {
    private $radius; // Properti pribadi untuk menyimpan radius lingkaran

    // Konstruktor untuk kelas 'Circle' yang mengatur nilai radius
    public function __construct($radius) {
        $this->radius = $radius; // Mengatur nilai 'radius'
    }

    // Implementasi metode 'calculateArea' dari kelas abstrak 'Shape'
    public function calculateArea() {
        return pi() * pow($this->radius, 2); // Mengembalikan luas lingkaran
    }
}

// Kelas 'Rectangle' yang mewarisi kelas abstrak 'Shape'
class Rectangle extends Shape {
    private $width;  // Properti pribadi untuk menyimpan lebar persegi panjang
    private $height; // Properti pribadi untuk menyimpan tinggi persegi panjang

    // Konstruktor untuk kelas 'Rectangle' yang mengatur nilai lebar dan tinggi
    public function __construct($width, $height) {
        $this->width = $width; // Mengatur nilai 'width'
        $this->height = $height; // Mengatur nilai 'height'
    }

    // Implementasi metode 'calculateArea' dari kelas abstrak 'Shape'
    public function calculateArea() {
        return $this->width * $this->height; // Mengembalikan luas persegi panjang
    }
}

// Membuat objek 'circle' dari kelas 'Circle' dengan radius 5
$circle = new Circle(5);
// Membuat objek 'rectangle' dari kelas 'Rectangle' dengan lebar 4 dan tinggi 6
$rectangle = new Rectangle(4, 6);

// Menampilkan luas lingkaran menggunakan metode 'calculateArea'
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
// Menampilkan luas persegi panjang menggunakan metode 'calculateArea'
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";

?>
