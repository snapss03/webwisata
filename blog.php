<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- stlye.css -->
    <link rel="stylesheet" href="./style.css">

    <title>Wisata Indonesia!</title>
</head>

<body id="home">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Wisata Indonesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="blog.php">Artikel</a>
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


    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <?php
            if (isset($_GET['kategori'])) {
                if ($_GET['kategori'] == 'Pantai') { ?>
                    <div class="col-lg-8">
                        <!-- Featured blog post-->
                        <div class="card mb-4">
                            <?php
                            include 'koneksi.php';
                            $teratas = mysqli_query($conn, "SELECT * FROM artikel WHERE kategori='Pantai' ORDER BY id LIMIT 1");
                            while ($data = mysqli_fetch_array($teratas)) {
                            ?>
                                <a href="#!"><img class="card-img-top" src="<?php echo $data['gambar']; ?>" alt="..."></a>
                                <div class="card-body">
                                    <div class="small text-muted"><span><?= $data['tanggal'] ?></div>
                                    <h2 class="card-title"><?= $data["judul"] ?></h2>
                                    <p class="card-text"><?= substr($data["isi"], 0, 50) . (strlen($data["isi"]) > 50 ? "..." : "") ?></p>
                                    <a class="btn btn-primary" href="detail.php?id=<?= $data['id'] ?>">Read more →</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <!-- Nested row for non-featured blog posts-->

                        <div class="row">
                            <?php
                            $quer = mysqli_query($conn, "SELECT * FROM artikel WHERE kategori='Pantai' ORDER BY id");

                            while ($row = mysqli_fetch_array($quer)) {
                                # code...

                            ?>
                                <div class="col-lg-6">
                                    <!-- Blog post-->
                                    <div class="card mb-4">
                                        <a href="#!"><img class="card-img-top" src="<?php echo $row['gambar']; ?>" alt="..." height="200px"></a>
                                        <div class="card-body">
                                            <div class="small text-muted"><span><?= $row['tanggal'] ?>, </span></div>
                                            <h2 class="card-title h4"><?php echo $row["judul"] ?></h2>
                                            <p class="card-text "><?php substr($row["isi"], 0, 50) . (strlen($row["isi"]) > 50 ? "..." : "") ?></p>
                                            <a class="btn btn-primary" href="detail.php?id=<?= $row["id"]; ?>">Read more →</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                } elseif ($_GET['kategori'] == 'Gunung') { ?>
                    <div class="col-lg-8">
                        <!-- Featured blog post-->
                        <div class="card mb-4">
                            <?php
                            include 'koneksi.php';
                            $teratas = mysqli_query($conn, "SELECT * FROM artikel WHERE kategori='Gunung' ORDER BY id LIMIT 1");
                            while ($data = mysqli_fetch_array($teratas)) {
                            ?>
                                <a href="#!"><img class="card-img-top" src="<?php echo $data['gambar']; ?>" alt="..."></a>
                                <div class="card-body">
                                    <div class="small text-muted"><span><?= $data['tanggal'] ?></div>
                                    <h2 class="card-title"><?= $data["judul"] ?></h2>
                                    <p class="card-text"><?= substr($data["isi"], 0, 50) . (strlen($data["isi"]) > 50 ? "..." : "") ?></p>
                                    <a class="btn btn-primary" href="detail.php?id=<?= $data['id'] ?>">Read more →</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <!-- Nested row for non-featured blog posts-->

                        <div class="row">
                            <?php
                            $quer = mysqli_query($conn, "SELECT * FROM artikel WHERE kategori='Gunung' ORDER BY id");

                            while ($row = mysqli_fetch_array($quer)) {
                                # code...

                            ?>
                                <div class="col-lg-6">
                                    <!-- Blog post-->
                                    <div class="card mb-4">
                                        <a href="#!"><img class="card-img-top" src="<?php echo $row['gambar']; ?>" alt="..." height="200px"></a>
                                        <div class="card-body">
                                            <div class="small text-muted"><span><?= $row['tanggal'] ?>, </span></div>
                                            <h2 class="card-title h4"><?php echo $row["judul"] ?></h2>
                                            <p class="card-text "><?php substr($row["isi"], 0, 50) . (strlen($row["isi"]) > 50 ? "..." : "") ?></p>
                                            <a class="btn btn-primary" href="detail.php?id=<?= $row["id"]; ?>">Read more →</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                } elseif ($_GET['kategori'] == 'Pulau') { ?>
                    <div class="col-lg-8">
                        <!-- Featured blog post-->
                        <div class="card mb-4">
                            <?php
                            include 'koneksi.php';
                            $teratas = mysqli_query($conn, "SELECT * FROM artikel WHERE kategori='Pulau' ORDER BY id LIMIT 1");
                            while ($data = mysqli_fetch_array($teratas)) {
                            ?>
                                <a href="#!"><img class="card-img-top" src="<?php echo $data['gambar']; ?>" alt="..."></a>
                                <div class="card-body">
                                    <div class="small text-muted"><span><?= $data['tanggal'] ?></div>
                                    <h2 class="card-title"><?= $data["judul"] ?></h2>
                                    <p class="card-text"><?= substr($data["isi"], 0, 50) . (strlen($data["isi"]) > 50 ? "..." : "") ?></p>
                                    <a class="btn btn-primary" href="detail.php?id=<?= $data['id'] ?>">Read more →</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <!-- Nested row for non-featured blog posts-->

                        <div class="row">
                            <?php
                            $quer = mysqli_query($conn, "SELECT * FROM artikel WHERE kategori='Pulau' ORDER BY id");

                            while ($row = mysqli_fetch_array($quer)) {
                                # code...   

                            ?>
                                <div class="col-lg-6">
                                    <!-- Blog post-->
                                    <div class="card mb-4">
                                        <a href="#!"><img class="card-img-top" src="<?php echo $row['gambar']; ?>" alt="..." height="200px"></a>
                                        <div class="card-body">
                                            <div class="small text-muted"><span><?= $row['tanggal'] ?>, </span></div>
                                            <h2 class="card-title h4"><?php echo $row["judul"] ?></h2>
                                            <p class="card-text "><?php substr($row["isi"], 0, 50) . (strlen($row["isi"]) > 50 ? "..." : "") ?></p>
                                            <a class="btn btn-primary" href="detail.php?id=<?= $row["id"]; ?>">Read more →</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
            } else { ?>
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <?php
                        include 'koneksi.php';
                        $teratas = mysqli_query($conn, "SELECT * FROM artikel ORDER BY id LIMIT 1");
                        while ($data = mysqli_fetch_array($teratas)) {
                        ?>
                            <a href="#!"><img class="card-img-top" src="<?php echo $data['gambar']; ?>" alt="..."></a>
                            <div class="card-body">
                                <div class="small text-muted"><span><?= $data['tanggal'] ?></div>
                                <h2 class="card-title"><?= $data["judul"] ?></h2>
                                <p class="card-text"><?= substr($data["isi"], 0, 50) . (strlen($data["isi"]) > 50 ? "..." : "") ?></p>
                                <a class="btn btn-primary" href="detail.php?id=<?= $data['id'] ?>">Read more →</a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- Nested row for non-featured blog posts-->

                    <div class="row">
                        <?php
                        $quer = mysqli_query($conn, "SELECT * FROM artikel ORDER BY id");

                        while ($row = mysqli_fetch_array($quer)) {
                            # code...

                        ?>
                            <div class="col-lg-6">
                                <!-- Blog post-->
                                <div class="card mb-4">
                                    <a href="#!"><img class="card-img-top" src="<?php echo $row['gambar']; ?>" alt="..." height="200px"></a>
                                    <div class="card-body">
                                        <div class="small text-muted"><span><?= $row['tanggal'] ?>, </span></div>
                                        <h2 class="card-title h4"><?php echo $row["judul"] ?></h2>
                                        <p class="card-text "><?php substr($row["isi"], 0, 50) . (strlen($row["isi"]) > 50 ? "..." : "") ?></p>
                                        <a class="btn btn-primary" href="detail.php?id=<?= $row["id"]; ?>">Read more →</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="blog.php?kategori=Pantai">Pantai</a></li>
                                    <li><a href="blog.php?kategori=Gunung">Gunung</a></li>
                                    <li><a href="blog.php?kategori=Pulau">Pulau</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class=" card mb-4">
                    <div class="card-header">About Us</div>
                    <div class="card-body">Website Wisata Indonesia memiliki misi untuk mempromosikan Indonesia sebagai tujuan wisata utama dan menyediakan informasi lengkap bagi para wisatawan baik lokal maupun internasional. Kami percaya pada kekuatan perjalanan untuk menciptakan pengalaman bermakna dan menjembatani kesenjangan budaya, dan kami berupaya untuk menginspirasi hasrat berkelana dan memfasilitasi petualangan tak terlupakan.</div>
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