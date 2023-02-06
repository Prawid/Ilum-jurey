<?php
include "config.php";
?>
<!DOCTYPE html>
<lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- My Css -->
    <link rel="stylesheet" href="style.css">

    <title>PT Ilum Jorey Persada</title>
  </head>
  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #000000;">

    <div class="container">
      <a class="navbar-brand" href="#"> <img src="image/logo.jpeg" alt="" width="50" height="44" class="d-inline-block align-text-top">
      </a>
      <p class="text-white">PT Ilum Jorey Persada</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="#Proyek">Proyek</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="#Karir">Karir</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="#Produk">Produk</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="#Layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="#About">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Akhir Navbar -->


  <!--Awal Caraousel-->
  <section class="carousel">
    <div class="container-fluid">
      <br>
      <br>
      <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/1.JPG" class="d-block w-100" alt="Gambar 1" />
            <div class="carousel-caption d-none d-md-block">
              <h5 class="bg-dark text-white">GENERAL CONTRACTOR</h5>
              <p class="bg-dark text-white">civil, electrical & instrument, structure, mechanical, dan piping.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/logistik.jpg" class="d-block w-100" alt="Gambar 2" />
            <div class="carousel-caption d-none d-md-block">
              <h5 class="bg-dark text-white">SUPPLIER</h5>
              <p class="bg-dark text-white">pengadaan material konstruksi yang berkualitas dan harga yang kami tawarkan adalah yang terbaik.
              </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffff" fill-opacity="1" d="M0,192L34.3,202.7C68.6,213,137,235,206,240C274.3,245,343,235,411,245.3C480,256,549,288,617,272C685.7,256,754,192,823,186.7C891.4,181,960,235,1029,245.3C1097.1,256,1166,224,1234,186.7C1302.9,149,1371,107,1406,85.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
  </section>
  <!--Akhir Caraousel-->
  <!-- Proyek -->
  <section id="Proyek">

    <div class="row text-center mb-3">
      <div class="col">

        <h3>Proyek Kami</h3>
        <n>Kami Membangun Proyek Terbaik</n>
        <br>Berikut Proyek Yang Telah Kami Buat</br>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php

        $data = mysqli_query($sambungin, "SELECT * FROM proyek");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-right" data-aos-darution="500">
              <div class="card bg-light" style="width: 22rem; ">
                <img class="card-img-top" src="admin/upload/<?php echo $d['gambar']; ?>">

                <div class="card-body">
                  <h5 class="card-title"><b><?php echo $d['Nama_Proyek']; ?></b></h5>
                  <p class="card-text"><?php echo $d['Deskripsi_Proyek']; ?></p>

                  <a class="btn btn-primary" href="detailproyek.php?ID_Proyek=<?php echo $d['ID_Proyek'] ?>">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        } ?>

      </div>
    </div>
    <!--container div  -->

  </section>

  <!-- Akhir Proyek -->

  <!-- Karir -->
  <section id="Karir">

    <div class="row text-center mb-3">
      <div class="col">
        <h2>Karir</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php

        $data = mysqli_query($sambungin, "SELECT * FROM karir");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-right" data-aos-darution="500">
              <div class="card bg-light" style="width: 22rem; ">
                <img class="card-img-top" src="admin/upload/<?php echo $d['gambar']; ?>">

                <div class="card-body">
                  <h5 class="card-title"><b><?php echo $d['Nama_peker']; ?></b></h5>
                  <p class="card-text"><?php echo $d['jobdesk']; ?></p>

                  <a class="btn btn-primary" href="detailpekerjaan.php?ID_loker=<?php echo $d['ID_loker'] ?>">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        } ?>

      </div>
    </div>
    <!--container div  -->

  </section>

  <!-- Akhir Karir -->

  <!-- Produk -->
  <section id="Produk">

    <div class="row text-center mb-3">
      <div class="col">
        <h2>Produk</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php

        $data = mysqli_query($sambungin, "SELECT * FROM produk");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-right" data-aos-darution="500">
              <div class="card bg-light" style="width: 22rem; ">
                <img class="card-img-top" src="admin/upload/<?php echo $d['gambar']; ?>">

                <div class="card-body">
                  <h5 class="card-title"><b><?php echo $d['Nama_Produk']; ?></b></h5>
                  <p class="card-text"><?php echo $d['Deskripsi_Produk']; ?></p>

                  <a class="btn btn-primary" href="detailproduk.php?ID_Produk=<?php echo $d['ID_Produk'] ?>">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        } ?>

      </div>
    </div>
    <!--container div  -->

  </section>

  <!-- Akhir Produk -->

  <!-- Layanan -->
  <section id="Layanan">

    <div class="row text-center mb-3">
      <div class="col">
        <h2>Layanan</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php

        $data = mysqli_query($sambungin, "SELECT * FROM layanan");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-right" data-aos-darution="500">
              <div class="card bg-light" style="width: 22rem; ">
                <img class="card-img-top" src="admin/upload/<?php echo $d['gambar']; ?>">

                <div class="card-body">
                  <h5 class="card-title"><b><?php echo $d['Nama_Layanan']; ?></b></h5>
                  <p class="card-text"><?php echo $d['Deskripsi_Layanan']; ?></p>

                  <a class="btn btn-primary" href="detail.php?id_carwash=<?php echo $d['id_carwash'] ?>">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        } ?>

      </div>
    </div>
    <!--container div  -->

  </section>

  <!-- Akhir Layanan -->


  <!-- About -->
  <section id="About" style="background-color: #fbb401;">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Tentang Kami</h2>
          <img src="image/logo.jpeg" alt="ilum" width="200" class="rounded-circle">
        </div>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-md-5 text-center">
          <p>PT . ILUM JOREY PERSADA General contractor & suppliers usaha yang dikelola oleh kinerja handal dan berpengalaman dalam memberikan pelayanan yang bergerak di bidang konstruksi dan supplier.
            <a href="tentangkami.php" class="link-primary">Selengkapnya...</a>
          </p>
        </div>
      </div>
    </div>

    <!-- Akhir About -->

    <!-- Site footer -->
    <!-- Remove the container if you want to extend the Footer to full width. -->


    <footer class="bg-dark text-center text-lg-start text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row my-4">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

            <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
              <img src="image/logo.jpeg" alt="ilum" width="200" class="rounded-circle">
            </div>

            <p class="text-center">PT . ILUM JOREY PERSADA General contractor & suppliers</p>
            <ul class="list-unstyled d-flex flex-row justify-content-center">
              <li>
                <a class="text-white px-2" href="#!">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </li>
              <li>
                <a class="text-white px-2" href="#!">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a class="text-white ps-2" href="#!">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>

          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Menu</h5>

            <ul class="list-unstyled">
              <li class="mb-2">
                <a href="#" class="text-white"><i class="fas fa-home pe-3"></i>Home</a>
              </li>
              <li class="mb-2">
                <a href="#Proyek" class="text-white"><i class="fas fa-building pe-3"></i>Proyek</a>
              </li>
              <li class="mb-2">
                <a href="#Karir" class="text-white"><i class="fas fa-users pe-3"></i>Karir</a>
              </li>
              <li class="mb-2">
                <a href="#Produk" class="text-white"><i class="fas fa-shopping-cart pe-3"></i>Produk</a>
              </li>
              <li class="mb-2">
                <a href="#Layanan" class="text-white"><i class="fas fa-truck pe-3"></i>Layanan</a>
              </li>
              <li class="mb-2">
                <a href="#About" class="text-white"><i class="fas fa-rss pe-3"></i>Tentang Kami</a>
              </li>

            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->


          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Contact</h5>

            <ul class="list-unstyled">
              <li>
                <p><i class="fas fa-map-marker-alt pe-2"></i>Jl. Dewi Sartika No. 295 Cawang</p>
              </li>
              <li>
                <p><i class="fas fa-phone pe-2"></i>021 8087 2384</p>
              </li>
              <li>
                <p><i class="fas fa-envelope pe-2 mb-0"></i>ilumjorey@gmail.com</p>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 Copyright:
        <a class="text-white">PT ILUM JOREY PERSADA</a>
      </div>
      <!-- Copyright -->
    </footer>


    <!-- End of .container -->
    </footer>


    <!-- End of .container -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      window.$crisp = [];
      window.CRISP_WEBSITE_ID = "fef4639e-2281-4988-b5f3-c098ed92b3ae";
      (function() {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
      })();
    </script>

    </body>

    </html>