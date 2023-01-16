

<!-- Tabel Laporan Pakan -->
<table class="table table-warning">
    <thead>
        <tr align="center">
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Kolam</th>
            <th scope="col">Jenis Pakan</th>
            <th scope="col">Berat Rata-Rata</th>
            <th scope="col">Jumlah Pakan</th>
            <th scope="col">Pakan 1 Kali</th>
            <th scope="col">Pakan 1 Hari</th>
            <th scope="col">Pakan 1 Minggu</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../database/koneksi.php';
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM laporan");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['kolam']; ?></td>
                <td><?php echo $data['jenis_pakan']; ?></td>
                <td><?php echo $data['rata_rata']; ?></td>
                <td><?php echo $data['jumlah']; ?></td>
                <td><?php echo $data['pakan1x']; ?></td>
                <td><?php echo $data['pakan1h']; ?></td>
                <td><?php echo $data['pakan1m']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>