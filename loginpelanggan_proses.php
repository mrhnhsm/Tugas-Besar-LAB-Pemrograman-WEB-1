<?php

session_start();
include ('koneksidata.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($koneksi, "select * from pelanggan where username = '$username' and password = '$password'");

$xxx=mysqli_num_rows($query);
    if($xxx==TRUE){
        $_SESSION['username']=$username;
        
        echo "<script> alert ('Selamat Datang Di Cali\'s Cafe'); location = 'halamancustomer.php';</script>";
    }

else{
    echo "<script>alert('Email Atau Pasword Yang Anda Masukkan Salah!!!'); location = 'Login.php';</script>";
}
?>