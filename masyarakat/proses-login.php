<?php
session_start();
include '../koneksi.php';
$nik=$_POST['nik'];
$password=md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE nik='$nik' AND password='$password' ");

$cek = mysqli_num_rows($query);
if($cek > 0) {
    $_SESSION['nik'] = $nik;
    $_SESSION['status'] = "login";
    foreach ($query as $key => $query){
        $_SESSION['nik'] = $query['nik'];
    } 
    header('location:pengaduan.php');
} else {
    echo "<script>alert('NIK atau Password yang Anda Masukkan Salah!!!')</script>";
    echo "<script>document.location='login.php'</script>";
}

?>