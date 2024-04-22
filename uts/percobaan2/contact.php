<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utscantik";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $selectedDate = $_POST['selected_date'];
    $message = $_POST['message'];

    if (empty($username) || empty($email) || empty($number) || empty($selectedDate) || empty($message)) {
        echo "Semua field harus diisi.";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format email tidak valid.";
        exit();
    }

    $formattedDate = date('Y-m-d', strtotime($selectedDate));

    $username = mysqli_real_escape_string($conn, strip_tags($username));
    $email = mysqli_real_escape_string($conn, strip_tags($email));
    $number = mysqli_real_escape_string($conn, strip_tags($number));
    $message = mysqli_real_escape_string($conn, strip_tags($message));

    $sql = "INSERT INTO contact (username, email, number, date_value, message) VALUES ('$username', '$email', '$number', '$formattedDate', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
        header("Location: index.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>