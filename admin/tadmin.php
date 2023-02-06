<?php

//koneksi database 
include '../config.php';
$ID_Admin = $_POST['ID_Admin'];
$Nama_Admin = $_POST['Nama_Admin'];
$Alamat = $_POST['Alamat'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$role = $_POST['role'];


mysqli_query($sambungin, "INSERT INTO data_admin values('$ID_Admin','$Nama_Admin','$Alamat','$Username','$Password','$role')");

header("location:dataadmin.php");
