<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
$koneksi = mysqli_connect('localhost', 'user', 'password', 'database');
