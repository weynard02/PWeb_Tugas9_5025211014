<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Bumi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        * {
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <header>
            <h3>Daftar Mahasiswa Baru</h3>
        </header>

        <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">

            <fieldset>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama: </label>
                    <input type="text" class="form-control" name="nama" placeholder="nama lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label">NRP: </label>
                    <input type="text" class="form-control" name="nrp" placeholder="502######" required>
                </div>
                <div class="mb-3">
                    <label for="Jurusan">Jurusan:</label>
                    <select name="jurusan" class="form-control" id="jurusan" name="jurusan" required>
                        <option value=""></option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="Alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="Gambar">Foto</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" required>
                </div>
            
                <div class="mb-3">
                    <input class="btn btn-success" type="submit" value="Daftar" name="daftar" />
                </div>
                
            </fieldset>
        </form>
    </div>
    <div class="position-absolute bottom-0 start-0">
        <a href="./" class="btn btn-secondary">
            << Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>