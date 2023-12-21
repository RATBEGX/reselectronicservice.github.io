<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
if (isset($_POST['barang'], $_POST['id'], $_POST['jumlah'], $_POST['berat'])) {
    $barangnya = $_POST['barang'];
    $id = $_POST['id'];
    $jumlah = $_POST['jumlah'];
    $berat = $_POST['berat'];

    // cek apakah semua data sudah diisi
    if (empty($barangnya) || empty($id) || empty($jumlah) || empty($berat)) {
        echo "<br><font color='red'>Silakan lengkapi form data terlebih dahulu!</font><br>";
        echo "<button onclick='window.history.back()'>Kembali</button>";
    } else {
        $barang = mysqli_real_escape_string($koneksi, $barangnya);
        // cek apakah data sudah ada di database
        $result = mysqli_query($koneksi, "SELECT * FROM nilai WHERE id='$id'");
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Data barang dengan id $id sudah ada di database. Silakan input id lain.')</script>";
            echo "<button onclick='window.history.back()'>Kembali</button>";
        } else {
            // menginput data ke database
            mysqli_query($koneksi, "INSERT INTO nilai (id, barang, jumlah, berat) VALUES ('$id', '$barang', '$jumlah', '$berat')");
            echo "<script>alert('Data berhasil ditambahkan.'); window.location.href = 'index.php#profile';</script>";
        }
    }
} else {
    echo "<font color='red'>Silakan lengkapi form data terlebih dahulu!</font><br>";
    echo "<button onclick='window.history.back()'>Kembali</button>";
}