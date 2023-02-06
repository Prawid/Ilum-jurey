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

        <title>CarWash Locator</title>
    </head>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #131d47;">

        <div class="container">
            <a class="navbar-brand" href="#"> <img src="image/Free_Sample_By_Wix (1).jpg" alt="" width="50" height="44" class="d-inline-block align-text-top">
                Carwash Locator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-bold nav-link" href="index.php#Popular">Popular</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-bold nav-link" href="#Carwash">Carwash</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-bold nav-link" href="index.php#About">About</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Akhir Navbar -->
    <!-- Card -->

    <div class="container">
        <br>
        <br>
        <br>

        <h2 align="center">Carwash Bogor Utara</h2>
        <div class="row" id="load_data">
            <?php
            include 'config.php';
            $query = "SELECT * FROM data_carwash ORDER BY id_carwash ASC";
            $dewan1 = $sambungin->prepare($query);
            $dewan1->execute();
            $res1 = $dewan1->get_result();
            while ($row = $res1->fetch_assoc()) {
                $id_carwash = $row["id_carwash"];
                $gambar1 = $row["gambar1"];

                $nama_carwash = $row["nama_carwash"];
                if (strlen($nama_carwash) > 60) {
                    $nama_carwash = substr($nama_carwash, 0, 60) . "...";
                }
                $Keterangan = $row["Keterangan"];
                if (strlen($Keterangan) > 100) {
                    $Keterangan = substr($Keterangan, 0, 100) . "...";
                }
            ?>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <img src="admin/upload/<?php echo $row['gambar1']; ?>" alt="project-image" class="rounded">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $nama_carwash; ?></h5>
                            <p class="card-text"><?php echo $Keterangan; ?></p>
                            <a href="detail.php">Selengkapnya...</a>
                        </div>

                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <!-- Akhir card -->


    <!-- Footer -->
    <footer class="sticky-footer bg-primary text-white text-center pb-5">

        <p>Created with love by <a href="https://www.instagram.com/akmalraharjo/" class="text-white fw-bold">akmalraharjo</a></p>
        </div>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>