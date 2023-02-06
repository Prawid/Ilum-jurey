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

  <div class="container-fluid" style="padding:10% 0%">
    <h1 class="h3 mb-2 text-gray-800">Form Tambah Data Karir</h1>
    <?php
    // https://www.malasngoding.com
    // menghubungkan dengan koneksi database
    include 'koneksi.php';

    // mengambil data barang dengan kode paling besar
    $query = mysqli_query($koneksi, "SELECT max(id_resume) as kodeTerbesar FROM resume1");
    $data = mysqli_fetch_array($query);
    $kodeBarang = $data['kodeTerbesar'];

    // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
    // dan diubah ke integer dengan (int)
    $urutan = (int) substr($kodeBarang, 3, 3);

    // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
    $urutan++;

    // membentuk kode barang baru
    // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
    // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
    // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
    $huruf = "RSM";
    $kodeBarang = $huruf . sprintf("%03s", $urutan);
    ?>
    <form method="post" action="" enctype="multipart/form-data">

      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">ID Resume</label>
        <div class="col-sm-10">
          <input type="text" name="id_resume" required="required" value="<?php echo $kodeBarang ?>" readonly>
        </div>
      </div>

      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nama Pelamar</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama_user">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Domisili</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="domisili">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="email_user">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nomor HP</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="no_hp">
        </div>
      </div>
      <div class="row mb-3">
        <div class="input-group mb-3">
          <label class="input-group-text">Upload Resume</label>
          <input type="file" class="form-control" name="resume_user">
        </div>
      </div>


      <input type="submit" value="Simpan">
    </form>
  </div>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "config.php";

    $id_resume = $_POST['id_resume'];
    $nama_user = $_POST['nama_user'];
    $domisili = $_POST['domisili'];
    $email_user = $_POST['email_user'];
    $no_hp = $_POST['no_hp'];
    $filename1 = $_FILES['resume_user']['name'];


    $tmp_name1 = $_FILES['resume_user']['tmp_name'];


    $type1 = explode('.', $filename1);


    $resume_user = $type1[1];

    //Menyimpan gambar inputan pada file data-barang
    $newname1 = 'resume_user' . time() . '.' . $resume_user;

    //Tipe ekstensi gambar
    $tipe_diizinkan = array('pdf', 'docx', 'doc');

    //Fungsi apabila tipe file tidak sesuai dengan yang diizinkan
    if (!in_array($resume_user, $tipe_diizinkan)) {
      echo 'Format file tidak diizinkan';
    } else {
      //Mengupload gambar ke file data barang
      move_uploaded_file($tmp_name1, 'upload/' . $newname1);

      $insert = mysqli_query($sambungin, "INSERT INTO resume1 VALUES(
                                      '$id_resume',
                                      '$nama_user',
                                      '$domisili',
                                      '$email_user',
                                      '$no_hp',
                                      '$newname1')");
      if ($insert) {
        echo '<script> alert("Berhasil menambahkan data") </script>';
        echo '<script>window.location="index.php" </script>';
      } else {
        echo 'Gagal menambahkan data' . mysqli_error($sambungin);
      }
    }
  }
  ?>
  <!-- /.container-fluid -->
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