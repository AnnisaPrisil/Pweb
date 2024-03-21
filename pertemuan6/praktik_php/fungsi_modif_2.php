<?php
//membuat sebuah fungsi nama dan salam
function perkenalan($nama, $salam) {
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yg sudah dibuat dengan mengsiskan nilai dari fungsi tersebut
perkenalan("Prisil","hallo");

echo "<hr>";

$saya = "Prisil";
$ucapanSalam = "Selamat pagi";

//melakukan pemanggilan fungsi kembali
perkenalan($saya,$ucapanSalam);

?>