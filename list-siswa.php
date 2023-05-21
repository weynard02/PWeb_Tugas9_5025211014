<?php include("config.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Bumi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <br><br><br>
            <h2>Para Mahasiswa</h2>

        <nav>
            <a href="form-daftar.php" class="btn btn-info">[+] Tambah Baru</a>
        </nav>
        <br>
        <table class="table table-success table-striped table-hover table-bordered border-white">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM mahasiswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['nrp'] . "</td>";
                    echo "<td>" . $siswa['jurusan'] . "</td>";
                    echo "<td>" . $siswa['alamat'] . "</td>";
                    echo "<td> <img src='" . $siswa['foto'] . "' height=50></td>";

                    echo "<td>";
                    echo "<a href='form-edit.php?id=" . $siswa['id'] . "' class='btn btn-primary'>Edit</a> | ";
                    echo "<a href='hapus.php?id=" . $siswa['id'] . "' class='btn btn-danger'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <!-- <p class="total">Total: <?php echo mysqli_num_rows($query) ?></p> -->
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "<div class='alert alert-success'>Perubahan mahasiswa baru berhasil!</div>";
                } else {
                    echo "<div class='alert alert-danger'>Perubahan gagal!</div>";
                }
                ?>
            </p>
        <?php endif; ?>
    </div>
    <a href="./" class="btn btn-secondary">
        << Back</a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>