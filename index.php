<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Bumi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
</head>
<style>
    body {
        content: "";
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('img/school.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>
    <div class="container index position-absolute top-50 start-50 translate-middle">
        <header>
            <h3>Selamat datang di</h3>
            <h1>Universitas Bumi</h1>

        </header>

        <nav>
            <h4>Menu</h4>
            <br>
            <a href="form-daftar.php" class="btn btn-primary">Daftar Baru</a> 
            <a href="list-siswa.php" class="btn btn-primary">Pendaftar</a>
            <?php if (isset($_GET['status'])) : ?>
                <p>
                    <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "<div class='alert alert-success'>Pendaftaran siswa baru berhasil!</div>";
                    } else {
                        echo "<div class='alert alert-danger'>Pendaftaran gagal!</div>";
                    }
                    ?>
                </p>
            <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>