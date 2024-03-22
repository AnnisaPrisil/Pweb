<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //mendeklarasikan sebuah method berupa nama,email,dan password//
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();
    
    //menampilkan form validasi nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    //menampilkan form validas email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } 
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid.";
        }
    }
    //menampilkan form validasi password
    if (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } 
    else {
        echo "Data berhasil dikirim: Nama $nama, Email $email, Password $password";
    }
}
?>