<?php
// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formloginservis";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mendapatkan data dari form daftar
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mengecek apakah data sudah ada dalam database
$checkQuery = "SELECT * FROM loginuspas WHERE username = '$username'";

$result = $conn->query($checkQuery);

if ($result->num_rows > 0) {
    echo "Data sudah ada dalam database!"; // Tampilkan peringatan jika data sudah ada
    echo "<br>";
    echo '<a href="register.html">Klik disini untuk daftar</a>'; 
} else {
    // Query untuk menambahkan user baru ke database
    $insertQuery = "INSERT INTO loginuspas (username, password) VALUES ('$username', '$password')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "User baru berhasil didaftarkan!";
        echo "<br>";
        echo '<a href="login.php">Klik disini untuk login</a>'; // Tambahkan tombol yang mengarah ke login.php
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

// Menutup koneksi ke database
$conn->close();
?>