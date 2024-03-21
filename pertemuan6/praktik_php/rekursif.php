<?php

//membuat fungsi yang dipanggil secara langsung
function tampilkanHaloDunia() {
    //mencetak pesan "Hallo dunia" diikuti dengan paragraf </br>
    echo "Hallo dunia! <br>";

    //menampilkan pesan berulang kali
    tampilkanHaloDunia();
}
tampilkanHaloDunia();
?>