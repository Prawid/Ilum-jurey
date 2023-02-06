<?php
include '../config.php';
$ID_loker = $_GET['ID_loker'];
mysqli_query($sambungin, "DELETE FROM karir where ID_loker='$ID_loker'");

header("location:datakarir.php");
