
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
        'nama' => htmlentities($value['nama'], ENT_QUOTES),
        'pesan' => htmlentities($value['pesan'], ENT_QUOTES),
        'tanggal' => htmlentities($value['tanggal'], ENT_QUOTES)
    );
}

print json_encode($data_r, JSON_PRETTY_PRINT);
