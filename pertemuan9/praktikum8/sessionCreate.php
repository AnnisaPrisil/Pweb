<?php
    // Memulai sesi (session)
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            // Mengatur dua variabel sesi: "favcolor" dengan nilai "green" dan "favanimal" dengan nilai "cat"
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            // Menampilkan pesan bahwa variabel sesi telah diatur
            echo "Session variables are set.";
        ?>
    </body>
</html>
