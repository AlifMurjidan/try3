<?php
session_start();
include '../koneksi.php';

if(isset($_POST['button'])) {
    $tgl=date("Y-m-d H:i:s");
    $nik=$_SESSION['nik'];
    $laporan=$_POST['isi_laporan'];
    $ekstensi=array('png','jpg');
    $nama=$_FILES['foto']['name'];
    $x=explode('.', $nama);
    $eks=strtolower(end($x));
    $ukuran=$_FILES['foto']['size'];
    $file_tmp=$_FILES['foto']['tmp_name'];

    if(in_array($eks, $ekstensi) == true ){
        if($ukuran < 10440700){
            move_uploaded_file($file_tmp, 'foto/'.$nama);
            $query=mysqli_query($koneksi, "INSERT INTO pengaduan VALUES(NULL,'$tgl','$nik','$laporan','$nama','0')");
            if($query){
                header('location:pengaduan.php?pengaduan=sukses');
            } else {
                header('location:pengaduan.php?pengaduan=gagal');
            }
        } else {
            die ("AKSES DILARANG!");
        }
    }
}
?>