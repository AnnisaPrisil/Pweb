<?php
// Membuat sebuah baris variabel server yang menyediakan berbagai informasi tentang request
echo $_SERVER ['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Not available'; //command baris referer tidak tersedia
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>