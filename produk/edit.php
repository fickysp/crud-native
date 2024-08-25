<?php
include "../config/koneksi.php";
$produk = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id DESC");
$row = mysqli_fetch_assoc($produk);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="container py-5">
    <div class="row">
        <form action="../action/edit.php" method="post">
            <div class="mb-3">
                <label for="">Nama Barang</label>
                <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                <input type="text" value="<?= $row['nama_produk']?>" class="form-control" placeholder="Masukkan Nama Barang" name="nama_produk">
            </div>
            <div class="mb-3">
                <label for="">Stok</label>
                <select name="stok" class="form-control">
                    <option value="<?= $row['stok']?>">Pilih Status Stok : (saat ini <?= $row['stok']?>)</option>
                    <option value="tersedia">Tersedia</option>
                    <option value="habis">Habis</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="">Harga</label>
                <input type="number" class="form-control" placeholder="Masukkan Harga" name="harga" value="<?= $row['harga']?>">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Simpan</button>
                <a href="../dashboard.php" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
