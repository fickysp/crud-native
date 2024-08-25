<?php

session_start();
include '../config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$queryLogin = mysqli_query($koneksi, "SELECT * FROM user where username='$username'");

if (mysqli_num_rows($queryLogin) > 0) {
    $dataUser = mysqli_fetch_assoc($queryLogin);
    if ($password === $dataUser['password']) {
        $_SESSION['username'] = $dataUser['username'];
        $_SESSION['id'] = $dataUser['id'];
        if ($dataUser['role'] == 'admin') {
            header("Location:../dashboard.php");
        } elseif ($dataUser['role'] == 'user') {
            header("Location:../index.php");
        } else {
            header("Location:../login.php");
        }
    } else {
        header("Location:../login.php?error=invalidPassword");
    }
} else {
    echo "Location:../login.php?error=invalidUsername";
}
