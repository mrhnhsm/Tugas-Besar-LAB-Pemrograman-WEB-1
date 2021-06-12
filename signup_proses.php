<?php
session_start();
$username ="";
$email    ="";
$errors   = array();
include ("koneksidata.php");

if(isset($_POST['buatakun'])){
    
    $username   = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email      = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password_1 = mysqli_real_escape_string($koneksi, $_POST['password1']);
    $password_2 = mysqli_real_escape_string($koneksi, $_POST['password2']);
    
    if(empty($username))    {array_push($errors, "Username Harus Diisi"); }
    if(empty($email))    {array_push($errors, "Email Harus Diisi"); }
    if(empty($password_1))    {array_push($errors, "Password Harus Diisi"); }
    if(empty($password_2))    {array_push($errors, "Confirm Password Harus Diisi"); }
    if($password_1 != $password_2) {array_push($errors, "Kedua Password Tidak Cocok"); }
    
    $user_check_query = "SELECT * FROM pelanggan WHERE username='$username' or email='$email' LIMIT 1";
    
    $result = mysqli_query($koneksi, $user_check_query);
    
    $user = mysqli_fetch_array($result);
    
    if ($user) {
        if ($user['username'] === $username){
            array_push($errors, "Username Sudah Digunakan");
        }
        
        if ($user['email'] === $email){
            array_push($errors, "Email Sudah Digunakan");
        }
    }
    
    if (count($errors) == FALSE) {
        $password = ($password_1);
        
        $query = "INSERT INTO pelanggan (username, email, password) VALUES('$username', '$email', '$password')";
        
        mysqli_query($koneksi, $query);
        $_SESSION['username'] = $username;
        echo "<script>alert('Akun Pelanggan Cali\'s Cafe Anda Berhasil Dibuat, Silahkan Login'); location = 'Login.php'; </script>";
    }

}
?>