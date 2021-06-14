<?php
error_reporting(0);
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
$koneksi = mysqli_connect('localhost', 'user', 'password', 'database');
