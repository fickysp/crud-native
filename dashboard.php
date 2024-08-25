<?php
ob_start();
session_start();
include "config/koneksi.php";
$query_tabel = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id DESC");    

if(!isset($_SESSION['username'])){
    header("Location:login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <table class="table table-bordered">
                <div align="right" class="mb-4">
                    <a href="produk/tambah.php" class="btn btn-primary">Tambah Data</a>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($query_tabel as $row) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama_produk'] ?></td>
                            <td><?php echo $row['stok'] ?></td>
                            <td>Rp. <?php echo number_format($row['harga']) ?></td>
                            <td>
                                <a class="btn btn-outline-dark" href="produk/edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                <a class="btn btn-outline-dark" href="action/delete.php?id=<?php echo $row['id']; ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>