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

    <div class="inner-header" style="padding-top:250px;">
        <div class="row justify-content-center">
            <div class="card shadow-lg mb-5">
                <div class="card-body">

                <?php
                if(isset($_GET['nik'])){
                    include '../koneksi.php';
                    $nomor=1;
                    $nik=$_GET['nik'];
                    $query=mysqli_query($koneksi, "SELECT pengaduan.tgl_pengaduan, pengaduan.isi_laporan, pengaduan.status, tanggapan.tanggapan
                    FROM tanggapan LEFT JOIN pengaduan ON pengaduan.id_pengaduan=tanggapan.id_pengaduan WHERE pengaduan.nik=$nik");
                    $cek = mysqli_num_rows($query);
                ?>
                <?php if($cek || $cek > 0) { ?>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No .</th>
                                <th>Tanggal</th>
                                <th>Laporan</th>
                                <th>Status</th>
                                <th>Tanggapan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($data = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td>".$nomor."</td>";
                                echo "<td>".$data['tgl_pengaduan']."</td>";
                                echo "<td>".$data['isi_laporan']."</td>";
                                echo "<td>".$data['status']."</td>";
                                echo "<td>".$data['tanggapan']."</td>";
                                echo "</tr>";
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>

                    <?php } else { ?>
                        <p>Pengaduan Belum Ditanggapi!!!</p>
                        <?php } ?>
                        <a href="cek-pengaduan.php" class="btn btn-succes">Kembali</a>
                        <?php } else { ?>
                            <form action="" method="GET">
                                <div class="form-group">
                                    <label for="" style="float:left;">NIK :</label>
                                    <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK Anda!" required><br>
                                    <button class="btn btn-succes" type="submit">Cek</button>
                                </div>
                                
                            </form>
                            <?php } ?>

                </div>
            </div>
        </div>
    </div>

    </div>

</body>
</html>