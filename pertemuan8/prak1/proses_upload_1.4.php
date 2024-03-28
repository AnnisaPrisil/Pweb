<?php
if (isset($_POST["submit"])) {
    //menambahkan tujuan direktori yang akan disimpan
    $targetDirectory = "uploads/";
    //menggabungkan tujuan direktori tadi yang telah tersimpan
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $uploadSuccess = true;
    //mengatur tipe file tujuan direktori dan tujuan file yang akan digabungkan 
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    //menambahkan baris fungsi berdasarkan parameter yang dibuat
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }
    if (file_exists($targetFile)) {
        echo "Maaf, file sudah ada.";
        $uploadSuccess = false;
    }
    $allowedExtensions = array("txt", "pdf", "doc", "docx"); 
    if (!in_array($fileType, $allowedExtensions)) {
        echo "Maaf, hanya file TXT, PDF, DOC, dan DOCX yang diizinkan.";
        $uploadSuccess = false;
    }
    $maxFileSize = 5 * 1024 * 1024; 
    if ($_FILES["fileToUpload"]["size"] > $maxFileSize) {
        echo "Maaf, ukuran file terlalu besar. Maksimal 5MB.";
        $uploadSuccess = false;
    }
    if ($uploadSuccess) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>