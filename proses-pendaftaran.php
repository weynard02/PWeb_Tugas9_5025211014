<?php
include("config.php");

if(isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $nrp = $_POST['nrp'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $gambar = $_FILES['gambar']['name'];

    $sql = "INSERT INTO mahasiswa (nama, nrp, jurusan, alamat, foto) VALUE ('$nama', '$nrp', '$jurusan', '$alamat', 'img/$gambar')";
    $query = mysqli_query($db, $sql);
    move_uploaded_file($_FILES['gambar']['tmp_name'],'img/'.$gambar);
    

    if ($query) {

        header('Location: index.php?status=sukses');
    }
    else {

        header('location: index.php?status=gagal');
    }
}
else {
    die("Akses dilarang....");
}
?>