<?php
// Periksa apakah ada file yang diunggah
if (isset($_FILES['lampiran'])) {
    $file = $_FILES['lampiran'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Informasi file
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    // Periksa apakah temailak ada error saat mengunggah file
    if ($fileError === 0) {
        // Tentukan direktori tujuan untuk menyimpan file yang diunggah
        $uploadDir = 'uploadgambar/';
        $filePath = $uploadDir . $fileName;

        // Pindahkan file yang diunggah ke direktori tujuan
        move_uploaded_file($fileTmpName, $filePath);

        // Tampilkan informasi file yang diunggah
        
        
        echo "File berhasil diunggah!<br>";
        echo "<br>";
        echo "nama pengunggah : $nama <br>";
        echo "email pegnunggah : $email <br>";
        echo "pesan : $pesan <br><br>"; 
        echo "Nama file: $fileName<br>";
        echo "Ukuran file: $fileSize bytes<br>";
        echo "Lokasi file: $filePath";
        echo "<br><br>";
        echo '<a href="' . $uploadDir . '">Lihat File</a>';
    } else {
        echo "Terjadi kesalahan saat mengunggah file.";
    }
    $file = fopen("data.txt", "a");
        // Tulis data ke file
        fwrite($file, "Nama: " . $nama . "\n");
        fwrite($file, "Email: " . $email . "\n");
        fwrite($file, "Pesan: " . $pesan . "\n\n");
}
?>