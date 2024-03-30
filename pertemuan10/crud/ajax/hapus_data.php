<?php
// Mulai session
session_start();

// Sertakan file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Sertakan file csrf.php untuk perlindungan CSRF
include 'csrf.php';

// Ambil ID yang dikirimkan melalui metode POST
$id = $_POST['id'];

// Query untuk menghapus data berdasarkan ID
$query = "DELETE FROM anggota WHERE id=?";

// Persiapkan statement SQL
$sql = $db1->prepare($query);

// Bind parameter ID ke statement SQL
$sql->bind_param("i", $id);

// Eksekusi statement SQL
$sql->execute();

// Kirimkan respon JSON jika penghapusan berhasil
echo json_encode(['success' => 'Sukses']);

// Tutup koneksi ke database
$db1->close();
?>
