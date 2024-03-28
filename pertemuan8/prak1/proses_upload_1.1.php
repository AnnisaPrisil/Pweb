<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "upload/"; //*tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

    // membuat sebuah fungsi if else ketika file diupload sudah berhasil atau belum
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "File berhasil diunggah.";
    } else {
        echo "Gagal mengunggah file.";
    }
}
?>