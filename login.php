<?php

session_start();

//menghubungkan dengan koneksi  

include './koneksi.php';

//menangkap data yang dikirim dari form  

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi, "select * from t_login where username='$username'");

$cek = mysqli_num_rows($data);

if (mysqli_num_rows($data) === 1) {

    if ($cek>0) {
            $_SESSION['level'] = 'admin';
            $_SESSION['username'] = $username;
           
            header('location:tampil.php');
        }
    }else{
        header('location:index.php?data=gagal');
    }

