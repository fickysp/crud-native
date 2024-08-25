<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "ujk";

$koneksi = mysqli_connect($server,$user,$password,$db);

if(!$koneksi){
    die("koneksi Gagal". mysqli_connect_error());
}
