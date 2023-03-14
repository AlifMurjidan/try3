<?php
session_start();
require '../koneksi.php';
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
            <h4 class="display-5 mb-4">UBAH STATUS</h4>
            <hr class="height: 10px;">
            
                <div class="col-md-12">
                    <div class="card shadow-lg mb-5">
                        <div class="card-body">

                        <?php
                        if(isset($_GET['id_pengaduan'])){
                            $nomor=1;
                            $id_pengaduan=$_GET['id_pengaduan'];
                            $query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan=$id_pengaduan");
                            $petugas=$_SESSION["username"];
                            $data = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$petugas'");
                            $w = mysqli_fetch_array($data);
                        ?>

                        <?php
                        while($konten = mysqli_fetch_array($query)){
                        ?>

                            <form action="proses-ubah-status.php" method="POST">
                                <input type="hidden" name="id_pengaduan" value="<?= $konten['id_pengaduan']; ?>">
                                <input type="hidden" name="id_petugas" value="<?= $w['id_petugas']; ?>">
                                <div class="form-group">
                                <label for="">Tanggal Pengaduan</label>
                                <input readonly type="text" class="form-control bg-white" name="tgl_pengaduan" value="<?= $konten['tgl_pengaduan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input readonly type="text" class="form-control bg-white" name="nik" value="<?= $konten['nik'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Isi Pengaduan</label>
                                <input readonly type="text" class="form-control bg-white" name="isi_laporan" value="<?= $konten['isi_laporan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <?php if ($konten['status'] == 0 ) {?>
                                        <option selected value="0">Belum Dibaca</option>
                                        <option value="proses">Proses</option>
                                        <option value="selesai">Selesai</option>
                                    <?php } else if ($konten['status'] == "proses") { ?>
                                        <option value="0">Belum Dibaca</option>
                                        <option selected value="proses">Proses</option>
                                        <option value="selesai">Selesai</option>
                                    <?php  } else { ?>
                                        <option value="0">Belum Dibaca</option>
                                        <option value="proses">Proses</option>
                                        <option selected value="selesai">Selesai</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button class="btn btn-info mt-5 float-right" type="submit" name="submit">Ubah</button>
                        </form>
                        <?php  }} ?>

                        </div>
                    </div>
                </div>

        </div>

    </div>
    
</body>
</html>