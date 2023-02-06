<?php
include "config.php";
if (isset($_POST['login'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $login = mysqli_query($sambungin, "SELECT * FROM data_admin where username = '$Username' and password = '$Password'");
    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);

    if ($ketemu > 0) {
        $_SESSION['log'] = 'True';
        $_SESSION['Username']    =    $r['Username'];
        $_SESSION['ID_Admin']    =    $r['ID_Admin'];
        $_SESSION['Nama_Admin']    =    $r['Nama_Admin'];

        echo "
          <script>
          alert('Anda Berhasil Login, Selamat datang $_SESSION[Nama_Admin]');
          window.location = 'admin/dashboard.php'
          </script>
      ";
    } else {

        echo "
          <script>
          alert('username atau Password Salah');
          window.location = 'loginadmin.php'
          </script>
      ";
    };
};

if (!isset($_SESSION['log'])) {
} else {
    echo "
          <script>
          alert('Anda telah login sebagai $_SESSION[Nama_Admin]');
          window.location = 'admin/dasboard.php'
          </script>
          ";
}
?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT. ILLUM Admin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block "><img src="image/logo.jpeg" style='width:100%'></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div>
                                    <form method="post" class="user">
                                        <div class="form-group">
                                            <input name="Username" type="username" class="form-control form-control-user" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input name="Password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>

                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

</body>

</html>