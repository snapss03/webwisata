<?php
// Konfigurasi koneksi ke database
$host = "localhost"; // Host database
$username = "root"; // Username database
$password = ""; // Password database
$database = "wisata"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil atau tidak
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    // echo "Koneksi berhasil!";
}

// Tutup koneksi
// mysqli_close($conn);
