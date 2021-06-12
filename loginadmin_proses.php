<?php

session_start();
include ('koneksidata.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($koneksi, "select * from admin where username = '$username' and password = '$password'");

$xxx=mysqli_num_rows($query);
    if($xxx==TRUE){
        $_SESSION['username']=$username;
        
        echo "<script> alert ('Selamat Datang Admin Cali\'s Cafe'); location = 'halamanadmin.php';</script>";
    }

else{
    echo "<script>alert('Email Atau Pasword Admin Yang Anda Masukkan Salah!!!'); location = 'loginadmin.php';</script>";
}
?>