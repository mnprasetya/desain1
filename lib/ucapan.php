<?php


include_once('conn.php');

$q = 'SELECT * FROM `msg` ORDER BY `id` desc';
$data = mysqli_query($koneksi, $q);
$data_r = array();

foreach ($data as $key => $value) {
    $data_r[] = array(
        'nama' => $value['nama'],
        'pesan' => $value['pesan'],
        'tanggal' => $value['tanggal']
    );
}

print json_encode($data_r);
