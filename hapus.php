<?php
include("config.php");

if ( isset($_GET['id']) ) {
    $id = $_GET['id'];
    $sql = "SELECT * from mahasiswa where id = '$id' ";
    $query = mysqli_query($db, $sql);
    $nama_gambar = mysqli_fetch_array($query);
    $lokasi = $nama_gambar['foto'];
    $hapus_gambar = $lokasi;
    unlink($hapus_gambar); 
    
    $sql = "DELETE FROM mahasiswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ( $query ) {
        header('Location: list-siswa.php?status=sukses');
    } else {
        die("gagal menghapus...");
    }
}
else {
    die("akses dilarang...");
}
?>