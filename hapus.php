<?php
// koneksi ke database
include 'koneksi.php';

// cek apakah id sudah diterima dari URL atau belum
if(isset($_GET['nim'])) {
    // ambil id dari URL
    $id = $_GET['nim'];

    // menghapus data dari database
    mysqli_query($koneksi, "DELETE FROM nilai WHERE nim=$id");

    // set pesan peringatan
    $message = "Data berhasil dihapus";

    // redirect ke halaman view.php
    echo "<script>alert('$message'); window.location.href='view.php?nim=$id';</script>";
}
?>