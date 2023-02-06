<?php
include '../config.php';
$nip = $_GET['nip'];
mysqli_query($sambungin, "DELETE FROM data_admin where nip='$nip'");

header("location:dataadmin.php");
?>