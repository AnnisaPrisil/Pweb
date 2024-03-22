<?php

//menambahkan variabel pernyataan tentang permintaan method post yang akan dipanggil dengan variabel nama dan email
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    //menampilkan informasi dari permintaan post yang dibuat dengan menampilkan pada pemanggilan kode html 
    echo "Nama:". $nama . "<br>";
    echo "Email:". $email; 
}
?>