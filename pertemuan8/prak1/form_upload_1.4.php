<!DOCTYPE html>
<html>
<head>
    <title>Formulir Unggah File</title>
</head>
<body>

<h2>Formulir Unggah File</h2>
<p>Silakan pilih file yang ingin Anda unggah. File harus berformat jpg, jpeg, png, atau gif dan tidak lebih besar dari 5MB.</p>

    <!-- form mengunggah file -->
<form action="proses_upload_1.4.php" method="post" enctype="multipart/form-data">
    <!-- melakukan input untuk memilih file -->
    <label for="fileToUpload">Pilih file:</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br><br>
    
    <!-- mengirimkan form -->
    <input type="submit" value="Unggah File" name="submit">
</form>

</body>
</html>