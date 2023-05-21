<?php
include("config.php");

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $gambar = $_FILES['gambar']['name'];
    $nama = $_POST['nama'];
    $nrp = $_POST['nrp'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    if (empty($gambar)) {
        $sql = "UPDATE mahasiswa SET nama='$nama', nrp='$nrp', jurusan='$jurusan', alamat='$alamat'  WHERE id=$id";
        $query = mysqli_query($db, $sql);

    }
    else {
        $sql = "SELECT * from mahasiswa where id = '$id' ";
        $query = mysqli_query($db, $sql);
        $nama_gambar = mysqli_fetch_array($query);
        $lokasi = $nama_gambar['foto'];
        $hapus_gambar = $lokasi;
        unlink($hapus_gambar); 
        move_uploaded_file($_FILES['gambar']['tmp_name'],'img/'.$gambar);
        $sql = "UPDATE mahasiswa SET nama='$nama', nrp='$nrp', jurusan='$jurusan', alamat='$alamat', foto='img/$gambar'  WHERE id=$id";
        $query = mysqli_query($db, $sql);


    }

    if ($query) {
        header('Location: list-siswa.php?status=sukses');
    }
    else {
        die('Gagal menyimpan perubahan...');
    }
}
else {
    die("Akses dilarang...");
}
?>