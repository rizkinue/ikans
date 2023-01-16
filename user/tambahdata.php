<? 

include '../database/koneksi.php';

if (isset($_POST['simpan'])) {
    $tanggal = $_POST['tanggal'];
    $kolam = $_POST['kolam'];
    $jenis = $_POST['jenis_ikan'];
    $jenis_pakan = $_POST['jenis_pakan'];
    $rata_rata = $_POST['rata_rata'];
    $jumlah = $_POST['jumlah'];

    //penghitungan
    $pakan1x = ((3 * $rata_rata) / 100) * $jumlah;
    $pakan1h = $pakan1x*3;
    $pakan1m = $pakan1h*7;

    $sql = mysqli_query($koneksi, "INSERT INTO laporan VALUES ('', '$tanggal', '$kolam', '$jenis', '$jenis_pakan', '$rata_rata', '$jumlah', '$pakan1x', '$pakan1h', '$pakan1m')");

    if ($sql) {
        echo "<script>alert('Data Berhasil Disimpan'); document.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan'); document.location.href='index.php';</script>";
    }
}

?>