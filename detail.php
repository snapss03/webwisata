<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Blog Home - Start Bootstrap Template</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="./assets/css/styles.css" rel="stylesheet" />
</head>

< <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand page-scroll" href="#home">Wisata Punya Siapa</a>
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

  <!-- Page content-->
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-8">
        <!-- Post content-->
        <article>
          <?php
          include 'koneksi.php';
          $sql = "SELECT * FROM artikel WHERE id='" . $_GET['id'] . "'";
          $query = $conn->query($sql);
          $row = mysqli_fetch_array($query);
          ?>
          <!-- Post header-->
          <header class="mb-4">
            <!-- Post title-->
            <h1 class="fw-bolder mb-1"><?= $row['judul'] ?></h1>
            <!-- Post meta content-->
            <div class="text-muted fst-italic mb-2">Ditulis <?= $row['tanggal'] ?> oleh Bulan</div>
            <!-- Post categories-->
            <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?= $row['kategori'] ?></a>
          </header>
          <!-- Preview image figure-->
          <figure class="mb-4"><img class="img-fluid rounded" src="<?= $row['gambar'] ?>" alt="..." height="20px"></figure>
          <!-- Post content-->
          <section class="mb-5">
            <div class="isiartikel" style="text-align:justify;">
              <p class="fs-5 mb-4">
              <p><?= $row['isi'] ?></p>
              </p>

              <div class="container">
                <button class="btn btn-outline-primary btn-sm" onclick="history.back()">Kembali</button>
              </div>
            </div>

          </section>
        </article>
      </div>

      <!-- Side widgets-->
      <div class="col-lg-4">
        <!-- Search widget-->
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
                  <li><a href="#!">Pantai</a></li>
                  <li><a href="#!">Gunung</a></li>
                  <li><a href="#!">Pulau</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Side widget-->
        <div class="card mb-4">
          <div class="card-header">Tentang</div>
          <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
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


  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </body>

</html>