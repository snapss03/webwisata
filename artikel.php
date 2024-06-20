<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #f5f5f5;
        }

        img {
            max-width: 100px;
            height: auto;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        form div {
            margin-bottom: 10px;
        }

        form label {
            display: block;
            font-weight: bold;
        }

        form input[type="text"],
        form select,
        form textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form button[type="submit"] {
            padding: 10px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

</head>

<?php
// Lakukan koneksi ke database (pastikan Anda telah memiliki koneksi yang sesuai)
include("koneksi.php");

// Fungsi untuk mengupload file gambar
function uploadFile($file)
{
    $targetDirectory = "uploads/"; // Direktori tempat menyimpan file gambar
    $targetFile = $targetDirectory . basename($file["name"]); // Path lengkap file gambar yang akan diupload
    $uploadOk = 1; // Status upload (0 jika ada error, 1 jika berhasil)

    // Periksa apakah file gambar yang diupload valid
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $check = getimagesize($file["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Periksa apakah file gambar sudah ada di server
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Batasi ukuran file gambar (misalnya maksimal 1MB)
    if ($file["size"] > 1 * 1024 * 1024) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Hanya izinkan beberapa format file gambar (misalnya jpg, jpeg, png)
    $allowedFormats = ["jpg", "jpeg", "png"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    // Jika tidak ada error dalam validasi, upload file gambar
    if ($uploadOk == 1) {
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return $targetFile; // Kembalikan path file gambar yang diupload
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    return null; // Jika ada error dalam upload file, kembalikan nilai null
}

// Cek apakah form telah disubmit
if (isset($_POST['tambahArtikel'])) {
    // Ambil data dari form
    $judul = $_POST["judul"];
    $kategori = $_POST["kategori"];
    $tanggal = $_POST["tanggal"];
    $isi = $_POST["isi"];
    $gambar = $_FILES["gambar"];

    // Upload file gambar (jika ada)
    $gambarPath = null;
    if ($gambar["name"] && $gambar["tmp_name"]) {
        $gambarPath = uploadFile($gambar);
    }

    // Masukkan data ke dalam tabel database
    $sql = "INSERT INTO artikel (judul, kategori, tanggal, isi, gambar) VALUES ('$judul', '$kategori', '$tanggal', '$isi', '$gambarPath')";
    if (mysqli_query($conn, $sql)) {
        echo "Data has been successfully inserted.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} elseif (isset($_POST['editButton'])) {
    $id_artikel = $_POST['id_artikel'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];

    $sql = "UPDATE artikel SET judul='$judul',kategori='$kategori',tanggal='$tanggal',isi='$isi' WHERE id='$id_artikel'";
    // echo $sql;
    $query = $conn->query($sql);
} elseif (isset($_POST['deleteButton'])) {
    $id_artikel = $_POST['id_artikel'];

    $sql = "DELETE FROM artikel WHERE id='$id_artikel'";
    // echo $sql;
    $query = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>

</head>

<body>
    <h2>Input Data</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="judul">Judul:</label>
            <input type="text" name="judul" id="judul" required>
        </div>
        <div>
            <label for="kategori">Kategori:</label>
            <select name="kategori" id="kategori" required>
                <option value="Pantai">Pantai</option>
                <option value="Gunung">Gunung</option>
                <option value="Pulau">Pulau</option>
            </select>
        </div>
        <div>
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" required>
        </div>
        <div>
            <label for="isi">Isi:</label>
            <textarea name="isi" id="isi" rows="4" required></textarea>
        </div>
        <div>
            <label for="gambar">Upload Gambar:</label>
            <input type="file" name="gambar" id="gambar">
        </div>
        <div>
            <button type="submit" name="tambahArtikel">Submit</button>
        </div>
    </form>

    <h2>Data</h2>
    <?php
    // Ambil data dari tabel database
    $sql = "SELECT * FROM artikel";
    $hasil = mysqli_query($conn, $sql);

    if (mysqli_num_rows($hasil) > 0) {
        // Tampilkan data dalam bentuk tabel
        echo "<table>";
        echo "<tr>";
        echo "<th>Judul</th>";
        echo "<th>Kategori</th>";
        echo "<th>Tanggal</th>";
        echo "<th>Isi</th>";
        echo "<th>Gambar</th>";
        echo "<th>Edit</th>";
        echo "<th>Delete</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($hasil)) { ?>
            <tr>
                <td><?= $row["judul"] ?></td>
                <td><?= $row["kategori"] ?></td>
                <td><?= $row["tanggal"] ?></td>
                <td><?= substr($row["isi"], 0, 50) . (strlen($row["isi"]) > 50 ? "..." : "") ?></td>
                <td><img src=<?= $row["gambar"] ?> width='100'></td>
                <form action="" method="post">
                    <input type="hidden" name="id_artikel" value="<?php echo $row['id']; ?>">
                    <td><button type="button" data-bs-toggle="modal" data-bs-target="#editModal" onclick="editData('<?= $row['id']; ?>')">Edit</button></td>
                    <td><button type="submit" name="deleteButton">Delete</button></td>
                </form>
            </tr>

    <?php
        }

        echo "</table>";
    } else {
        echo "No data available.";
    }

    // Tutup koneksi ke database
    mysqli_close($conn);
    ?>

    <div class="modal" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Artikel</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="closeModal()"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="mb-3 mt-3">
                            <label class="form-label">Judul:</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="kategori">Kategori:</label>
                            <select name="kategori" id="kategori" required>
                                <option value="Pantai">Pantai</option>
                                <option value="Gunung">Gunung</option>
                                <option value="Pulau">Pulau</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="tanggal">Tanggal:</label>
                            <input type="date" name="tanggal" id="tanggal" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="isi">Isi:</label>
                            <textarea name="isi" id="isi" rows="4" required></textarea>
                        </div>
                        <input type="hidden" id="editID" name="id_artikel">
                        <button type="submit" name="editButton" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function editData(id_admin, nama, no_telefon, jk, tgl_lahir, email, Password) {
            var modal = document.getElementById("editModal");
            // Tampilkan modal
            modal.style.display = "block";

            // Mengisi form edit dengan data yang sesuai
            var editID = document.getElementById("editID");
            editID.value = id_admin;

            // Lakukan operasi lain yang diperlukan, seperti mengambil data dari server
            // dan mengisi form edit di dalam modal
        }

        function closeModal() {
            var modal = document.getElementById("editModal");
            // Tutup modal
            modal.style.display = "none";
        }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>