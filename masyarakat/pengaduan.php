<?php
session_start();
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
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
            <a href="proses-logout.php"><button class="btn btn-danger" name="button" type="submit">Log Out</button></a>
        </nav> 

    <div class="inner-header" style="padding-top:250px;">
        <div class="row justify-content-center">
            <div class="card shadow-lg mb-5">
                <div class="container-fluid">

                <div class="card-body">
                    <form action="proses-pengaduan.php" method="POST" enctype="multipart/form-data">
                        <h5>NIK : <?= $_SESSION['nik'] ?></h5>
                        <div class="form-group">
                            <label for="isi_laporan">Laporan :</label>
                            <textarea name="isi_laporan" id="isi_laporan" rows="3" class="form-control textarea" placeholder="Silahkan Masukkan Laporan Anda...."></textarea>
                            <label for="foto">Foto :</label><br>
                            <input type="file" name="foto" id="foto" required>
                            <hr>
                            <button class="btn btn-succes" name="button" type="submit">Kirim</button>
                        </div> 
                    </form>
                </div>

                </div>
            </div>
        </div>
    </div>

    </div>

</body>
</html>