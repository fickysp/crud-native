<?php
include "../config/koneksi.php";

$nama_produk = $_POST['nama_produk'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

$tambah = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, stok, harga) VALUES ('$nama_produk','$stok', $harga)");
header("Location:../dashboard.php");