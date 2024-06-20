<?php
include 'koneksi.php';

$id_admin = $_POST['id_admin'];
$nama = $_POST['nama'];
$no_telefon = $_POST['no_telefon'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$email = $_POST['email'];
$password = $_POST['password'];


$stmt = $koneksi->prepare("INSERT INTO admin (id_admin, nama, no_telefon, jk, tgl_lahir, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $id_admin, $nama, $no_telefon, $jk, $tgl_lahir, $email, $password);

if ($stmt->execute()) {
    header("location: admin.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$koneksi->close();
?>
