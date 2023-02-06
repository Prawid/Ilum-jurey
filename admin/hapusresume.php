<?php
include '../config.php';
$id_resume = $_GET['id_resume'];
mysqli_query($sambungin, "DELETE FROM resume1 where id_resume='$id_resume'");

header("location:dataresume.php");
