<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input:</label><br>
        <input type="text" id="input" name="input"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // inputan telah diterima dari form yang dibuat 
        if(isset($_POST['input'])) {
            $input = $_POST['input'];
            // melakukan sanitasi kode program input dengan htmlspecialchars untuk mencegah eror
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            //simpan pada data yang menerima dan menyimpan kode tersebut 
            echo "Input yang diterima: " . $input;
        } 
        else {
            echo "Input tidak ditemukan";
        }

        //memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //melanjutkan dengan pengolahan email yang aman 
        } 
        else {
            //menangani inputan yang tidak valid
        }
    }
    ?>

</body>
</html>
