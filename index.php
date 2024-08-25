<?php
session_start();

include "config/koneksi.php";
$admn = mysqli_query($koneksi, "SELECT * FROM user WHERE role='admin'");
$adm = mysqli_fetch_assoc($admn);
var_dump($adm);
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
</head>
<body>
<a href="logout.php" class="btn btn-danger">Logout</a>
    
</body>
</html>