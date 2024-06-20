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

  <title>Wisata Punya Siapa!</title>
</head>

<body id="home">

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
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Artikel</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#galeri">Galeri</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#galeri">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
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

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,165.3C384,171,480,149,576,117.3C672,85,768,43,864,32C960,21,1056,43,1152,64C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
  <!-- akhir jumbostron -->

  <!-- ======= Header ======= -->

  <!-- galeri -->
  <!-- <section id="galeri">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col ">
          <h2>Galeri</h2>
        </div>
      </div>
      <div class="row justify-content-center mb-3 ">
        <div class="col-4">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, repellat! Nisi, repellendus explicabo. Tempora sapiente vero quaerat maxime, laboriosam numquam sunt fugit aliquam architecto neque. Libero sunt nulla soluta neque voluptatum fugiat quo vel quos alias explicabo, doloremque repellat a impedit enim saepe voluptates, eligendi cupiditate aperiam veniam. Laudantium, soluta.</p>
        </div>
        <div class="col-4">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus quo officiis, eos ad odit dolorem accusantium, id consequuntur odio, numquam nam! Rem repellat quas illo? Rerum quisquam possimus reprehenderit magni ipsa aperiam omnis similique, doloribus, odit delectus qui expedita quasi totam a iusto natus nobis itaque dolores est animi in?</p>
        </div>
      </div>
    </div>
  </section> -->
  <!-- akhir galeri -->

  <!-- Galeri -->
  <section id="galeri">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Galeri</h2>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./img/bale.jpg" class="card-img-top" alt="pantaibale">
              <div class="card-body">
                <p class="card-text">Pantai Balekambang di Malang adalah surga pantai yang memukau dengan pasir putihnya, ombak yang menggoda, dan keberadaan pura berdiri di tengah lautan yang menambah pesonanya. <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i></p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./img/pink.jpeg" class="card-img-top" alt="pantaipink">
              <div class="card-body">
                <p class="card-text">Pantai Pink di Lombok adalah surga tersembunyi dengan pasir berwarna merah muda yang unik, air laut yang jernih, dan pemandangan spektakuler yang memukau.<i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i></p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./img/lawu.jpeg" class="card-img-top" alt="lawu">
              <div class="card-body">
                <p class="card-text">Gunung Lawu, dengan puncaknya yang menjulang tinggi dan panorama alam yang memikat, adalah destinasi yang menggoda para pendaki dan pencinta keindahan alam. <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i></p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./img/maha.jpeg" class="card-img-top" alt="mahameru">
              <div class="card-body">
                <p class="card-text">Gunung Mahameru, dengan kekuatan dan keagungannya, menjulang tinggi sebagai puncak tertinggi di Pulau Jawa, menantang para pendaki untuk menaklukkan ketinggian dan menikmati keindahan panorama yang menakjubkan. <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i></p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./img/derma.jpg" class="card-img-top" alt="pulauderma">
              <div class="card-body">
                <p class="card-text">Pulau Derawan, dengan keindahan alam bawah lautnya yang luar biasa dan kehadiran penyu hijau yang memikat, adalah destinasi impian bagi para penyelam dan pecinta kehidupan laut. <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i></p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./img/liha.jpg" class="card-img-top" alt="pulauliha">
              <div class="card-body">
                <p class="card-text">Pulau Lihaga, dengan keindahan alamnya yang memukau dan keanekaragaman hayati yang luar biasa, adalah destinasi yang belum banyak dijamah yang menawarkan pengalaman eksplorasi yang tak terlupakan. <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- akhir galeri -->

  <!-- about -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col ">
          <h2>About</h2>
        </div>
      </div>
      <div class="row justify-content-center mb-3 ">
        <div class="col-4">
          <p>Website Wisata Punya Siapa adalah platform yang didedikasikan untuk mempromosikan keindahan dan keanekaragaman pariwisata di Indonesia. Melalui website ini, pengunjung dapat menjelajahi berbagai destinasi wisata mulai dari pulau-pulau eksotis, gunung-gunung megah, pantai-pantai indah, hingga keajaiban alam bawah laut yang menakjubkan.</p>
        </div>
        <div class="col-4">
          <p>Website ini juga menyediakan galeri foto yang memukau, sehingga pengunjung dapat melihat potret keindahan alam Indonesia sebelum mereka benar-benar mengunjungi tempatnya. Dengan Website Wisata Punya Siapa, pengunjung akan merasa terinspirasi dan tertarik untuk menjelajahi keajaiban alam dan budaya Indonesia yang tak ternilai harganya.</p>
        </div>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#F8F6F4" fill-opacity="1" d="M0,32L40,53.3C80,75,160,117,240,117.3C320,117,400,75,480,69.3C560,64,640,96,720,138.7C800,181,880,235,960,234.7C1040,235,1120,181,1200,149.3C1280,117,1360,107,1400,101.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>

  </section>
  <!-- akhir about -->

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