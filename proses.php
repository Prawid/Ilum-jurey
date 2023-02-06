<?php
//Masukan koneksi ke database nya disini
include "config.php";
//Query pertama, mengambil data nomor terakhir sesuai dengan nomor terbesar
$q = mysql_query("SELECT * FROM resume1 ORDER BY nomor DESC LIMIT 1");
$jumlah = mysql_num_rows($q);
$data = mysql_fetch_array($q);
//Jika tidak ada data, maka nomor pertama adalah 1
if ($jumlah <= 0) {
    $nomorbaru = 1;
}
//Jika ada data terakhir maka nomor urut akan ditambah 1
else {
    $nomorbaru = $data[nomor] + 1;
}
//Jika form nama tidak di isi
if ($_POST[nama_user] == "") {
    echo "Nama jangan dokosongkan...";
}
//Jika form alamat tidak di isi
else if ($_POST[domisili] == "") {
    echo "Domisili jangan dikosongkan...";
} else if ($_POST[email . user] == "") {
    echo "Email jangan dikosongkan...";
} else if ($_POST[no_hp] == "") {
    echo "Nomor HP jangan dikosongkan...";
}
//Jika kedua form di isi masukan data baru ke database
else {
    mysql_query("INSERT INTO resume1(nomor, nama_user, domisili, email_user, no_hp) VALUES ('$nomorbaru','$_POST[nama_user]','$_POST[domisili]','$_POST[email_user]','$_POST[no_hp]')");
    //Pemrosesan telah selesai, dan kembalikan ke halaman index.php
    echo '<script>window.location="karir.php" </script>';
}
