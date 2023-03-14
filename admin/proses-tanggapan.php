<?php

include '../koneksi.php';

if(isset($_POST['submit'])) {
    $id_pengaduan=$_POST['id_pengaduan'];
    $tgl_tanggapan=date('Y-m-d H:i:s');
    $tanggapan=$_POST['tanggapan'];
    $id_petugas=$_POST['id_petugas'];

    $query = mysqli_query($koneksi, "INSERT INTO tanggapan VALUES(NULL, '$id_pengaduan','$tgl_tanggapan','$tanggapan','$id_petugas')");

    if($query){
        header('location:pengaduan.php?tanggapan=sukses');
    } else {
        header('location:pengaduan.php?tanggapan=gagal');
    }
} else {
    die("AKSES DILARANG!!!");
}

?>
