<?php
// Menetapkan header untuk respons sebagai JSON
header('Content-Type: application/json');

// Mengirimkan token keamanan CSRF
if (empty($_SESSION['csrf_token'])) {
    // Membuat token CSRF jika belum ada
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Mendapatkan header HTTP dari permintaan
$headers = apache_request_headers();

// Memeriksa keberadaan token CSRF dalam header
if (isset($headers['Csrf-Token'])) {
    // Memeriksa kesesuaian token CSRF dalam header dengan token yang disimpan di sesi
    if ($headers['Csrf-Token'] !== $_SESSION['csrf_token']) {
        // Menghentikan proses dan memberikan respons JSON jika token CSRF tidak cocok
        exit(json_encode(['error' => 'Wrong CSRF token.']));
    }
} else {
    // Menghentikan proses dan memberikan respons JSON jika tidak ada token CSRF dalam header
    exit(json_encode(['error' => 'No CSRF token.']));
}
?>
