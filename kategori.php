<?php
require_once 'koneksi.php';
include('fungsi.php');
$sql = "SELECT * FROM artikel";
$all = $koneksi->query($sql);
$sql1 = "SELECT kategori FROM kategori";
$all1 = $koneksi->query($sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Wisata Punya Siapa</title>
    <!-- Favicon
    <link rel="icon" type="image/x-icon" href="admin/assets/img/favicon(3).ico" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./style.css" rel="stylesheet" />
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Wisata Punya Siapa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="kategori.php">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="bi bi-person"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- akhirnavbar -->



    <!-- jumbotron -->
    <section class="jumbotron text-center">
        <h1 class="display-4">Wisata? Ngga Perlu Jauh-Jauh #DiIndonesiaAja</h1>
        <p class="lead">Selamat datang di Indonesia, surganya pantai yang menakjubkan!
            Nikmati keindahan pantai Indonesia dengan pasir putih lembut, air biru jernih, dan pemandangan matahari terbenam yang spektakuler. Jelajahi destinasi menarik seperti Pulau Komodo, Raja Ampat, Bali, dan Gili Trawangan. Rasakan keramahan penduduk lokal, nikmati kuliner khas, dan temukan pengalaman liburan tak terlupakan.</p>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#F9F5F6" fill-opacity="1" d="M0,32L40,53.3C80,75,160,117,240,117.3C320,117,400,75,480,69.3C560,64,640,96,720,138.7C800,181,880,235,960,234.7C1040,235,1120,181,1200,149.3C1280,117,1360,107,1400,101.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>
    <!-- akhir jumbostron -->

    <!-- ======= Header ======= -->

    <!-- Page header with logo and tagline
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Surganya Kuliner Blog!</h1>
                <p class="lead mb-0"> Culinary Adventures in Malang, Discover the Art of Tasting</p>
            </div>
        </div>
    </header> -->
    <!-- Page content-->
    <div class="container">

        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <?php
                $kategori = $_GET['kategori'];
                $teratas = mysqli_query($koneksi, "SELECT * FROM artikel WHERE kategori='$kategori'");
                while ($data = mysqli_fetch_array($teratas)) {
                ?>
                    <div class="card mb-4">

                        <a href="#!"><img class="card-img-top" src="image_view.php?id=<?php echo $data['id_artikel']; ?>" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted"></div>
                            <h2 class="card-title"><?= $data["judul"] ?></h2>
                            <p class="card-text"><?= tampiltext($data["isi"]) ?></p>
                            <a class="btn btn-primary" href="post.php?myid=<?= $data['id_artikel'] ?>">Read more →</a>
                        </div>

                    </div>
                <?php
                }
                ?>
            </div>


            <!-- Side widgets-->
            <div class=" col-lg-4">

                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <?php while ($row = mysqli_fetch_assoc($all1)) {
                                        # code...
                                    ?>
                                        <li><a href="kategori.php?kategori=<?= $row['kategori'] ?>"><?= $row['kategori'] ?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class=" card mb-4">
                    <div class="card-header">About Us</div>
                    <div class="card-body">Welcome to the Wonderful Indonesia website! We are here to showcase the enchanting beauty, rich culture, and diverse wonders of Indonesia. From pristine beaches and majestic mountains to vibrant festivals and mouthwatering cuisine, Indonesia has it all. Explore our site and immerse yourself in the captivating charm of this incredible nation. Come and discover the wonders that make Indonesia truly extraordinary.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="bg-info text-white text-center p-1">
        <p>
            Created @ <a href="https://www.instagram.com/ppr.nma" class="text-white fw-bold">Putri Purnamasari</a>
        </p>
    </footer>
    <!-- akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>