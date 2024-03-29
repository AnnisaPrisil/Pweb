<?php
// Memulai sesi (session)
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        // Menampilkan pesan tentang warna favorit dan hewan favorit dari variabel sesi
        echo "Favorite color is " . $_SESSION["favcolor"] .".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] .".";
        ?>
    </body>
</html>
