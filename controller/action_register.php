<?php

session_start();
include '../config/koneksi.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$cekUser = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");
if(mysqli_num_rows($cekUser) > 0){
    //logika ketika user sudah ada
    header("Location:../register.php?error=userexists");
    exit();
}else{
    $queryRegis = "INSERT INTO user (username, email, password,role) VALUES ('$username', '$email', '$password', 'user')";
    if(mysqli_query($koneksi,$queryRegis)){
        header("Location:../login.php");
        exit();
    }else{
        echo "Terjadi galat saat registrasi" . mysqli_error($koneksi);
    }
}