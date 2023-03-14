<h2 style="text-align: center;">LAPORAN LAYANAN PENGADUAN MASYARAKAT</h2>
<table border="2" style="width:100%; height:10%;">

<tr style="text-align: center;">
    <td>No.</td>
    <td>NIK Pelapor</td>
    <td>Nama Pelapor</td>
    <td>Nama Petugas</td>
    <td>Tanggal Masuk</td>
    <td>Tanggal Ditanggapi</td>
    <td>Status</td>
</tr>
    <?php
    include '../koneksi.php';
    $no=1;
    $query=mysqli_query($koneksi, "SELECT * FROM pengaduan INNER JOIN masyarakat ON pengaduan.nik=masyarakat.nik INNER JOIN tanggapan ON
    tanggapan.id_pengaduan=pengaduan.id_pengaduan INNER JOIN petugas ON tanggapan.id_petugas=petugas.id_petugas ORDER BY tgl_pengaduan DESC");
    while ($data = mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?= $no++;?></td>
        <td><?= $data['nik']; ?></td>
        <td><?= $data['nama']; ?></td>
        <td><?= $data['nama_petugas']; ?></td>
        <td><?= $data['tgl_pengaduan']; ?></td>
        <td><?= $data['tgl_tanggapan']; ?></td>
        <td><?= $data['status']; ?></td>
    </tr>
    <?php } ?>

</table>

<script type="text/javascript">
    window.print();
</script>