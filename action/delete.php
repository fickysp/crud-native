<?php
include("../config/koneksi.php");

$id = intval($_GET['id']);

// Query untuk menghapus data
$query = "DELETE FROM produk WHERE id = $id";
$result = mysqli_query($koneksi, $query);
header("location:../dashboard.php");
