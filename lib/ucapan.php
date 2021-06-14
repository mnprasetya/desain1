
<?php


include_once('conn.php');
// $koneksi = mysqli_connect('localhost', 'user', 'password', 'database');

// header("Content-Type: application/json");
// header("Access-Control-Allow-Origin: *");
$q = 'SELECT * FROM `msg` ORDER BY `id` desc';
$data = mysqli_query($koneksi, $q);
$data_r = array();

foreach ($data as $key => $value) {
    $data_r[] = array(
        'nama' => htmlentities($value['nama']),
        'pesan' => htmlentities($value['pesan']),
        'tanggal' => htmlentities($value['tanggal'])
    );
}

print json_encode($data_r, JSON_PRETTY_PRINT);
