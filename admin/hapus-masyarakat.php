<?php
include '../koneksi.php';

if(isset($_GET['nik'])) {
    $nik=$_GET['nik'];

    $query = mysqli_query($koneksi, "DELETE FROM masyarakat WHERE nik='$nik' ");
    if($query){
        header('location:masyarakat.php');
    } else {
        die ("GAGAL MENGHAPUS!!");
    }
} else {
    die ("AKSES DILARANG!");
}
?>