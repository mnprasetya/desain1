<?php


include_once('conn.php');

    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];
    $tanggal = date('d-m-Y h:i:s');
    
    $q = "INSERT INTO `msg` (`nama`, `pesan`, `tanggal`) VALUES ('nama', 'pesan', 'tanggal')";
    $data = mysqli_query($koneksi, $q);
    
    if ($q) {
        echo "sukses";
    }
