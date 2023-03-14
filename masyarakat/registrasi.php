<?php
session_start();
require '../koneksi.php';
if(isset($_POST['nama']) && ($_POST['password'])) {
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $telp=$_POST['telp'];
    $password=md5($_POST['password']);

    $query = mysqli_query($koneksi,"INSERT INTO masyarakat VALUES('$nik','$nama','$username','$password','$telp')");
    if($query){
        header('location:login.php');
    } else {
        echo "MAAF ANDA GAGAL MELAKUKAN REGISTRASI!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pengaduan Masyarakat</title>
</head>
<body>

    <div class="header">
        <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top" style="height:70px;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">PENGADUAN</a>
                </li>
                <li class="nav-item">
                    <a href="cek-pengaduan.php" class="nav-link">CEK PENGADUAN</a>
                </li>
            </ul>
        </nav>

    <div class="inner-header" style="padding-top:100px;">
        <div class="row justify-content-center">
            <div class="card shadow-lg mb-5">
                <div class="container-fluid">

                <form action="registrasi.php" method="POST">
                    <div class="card-body mt-2">
                        <h4 class="text-center">REGISTRASI</h4>
                        <hr style="width:70%;">
                        <div class="form-group">
                            <label for="nik" style="float:left;">NIK :</label>
                            <input type="nik" name="nik" id="nik" class="form-control mb-4">
                            <label for="nama" style="float:left;">NAMA :</label>
                            <input type="text" name="nama" id="nama" class="form-control mb-4">
                            <label for="username" style="float:left;">USERNAME :</label>
                            <input type="text" name="username" id="username" class="form-control mb-4">
                            <label for="telp" style="float:left;">TELEPON :</label>
                            <input type="text" name="telp" id="telp" class="form-control mb-4">
                            <label for="password">PASSWORD :</label>
                            <input type="password" name="password" id="password" class="form-control mb-4">
                            <hr>
                            <p>Already Have Account? <a href="login.php" style="color:black;">Login</a></p>
                            <button class="btn btn-succes" type="submit" name="button">Daftar</button>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>

    </div>
</body>
</html>