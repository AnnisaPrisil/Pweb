<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
    <style>
.error { color: red; } /* Styling untuk pesan kesalahan yang kemungkinan terjadi*/
</style>
</head>
<body>
<h2>Form Input PHP</h2>
<?php
// Inisialisasi variabel input form
$namaErr = ""; // Variabel ini tidak digunakan dalam kode yang dibuat 
$nama = "";
// Cek apakah form yang sudah dibuat sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Validasi nama dan pastikan nama tidak kosong
    if (empty($_POST["nama"])) {
        $namaErr = "Nama harus diisi!";
    } else {
        $nama = $_POST["nama"];
        echo "Data berhasil disimpan!";
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nama">Nama: </label> 
    <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
    <span class="error"><?php echo $namaErr; ?></span><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
