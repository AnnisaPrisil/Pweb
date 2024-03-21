<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h3> Time</h3>
        <?php
        //membuat baris parameter waktu yang akan berubah sesuai dengan jam pada wilayah yang dilakukan
        date_default_timezone_set("asia/jakarta");
        echo date("h:i:sa");
        ?>
    </body>
</html>