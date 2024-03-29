<?php
// Memeriksa apakah variabel beliNovel dan beliBuku telah diatur pada metode POST
if (isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])) {
    // Mengatur dua cookie dengan nama "beliNovel" dan "beliBuku" sesuai dengan nilai yang diterima dari formulir.
    setcookie("beliNovel", $_POST["beliNovel"]);
    setcookie("beliBuku", $_POST["beliBuku"]);
    // Mengarahkan pengguna ke halaman "keranjangBelanja.php".
    header("location: keranjangBelanja.php");
}
?>
