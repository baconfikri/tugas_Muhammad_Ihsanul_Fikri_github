<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "tugasfikri";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi jika diperlukan untuk debugging
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>