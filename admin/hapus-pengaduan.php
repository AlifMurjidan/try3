<?php
include '../koneksi.php';
if(isset($_GET['id_pengaduan'])){
    $id = $_GET['id_pengaduan'];

    $query = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan=$id ");

    if($query){
        header('location:pengaduan.php');
    } else {
        header('location:pengaduan.php?gagal-menghapus');
    }
} else {
    die ("AKSES DILARANG");
}
?>