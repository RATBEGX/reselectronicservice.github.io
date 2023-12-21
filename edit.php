<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  die();
}
?>
<?php
// koneksi database dan query untuk menampilkan data
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // query untuk mendapatkan data mahasiswa berdasarkan id
    $query = "SELECT * FROM nilai WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        echo "Data tidak ditemukan";
        exit();
    }
} else {
    echo "id tidak ditemukan";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ambil nilai dari form edit
    $jumlah = $_POST['jumlah'];
    $berat = $_POST['berat'];
    $total = $jumlah + $berat;
    $rata = $total / 2;
    $ket = "";
    if ($rata > 100 || $rata < 0) {
        $ket = "NaN";
    } elseif ($rata >= 81 && $rata <= 100) {
        $ket = "SEMPURNA";
    } elseif ($rata >= 76 && $rata <= 80) {
        $ket = "SANGAT BAIK";
    } elseif ($rata >= 71 && $rata <= 75) {
        $ket = "BAIK";
    } elseif ($rata >= 61 && $rata <= 70) {
        $ket = "CUKUP BAIK";
    } elseif ($rata >= 56 && $rata <= 60) {
        $ket = "CUKUP";
    } elseif ($rata >= 40 && $rata <= 55) {
        $ket = "KURANG";
    } else {
        $ket = "SANGAT KURANG";
    }

    // query untuk update data
    $query = "UPDATE nilai SET jumlah='$jumlah', berat='$berat' WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>";
        echo "alert('Data berhasil diupdate.');";
        echo "window.location.href='view.php';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Gagal mengupdate data.');";
        echo "window.location.href='edit.php?id=$id';";
        echo "</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="edit.css">
</head>
<style>
body {
    font-family: "Segoe UI", sans-serif;
    background-color: #f2f2f2;
}

h2 {
    color: #444;
    text-align: center;
    margin-top: 30px;
}

table {
    margin: auto;
    width: 80%;
    max-width: 750px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    background-color: #fff;
    border-radius: 5px;

}

table tr:hover {
    background-color: #f5f5f5;
}

table td,
th {
    padding: 12px;
    border: none;
    border-bottom: 1px solid #e6e6e6;
}

table th {
    padding: 8px;
    background-color: #4CAF50;
    color: white;
    text-align: left;
}

input[type="text"],
input[type="number"] {
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 5px;
    margin-bottom: 10px;
    width: 100%;
}

input[type="submit"],
button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}

button {
    background-color: #e60000;
    margin-left: 10px;
}

button:hover {
    background-color: #b30000;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}

form {
    padding: 20px;
}
</style>

<body>
    <h2>Edit Data:</h2>
    <form method="post" action="">
        <table border="1">
            <tr>
                <td>id:</td>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <td>barang:</td>
                <td><input type="text" name="barang" value="<?php echo $data['barang']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nilai jumlah:</td>
                <td><input type="number" name="jumlah" value="<?php echo $data['jumlah']; ?>" min="0" max="100"
                        required></td>
            </tr>
            <tr>
                <td>Nilai berat:</td>
                <td><input type="number" name="berat" value="<?php echo $data['berat']; ?>" min="0" max="100" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                    <button type="button" onclick="backToView()">Batal</button>
                </td>
            </tr>
        </table>
    </form>
    <script>
    function backToView() {
        window.location.href = "view.php";
    }
    </script>
</body>

</html>