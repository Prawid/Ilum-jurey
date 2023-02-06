<?php
include '../config.php';
$ID_Proyek = $_GET['ID_Proyek'];
mysqli_query($sambungin, "DELETE FROM proyek where ID_Proyek='$ID_Proyek'");

header("location:dataproyek.php");
