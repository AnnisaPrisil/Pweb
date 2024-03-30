<?php
session_start(); // Memulai sesi PHP

include 'koneksi.php'; // Mengimpor file koneksi.php
include 'csrf.php'; // Mengimpor file csrf.php

$id = $_POST['id']; // Mengambil nilai ID dari form input
$query = "SELECT * FROM anggota WHERE id=? ORDER BY id DESC"; // Query untuk mengambil data anggota berdasarkan ID
$sql = $db1->prepare($query); // Mempersiapkan query
$sql->bind_param('i', $id); // Mengikat parameter ID
$sql->execute(); // Menjalankan query
$res1 = $sql->get_result(); // Mengambil hasil query

$h = array(); // Inisialisasi array untuk menyimpan data
while ($row = $res1->fetch_assoc()) {
    $h['id'] = $row["id"]; // Menyimpan nilai ID
    $h['nama'] = $row["nama"]; // Menyimpan nama
    $h['jenis_kelamin'] = $row["jenis_kelamin"]; // Menyimpan jenis kelamin
    $h['alamat'] = $row["alamat"]; // Menyimpan alamat
    $h['no_telp'] = $row["no_telp"]; // Menyimpan nomor telepon
}
echo json_encode($h); // Mengubah array menjadi format JSON dan mengeluarkan respons
$db1->close(); // Menutup koneksi database
?>
