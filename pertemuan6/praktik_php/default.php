<?php
//membuat sebuah fungsi
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yg sudah dibuat
perkenalan("Prisil","hallo");

echo "<hr>";

$saya = "Prisil";
$ucapanSalam = "Selamat pagi";

//melakukan pemanggilan tanpa mengsisi parameter salam
perkenalan($saya,$ucapanSalam);

?>