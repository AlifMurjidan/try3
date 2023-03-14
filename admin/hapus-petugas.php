<?php
include '../koneksi.php';
if(isset($_GET['id_petugas'])){
    $id_petugas = $_GET['id_petugas'];

    $query = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");

    if($query){
        header('location:petugas.php');
    } else {
        die ("GAGAL MENGHAPUS");
    }
} else {
    die ("AKSES DILARANG!");
}
?>