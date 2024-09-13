<?php
// Mengaktifkan error reporting langsung dari skrip PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Sertakan file konfigurasi database
include 'config.php';

// Cek apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form berhasil diterima";  // Debugging: pastikan form mencapai bagian ini

    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Escape input untuk mencegah SQL Injection
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $message = $conn->real_escape_string($message);

    // Buat query untuk menyimpan data
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    // Jalankan query dan cek apakah berhasil
    if ($conn->query($sql) === TRUE) {
        echo "Pesan Anda berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>
