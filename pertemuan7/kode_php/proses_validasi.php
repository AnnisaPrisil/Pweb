<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();
    
    // Validasi Nama dari kode php form_validasi
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    
    // Validasi Email dari kode form_validasi
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Perbaikan penulisan
        $errors[] = "Format email tidak valid.";
    }
    
    // Jika terdapat kode validasi yang dibuat 
    if (!empty($errors)) { // Perbaikan penulisan
        foreach ($errors as $error) {
            echo $error. "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim: Nama $nama, Email = $email";
    }
}
?>
