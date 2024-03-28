<?php
// setelah kode dibuat akan berada pada file sesuai dengan direktori  
$targetDirectory = "documents/";

// membuat penyimpanan direktori 
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    // melakukan proses looping pada semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        
        // memindahkan file yang diunggah ke direktori penyimpanan ketika kode tersebut berhasil ditampilkan dah file berhasil diunggah 
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
