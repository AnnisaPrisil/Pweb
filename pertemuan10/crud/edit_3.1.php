<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Mengimpor koneksi ke database
include('koneksi.php');

// Mengambil ID dari parameter GET
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Query untuk mengambil data anggota berdasarkan ID
$query = "SELECT * FROM anggota WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

// Menutup koneksi database
mysqli_close($koneksi);
?>
<div class="container">
    <h2>Edit Data Anggota</h2>
    <form action="proses.php?aksi=ubah" method="post">
        <!-- Menambahkan input hidden untuk menyimpan ID anggota -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nama">Nama:</label>
        <!-- Input untuk nama anggota -->
        <input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <div class="radio-group">
            <!-- Radio button untuk jenis kelamin -->
            <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" <?php if (!empty($row['jenis_kelamin']) && $row['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
            <label for="laki">Laki-laki</label>
            <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" <?php if (!empty($row['jenis_kelamin']) && $row['jenis_kelamin'] === 'P') echo 'checked'; ?> required>
            <label for="perempuan">Perempuan</label>
        </div>
        <label for="alamat">Alamat:</label>
        <!-- Input untuk alamat anggota -->
        <input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>
        <label for="no_telp">No. Telp:</label>
        <!-- Input untuk nomor telepon anggota -->
        <input type="text" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" required>
        <!-- Tombol untuk menyimpan perubahan -->
        <button type="submit">Simpan Perubahan</button>
        <!-- Link untuk kembali ke halaman utama -->
        <a href="index.php" class="btn-kembali">Kembali</a>
    </form>
</div>
</body>
</html>
