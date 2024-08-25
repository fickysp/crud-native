<?php
include "../config/koneksi.php";

// Ambil data dari form
$id = intval($_POST['id']);
$nama_produk =  $_POST['nama_produk'];
$stok =  $_POST['stok'];
$harga =  $_POST['harga'];

// Query untuk memperbarui data produk
$update = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', stok='$stok', harga=$harga WHERE id=$id");

// Cek jika query berhasil
if ($update) {
    // Redirect ke halaman dashboard setelah berhasil
    header("Location: ../dashboard.php");
} else {
    // Jika query gagal, tampilkan pesan error
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
