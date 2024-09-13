<?php
// Konfigurasi koneksi ke database
$host = "localhost";  // Laragon biasanya menggunakan localhost
$user = "root";       // Default Laragon MySQL user adalah root
$password = "";       // Default Laragon tidak menggunakan password untuk root
$database = "portfolio_website";  // Nama database yang sudah Anda buat

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil";
}
?>
