<?php

session_start();
include ('koneksidata.php');
$email=$_POST['email'];
$password=$_POST['password'];
$query=mysqli_query($koneksi, "select * from perusahaan where email = '$email' and password = '$password'");

$xxx=mysqli_num_rows($query);
    if($xxx==TRUE){
        $_SESSION['email']=$email;
        
        echo "<script> alert ('Selamat Datang Di Restoran Anda'); location = 'halamanpertama.php';</script>";
    }

else{
    echo "<script>alert('Email Atau Pasword Yang Anda Masukkan Salah!!!'); location = 'loginusaha.php';</script>";
}
?>