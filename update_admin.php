<?php
include 'koneksi.php';

if (isset($_POST['id_admin']) && isset($_POST['nama']) && isset($_POST['no_telefon']) && isset($_POST['jk']) && isset($_POST['tgl_lahir']) && isset($_POST['email']) && isset($_POST['password'])) {
    $id_admin = $_POST['id_admin'];
    $nama = $_POST['nama'];
    $no_telefon = $_POST['no_telefon'];
    $jk = $_POST['jk'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE admin SET nama = '$nama', no_telfon = '$no_telefon', jk = '$jk', tgl_lahir = '$tgl_lahir', email = '$email', password = '$password' WHERE id_admin = '$id_admin'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Gagal mengupdate data admin";
    }
} else {
    header("Location: admin.php");
    exit();
}
