<?php
session_start(); // Memulai sesi PHP

include 'koneksi.php'; // Mengimpor file koneksi.php
include 'csrf.php'; // Mengimpor file csrf.php

$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'], ENT_QUOTES))); // Mengambil nilai ID dari form input
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES))); // Mengambil nilai nama dari form input
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES))); // Mengambil nilai jenis kelamin dari form input
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES))); // Mengambil nilai alamat dari form input
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES))); // Mengambil nilai nomor telepon dari form input

if ($id == "") {
    // Jika ID kosong, maka data akan dimasukkan sebagai data baru
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $sql = $db1->prepare($query); // Mempersiapkan query
    $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp); // Mengikat parameter
    $sql->execute(); // Menjalankan query
} else {
    // Jika ID tidak kosong, maka data akan diperbarui
    $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id=?";
    $sql = $db1->prepare($query); // Mempersiapkan query
    $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id); // Mengikat parameter
    $sql->execute(); // Menjalankan query
}

echo json_encode(['success' => 'Sukses']); // Mengeluarkan respons dalam format JSON
$db1->close(); // Menutup koneksi database
?>
