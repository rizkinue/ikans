<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Laporan - PT. Ikans Indonesia</title>

    <!-- Boostrap 3.1.0 Alpha 1 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
    <?php

    // Edit Data Laporan Pakan

    include('koneksi.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = mysqli_query($koneksi, "SELECT * FROM laporan WHERE id='$id'");
        $data = mysqli_fetch_array($sql);
    }

    if (isset($_POST['submit'])) {
        $tanggal = $_POST['tanggal'];
        $kolam = $_POST['kolam'];
        $jenis_pakan = $_POST['jenis_pakan'];
        $rata_rata = $_POST['rata_rata'];
        $jumlah = $_POST['jumlah'];
        $pakan1x = $_POST['pakan1x'];
        $pakan1h = $_POST['pakan1h'];
        $pakan1m = $_POST['pakan1m'];

        $sql = mysqli_query($koneksi, "UPDATE laporan SET tanggal='$tanggal', kolam='$kolam', jenis_pakan='$jenis_pakan', rata_rata='$rata_rata', jumlah='$jumlah', pakan1x='$pakan1x', pakan1h='$pakan1h', pakan1m='$pakan1m' WHERE id='$id'");
        if ($sql) {
            header('location: tabel.php');
        } else {
            echo 'Gagal';
        }

    }

    include 'nav.php';

    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br> <br>
                <h1 class="display-6" align="center">Edit Data Laporan</h1>
                <hr>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>">

                        <label for="kolam">Kolam</label>
                        <input type="text" name="kolam" id="kolam" class="form-control" value="<?php echo $data['kolam']; ?>">

                        <label for="jenis">Jenis Ikan</label>
                        <input type="text" name="jenis" id="jenis" class="form-control" value="<?php echo $data['jenis']; ?>">

                        <label for="jenis_pakan">Jenis Pakan</label>
                        <input type="text" name="jenis_pakan" id="jenis_pakan" class="form-control" value="<?php echo $data['jenis_pakan']; ?>">

                        <label for="rata_rata">Rata-Rata</label>
                        <input type="text" name="rata_rata" id="rata_rata" class="form-control" value="<?php echo $data['rata_rata']; ?>">

                        <label for="jumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" class="form-control" value="<?php echo $data['jumlah']; ?>">

                        <label for="pakan1x">Pakan 1x</label>
                        <input type="text" name="pakan1x" id="pakan1x" class="form-control" value="<?php echo $data['pakan1x']; ?>">

                        <label for="pakan1h">Pakan 1h</label>
                        <input type="text" name="pakan1h" id="pakan1h" class="form-control" value="<?php echo $data['pakan1h']; ?>">

                        <label for="pakan1m">Pakan 1m</label>
                        <input type="text" name="pakan1m" id="pakan1m" class="form-control" value="<?php echo $data['pakan1m']; ?>">

                        <input type="submit" name="submit" value="Simpan" class="btn btn-warning">

                    </div>
                </form>
    </div>
</body>
</html>