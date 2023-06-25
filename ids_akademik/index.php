<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">

    <!--style (css)-->
    <link rel="stylesheet" href="style.css">

    <!--Logo title bar-->
    <link rel="icon" href="Assets/logosma.png" type="image/x-icon">

    <title>SMAN 1 Mojosari</title>
  </head>

    <body>
    <!--Navbar-->
        <nav class="navbar navbar-expand-lg position-fixed w-100">
            <div class="container">
            <a class="navbar-brand" href="#">
            <img src="Assets/logosma.png" alt="" width="30" class="d-inline-block me-1 mx-1"> SMA Negeri 1 Mojosari</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbarNav">
                <ul class="navbar-nav mx-5">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="profil.php">PROFIL SEKOLAH</a>
                </li>
                <li class="nav-item mx-2">
                    <a type="nav-link" class="btn btn-secondary" href="./login.php">Login</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

     <!-- Hero Section -->
     <section id ="hero">
          <div class="row">
                <img src="Assets/sekolahsma.png" alt="" class="position-absolute end-0 bottom-18 img-hero">
          </div>
      </section>

      <!-- Berita Acara section-->
      <section id="BeritaAcara">
        <div class="container">
          <div class="row">
            <div class="col-8 text-align">
              <h2>Ekstrakurikuler</h2>
              <span class="sub-title">Kegiatan yang ada pada SMA</span>
            </div>
          </div>
          </div>
        </div>
      </section>

           <!-- section galeri ekstra -->
            <div class="container p-1">   
              <div class="row align-items-center mb-4 mt-4 ">
                <div class="col-lg-3">
                  <div class="bungkusGambar">
                    <img src="./Assets/soccer.png" href="#">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="bungkusGambar">
                    <img src="./Assets/basketball.png" href="#">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="bungkusGambar">
                    <img src="./Assets/cooking.png" href="#">
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="bungkusGambar">
                        <img src="./Assets/photo.png" href="#">
                    </div>
                  </div>
              </div>
              <div class="row align-items-center mb-4 mt-4 ">
                <div class="col-lg-3">
                  <div class="bungkusGambar">
                    <img src="./Assets/scientist.png" href="#">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="bungkusGambar">
                    <img src="./Assets/music.png" href="#">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="bungkusGambar">
                    <img src="./Assets/web.png" href="#">
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="bungkusGambar">
                        <img src="./Assets/conference.png" href="#">
                    </div>
                  </div>
              </div>
            </div>

     <!--section pemberitahuan-->
     <section id="pemberitahuan">
        <div class="container-fluid">
          <div class="container">
            <div class="col-lg-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen></iframe>
              </div><!-- End Google Maps -->
              <div class="col-md-12">
                <h3>Pusat Aduan Umum</h3>
                <div class="kontak">
                  <h5>Kontak</h5>
                  <div style="margin-bottom: 20px;">
                    <img src="Assets/home.png" alt="" class="icon">
                    <a>Mojosari, Mojokerto, Jawa Timur</a>
                  </div>
                  <div style="margin-bottom: 20px;">
                    <img src="Assets/email.png" alt="" class="icon">
                    <a>SMAN1MOJOSARI@gmail.com</a>
                  </div>
                  <div>
                    <img src="Assets/telephone.png" alt="" class="icon">
                    <a>031-5964856</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>

      <!-- Berita Acara section-->
      <section id="BeritaAcara">
        <div class="container">
          <div class="row">
            <div class="col-8 text-align">
              <h2>Berita Terbaru</h2>
              <span class="sub-title">Pemberitahuan terkait berita - berita terkalit SMA</span>
            </div>
          </div>
          </div>
        </div>
      </section>

      <!-- Berita Acara section-->
      <section id="BeritaAcara">
        <div class="container">
          <div class="row">
            <div class="col-8 text-align">
              <h2>Alumni</h2>
              <span class="sub-title">Informasi terkait alumni terkait</span>
            </div>
          </div>
          </div>
        </div>
      </section>

      <!--footer-->>
      <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                    </div>
                    <div class="col-lg-3 item social">
                        <a href="#"><img src="Assets/instagram.png" alt="" class="icon"></i></a>
                        <a href="#"><img src="Assets/facebook.png" alt="" class="icon"></i></a>
                        <a href="#"><img src="Assets/twitter.png" alt="" class="icon"></i></a>
                        <a href="#"><img src="Assets/linkedin.png" alt="" class="icon"></i></a>
                        <p class="copyright">SMA Negeri 1 Mojosari</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    </body>

   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></scrip>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</html>