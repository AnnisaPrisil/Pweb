<?php

// Mendefinisikan kelas 'Animal' dengan properti 'name' yang dilindungi
class Animal {
    protected $name; // Properti 'name' hanya dapat diakses oleh kelas ini dan kelas turunannya

    // Konstruktor untuk kelas 'Animal' yang mengatur nama hewan saat objek dibuat
    public function __construct($name)
    {
        $this->name = $name; // Mengatur properti 'name' dengan nilai yang diberikan
    }

    // Metode 'eat' untuk menampilkan hewan sedang makan
    public function eat() {
        echo $this->name . " is eating.<br>"; // Menampilkan nama hewan dan teks 'is eating'
    }

    // Metode 'sleep' untuk menampilkan hewan sedang tidur
    public function sleep() {
        echo $this->name . " is sleeping.<br>"; // Menampilkan nama hewan dan teks 'is sleeping'
    }
}

// Mendefinisikan kelas 'Cat' yang merupakan turunan dari kelas 'Animal'
class Cat extends Animal {
    // Metode 'meow' untuk menampilkan suara kucing
    public function meow() {
        echo $this->name . " says meow!<br>"; // Menampilkan nama kucing dan teks 'says meow!'
    }
}

// Mendefinisikan kelas 'Dog' yang merupakan turunan dari kelas 'Animal'
class Dog extends Animal {
    // Metode 'bark' untuk menampilkan suara anjing
    public function bark() {
        echo $this->name . " says woof!<br>"; // Menampilkan nama anjing dan teks 'says woof!'
    }
}

// Membuat objek 'cat' dari kelas 'Cat' dengan nama 'Whiskers'
$cat = new Cat("Whiskers");
// Membuat objek 'dog' dari kelas 'Dog' dengan nama 'Buddy'
$dog = new Dog("Buddy");

// Memanggil metode 'eat' pada objek 'cat'
$cat->eat();
// Memanggil metode 'sleep' pada objek 'dog'
$dog->sleep();

// Memanggil metode 'meow' pada objek 'cat'
$cat->meow();
// Memanggil metode 'bark' pada objek 'dog'
$dog->bark();

?>
