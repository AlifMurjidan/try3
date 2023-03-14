<?php
include '../koneksi.php';
if(isset($_POST['submit'])){
    $id_pengaduan = $_POST['id_pengaduan'];
    $tgl_pengaduan = $_POST['tgl_pengaduan'];
    $nik = $_POST['nik'];
    $laporan = $_POST['isi_laporan'];
    $status = $_POST['status'];

    $query = mysqli_query($koneksi, "UPDATE pengaduan SET tgl_pengaduan='$tgl_pengaduan', nik='$nik', isi_laporan='$laporan', status='$status' WHERE id_pengaduan='$id_pengaduan' ");
    
    if($query){
        header('location:pengaduan.php');
    } else {
        die ("GAGAL MENYIMPAN PERUBAHAN");
    }
} else {
    die("AKSES DILARANG!");
}
?>