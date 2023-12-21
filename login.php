<?php
session_start();
$error_msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        // pesan error jika username atau password kosong
        echo "<script>";
        echo "alert('username atau password tidak boleh kosong');";
        echo "</script>";
    } else {
        // Konfigurasi koneksi ke database
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $dbname = "formloginservis";

        // Membuat koneksi ke database
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Cek koneksi
        if ($conn->connect_error) {
            die("Koneksi ke database gagal: " . $conn->connect_error);
        }

        // Escape karakter khusus pada username dan password
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);

        // Query untuk mengambil data login dari database
        $sql = "SELECT * FROM loginuspas WHERE username = '$username'
        AND password = '$password' UNION SELECT * FROM admin WHERE username = '$username'
        AND password = '$password'";
        $result = $conn->query($sql);

        // Memeriksa hasil query
        if ($result->num_rows > 0) {
            // Login berhasil
            $_SESSION['username'] = $username;
            header('Location: index.php');
            die();
        } else {
            // Login gagal
            $error_msg = "Username atau Password tidak sesuai";
        }

        // Menutup koneksi ke database
        $conn->close();
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>
@keyframes moveBorder {
    0% {
        border-color: red;
        transform: translateX(0) translateY(0);
    }

    25% {
        border-color: green;
        transform: translateX(10px) translateY(0);
    }

    50% {
        border-color: blue;
        transform: translateX(10px) translateY(10px);
    }

    75% {
        border-color: green;
        transform: translateX(0) translateY(10px);
    }

    100% {
        border-color: red;
        transform: translateX(0) translateY(0);
    }
}

input[type="submit"] {
    border: 2px solid red;
    padding: 10px;
    animation: moveBorder 4s linear infinite;
}

#daftar {
    text-decoration: none;
    background-color: black;
    padding: 10px;
    border-radius: 5px;
    color: white;
    transition: 0.4s;
}

#daftar:hover {
    color: black;
    background-color: darkgray;
    transition: 0.4s;
}
</style>

<body>
    <h2>Login</h2>

    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    <br><br>
    <div align=center>
        <?php
    if (!empty($error_msg)) {
        echo "<p style='color:red;'>$error_msg</p>";
    }
?>
    </div>
    <br>
    <div align=center>
        <p>Belum punya akun? <a href="register.html" id="daftar">Daftar disini</a></p>
    </div>
</body>

</html>