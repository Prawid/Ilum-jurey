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

    <title>Detail Proyek</title>
  </head>
  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #000000;">

    <div class="container" style=" margin-bottom: -2%">
      <a class="navbar-brand" style="width:20%" href="#"> <img class="anjay" src="image/logo.jpeg" style="width:30%; padding:12% 0% ">
      </a>
      <p class="text-white">PT Ilum Jorey Persada</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#">Home</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="index.php#Proyek">Proyek</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="index.php#Karir">Karir</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="index.php#Produk">Produk</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="index.php#Layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="fw-bold nav-link" href="index.php#About">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Akhir Navbar -->
  <!-- detail -->
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

  <?php
  include "config.php";
  $ID_Proyek = $_GET['ID_Proyek'];
  $data = mysqli_query($sambungin, "SELECT * FROM proyek where ID_Proyek='$ID_Proyek'");
  $d = mysqli_fetch_array($data);


  ?>
  <div class="container" style="padding:10% 0%">
    <div class="row">
      <div class="col-md-5">
        <div class="project-info-box mt-0">
          <h5><?php echo $d['Nama_Proyek'] ?></h5>

        </div><!-- / project-info-box -->


        <div class="project-info-box">
          <p><b>Nama Proyek:</b> <?php echo $d['Nama_Proyek'] ?></p>
          <p><b>Deskripsi Proyek:</b> <?php echo $d['Deskripsi_Proyek'] ?></p>



        </div><!-- / project-info-box -->


      </div><!-- / column -->

      <div class="col-md-7">
        <img src="admin/upload/<?php echo $d['gambar']; ?>" alt="project-image" class="rounded">

      </div><!-- / column -->
    </div>
  </div>


  <!-- Akhir detail -->


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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

  </html>