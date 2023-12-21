<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  die();
}
?>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="view.css">
</head>

<style>
body {
    font-family: "Segoe UI", sans-serif;
    background-color: #f2f2f2;
}

table {
    margin: auto;
    border-collapse: collapse;
    border-spacing: 0;
    width: 80%;
    max-width: 600px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    background-color: #ffffff;
    color: black;
}

table td,
th {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}

table thead {
    background-color: #f9f9f9;
    color: #333;
}

tr:hover {
    background-color: #f5f5f5;
}

a {
    color: rgb(0, 0, 0);
    text-decoration: none;
}

button {
    margin-top: 10px;
    background-color: #3498db;
    color: white;
    padding: 10px 18px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #2980b9;
}

#hapus {
    color: rgb(255, 0, 0);
    margin: 2px 5px;
    padding: 2px 4px;
    border-radius: 4px;
}

#hapus:hover {
    background-color: rgb(255, 0, 0);
    color: white;
}

#edit {
    color: rgb(0, 255, 55);
    margin: 2px 5px;
    padding: 2px 4px;
    border-radius: 4px;
}

#edit:hover {
    background-color: rgb(0, 255, 13);
    color: white;
}
</style>

<body>
    <?php
        //koneksi database dan query untuk menampilkan data
        include "koneksi.php";
        $query = "SELECT * FROM nilai";
        $result = mysqli_query($koneksi, $query);
        ?>

    <table border="1">
        <tr>
            <th>id</th>
            <th>barang</th>
            <th>jumlah</th>
            <th>berat</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['barang'] ?></td>
            <td><?= $row['jumlah'] ?></td>
            <td><?= $row['berat'] ?></td>
            <td>
                <a href="javascript:;" onclick="deleteConfirm(<?= $row['id'] ?>)" id="hapus">Hapus</a> |
                <a href="edit.php?id=<?= $row['id'] ?>" id="edit">Edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <div">
        <br><button onclick="window.location.href='index.php#profile'">Kembali</button>
        </div>

        <script>
        function deleteConfirm(id) {
            var confirmation = confirm("Apakah Anda yakin ingin menghapus data ini?");
            if (confirmation) {
                window.location.href = "hapus.php?id=" + id;
            }
        }
        </script>
</body>

</html>