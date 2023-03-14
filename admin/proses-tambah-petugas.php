<?php
include '../koneksi.php';

if(isset($_POST['submit'])){
    $nama=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $telp=$_POST['telp'];

    $query = mysqli_query($koneksi, "INSERT INTO petugas VALUES(NULL, '$nama','$username','$password','$telp','petugas')");

    if($query){
        header('location:petugas.php?tambah=sukses');
    } else {
        header('location:petugas.php?tambah=gagal');
    }
} else {
    die("AKSES DILARANG");
}

?>