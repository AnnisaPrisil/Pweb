<?php
$x = 75;
$y = 25;

//membuat sebuah fungsi dengan menambahkan variabel global untuk karakter x,y,z
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>