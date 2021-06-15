<?php


include_once('conn.php');
// $koneksi = mysqli_connect('localhost', 'user', 'password', 'database');

// header("Content-Type: application/json");
// header("Access-Control-Allow-Origin: *");

if (isset($_POST['nama'])&&isset($_POST['pesan'])) {
    $nama = htmlentities($_POST['nama'], ENT_QUOTES);
    $pesan = htmlentities($_POST['pesan'], ENT_QUOTES);
    $tanggal = htmlentities(date('d-m-Y h:i'), ENT_QUOTES);
    
    $q = "INSERT INTO `msg` (`nama`, `pesan`, `tanggal`) VALUES ('$nama', '$pesan', '$tanggal')";
    $data = mysqli_query($koneksi, $q);
    
    if ($data) {
        print json_encode('success', JSON_PRETTY_PRINT);
    }
} else {
    print json_encode('404 not found', JSON_PRETTY_PRINT);
}
