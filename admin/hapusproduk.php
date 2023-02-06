<?php
include '../config.php';
$ID_Produk = $_GET['ID_Produk'];
mysqli_query($sambungin, "DELETE FROM produk where ID_Produk='$ID_Produk'");

header("location:dataproduk.php");
