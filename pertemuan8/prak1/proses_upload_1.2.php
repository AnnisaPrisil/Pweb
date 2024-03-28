<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; // membuat sebuah direktori tujuan file 
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileName = $_FILES["fileToUpload"]["name"]; // Simpan nama file

    // menambahkan direktori dengan command mkdir yang berfungsi agar file terpisah
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    //menambahkan tipe file dan izin akses pada direktori yang dituju
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 5 * 1024 * 1024; // 5 MB

    // memeriksa file yang dibuat tersebut memiliki ekstensi yang diizinkan
    if (!in_array($fileType, $allowedExtensions)) {
        echo "File tidak valid atau memiliki ekstensi yang tidak diizinkan.";
    } 
    // Periksa ukuran file
    else if ($_FILES["fileToUpload"]["size"] > $maxFileSize) {
        echo "Ukuran file \"$fileName\" melebihi batas maksimum yang diizinkan.";
    } 
    // memindahkan file
    else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File \"$fileName\" berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file. Periksa izin direktori.";
        }
    }
}
?>
