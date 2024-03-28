<?php

//membuat sebuah file untuk memastikan file tersebut dikirim melalui form
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    //file yang diunggah
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower(end(explode('.', $_FILES['file']['name']))); // Perbaikan: menambahkan end() untuk mendapatkan ekstensi file
    $extensions = array("pdf", "doc", "docx", "txt");

    //memeriksa ekstensi yang dibuat berada dalam daftar file yang diizinkan 
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }
    if ($file_size > 2097152) {
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }
    if (empty($errors)) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode("", $errors);
    }
}
?>
