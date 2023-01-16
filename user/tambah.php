<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data - PT. Ikans Indonesia</title>
    
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
    
    <!-- Main Content -->
    <?php include 'nav.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br> <br>
                <h1 class="display-6" align="center">Tambah Data Pakan</h1>
                <hr>

                <!-- Tambah Data Laporan Pakan -->
                <form action="tambahdata.php" method="post">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" required>

                        <label for="kolam">Pilih Kolam</label>
                        <select class="form-control" name="kolam" id="kolam" required> 
                            <option value="Kolam 1">Kolam 1</option>
                            <option value="Kolam 2">Kolam 2</option>
                            <option value="Kolam 3">Kolam 3</option>
                            <option value="Kolam 4">Kolam 4</option>
                        </select>
                        
                        <label for="Jenis">Jenis Ikan</label>
                        <select class="form-control" name="jenis_ikan" id="jenis_ikan" required>
                            <option value="Ikan Lele">Ikan Lele</option>
                            <option value="Ikan Nila">Ikan Nila</option>
                            <option value="Ikan Mas">Ikan Gurame</option>
                        </select>

                        <label for="jenis_pakan">Jenis Pakan</label>
                        <select class="form-control" name="jenis_pakan" id="jenis" required>
                            <option value="Crumble">Crumble</option>
                            <option value="Pellet">Pellet</option>
                        </select>

                        <label for="berat">Berat Rata-Rata</label>
                        <input type="number" class="form-control" name="berat" id="berat" placeholder="Berat Rata-Rata" required>

                        <label for="jumlah">Jumlah Pakan</label>
                        <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Pakan" required>

                        <br> <br>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-warning">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>