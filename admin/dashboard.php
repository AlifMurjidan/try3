<?php
session_start();
include '../koneksi.php';
if($_SESSION['login'] != 'Y'){
    header('location:login.php?module=home');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Pengaduan Masyarakat</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
        <h2 style="margin-left:22%; color:white;">Layanan Aspirasi & Pengaduan Masyarakat</h2>
    </nav>

    <div class="row" id="body-row">

        <div class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MAIN MENU</small>
                </li>
                <a href="dashboard.php" class="bg-white list-group-item list-group-item-action">
                <div class="align-items-center">
                    <span class="menu-collapsed">Dashboard</span>
                </div>
                </a>
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
                </li>
                <?php
                if ($_SESSION['level'] == 'admin') {
                ?>
                <a href="masyarakat.php" class="bg-white list-group-item list-group-item-action">
                <div class="align-items-center">
                    <span class="menu-collapsed">Masyarakat</span>
                </div>
                </a>
                <a href="petugas.php" class="bg-white list-group-item list-group-item-action">
                <div class="align-items-center">
                    <span class="menu-collapsed">Petugas</span>
                </div>
                </a>
                <?php
                }
                ?>
                <a href="pengaduan.php" class="bg-white list-group-item list-group-item-action">
                <div class="align-items-center">
                    <span class="menu-collapsed">Pengaduan</span>
                </div>
                </a>
                <a href="login.php" class="bg-white list-group-item list-group-item-action">
                <div class="align-items-center">
                    <span class="menu-collapsed">Logout</span>
                </div>
                </a>
            </ul>
        </div>

        <div class="col p-4">
            <h4 class="display-5 mb-4">DASHBOARD</h4>
            <hr class="height: 10px;">
            
            <div class="row text-black">
                <?php
                if($_SESSION['level'] == 'admin') {
                ?>
                <div class="shadow-lg p-3 mb-4 ml-4 bg-body rounded" style="width: 18rem;">
                <div class="card-body overview-item-c1">
                    <h5 class="card-title">MASYARAKAT</h5>
                    <div class="display-4">
                        <?php
                        $sql="SELECT * FROM masyarakat";
                        $query=mysqli_query($koneksi, $sql);
                        echo mysqli_num_rows($query);   
                        ?>
                    </div>
                    <a href="masyarakat.php"><p class="card-text text-black">Lihat Detail</p></a>
                </div>
                </div>
                <div class="shadow-lg p-3 mb-4 ml-4 bg-body rounded" style="width: 18rem;">
                <div class="card-body overview-item-c1">
                    <h5 class="card-title">PETUGAS</h5>
                    <div class="display-4">
                       <?php
                        $sql="SELECT * FROM petugas";
                        $query=mysqli_query($koneksi, $sql);
                        echo mysqli_num_rows($query);
                       ?>
                    </div>
                    <a href="petugas.php"><p class="card-text text-black">Lihat Detail</p></a>
                </div>
                </div>
                <?php } ?>
                <div class="shadow-lg p-3 mb-4 ml-4 bg-body rounded" style="width: 18rem;">
                <div class="card-body overview-item-c1">
                    <h5 class="card-title">PENGADUAN</h5>
                    <div class="display-4">
                        <?php
                        $sql="SELECT * FROM pengaduan";
                        $query=mysqli_query($koneksi, $sql);
                        echo mysqli_num_rows($query);
                        ?>
                    </div>
                    <a href="pengaduan.php"><p class="card-text text-black">Lihat Detail</p></a>
                </div>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>