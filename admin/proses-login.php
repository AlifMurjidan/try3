<?php
session_start();
include '../koneksi.php';
$username=$_POST['username'];
$password=md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$username' AND password='$password' ");
$cek = mysqli_num_rows($query);
$w = mysqli_fetch_array($query);
if($cek > 0) {
    $_SESSION['username'] = $w['username'];
    $_SESSION['password'] = $w['password'];
    $_SESSION['level'] = $w['level'];

    $_SESSION['login'] = "Y";
    header ('location:dashboard.php');
} else {
    echo "<script>alert('Username atau Password yang Anda Masukkan Salah!!!')</script>";
    echo "<script>document.location='login.php'</script>";
}
?>