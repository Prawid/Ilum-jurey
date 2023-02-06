<?php
if (!isset($_SESSION['log'])) {
    session_start();
};

$sambungin = mysqli_connect('localhost', 'root', '');
$database = mysqli_select_db($sambungin, 'ilum');
