<?php
// setelah kode dibuat file akan berada pada direktori sesuai tujuan 
$targetDirectory = "documents/";

// membuat penyimpanan direktori yang dituju ketika file tersebut berhasil diunggah maka nilai tersebut benar
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    // melakukan looping pada file yang diunggah 
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        
        // memindahkan file kedalam direktori yang otomatis dibuat ketika file terebut berhasil diunggah
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
