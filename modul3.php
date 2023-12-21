<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="tugasprak.css">
</head>
<body>
    <div class="container">
        <h1>Hasil Pembayaran</h1>
        <h3>Terima kasih telah melakukan pembelian!</h3>
        <p>Berikut adalah rincian pembelian:</p>

        <?php 
            $harga = $_POST['harga'] * $_POST['jumlah'];
            if ($_POST['jenis'] == 'member') {
                $diskon = $harga * 0.1;
                $total_harga = $harga - $diskon;
            } else {
                $diskon = 0;
                $total_harga = $harga;
            }
        ?>

        <table border="1">
            <tr>
                <td>Nama Pembeli:</td>
                <td><?php echo $_POST['nama']; ?></td>
            </tr>
            <tr>
                <td>Alamat:</td>
                <td><?php echo $_POST['alamat']; ?></td>
            </tr>
            <tr>
                <td>Nama Produk:</td>
                <td><?php echo $_POST['produk']; ?></td>
            </tr>
            <tr>
                <td>Harga Produk:</td>
                <td>Rp <?php echo number_format($_POST['harga'], 2); ?></td>
            </tr>
            <tr>
                <td>Jumlah Produk:</td>
                <td><?php echo $_POST['jumlah']; ?></td>
            </tr>
            <tr>
                <td>Jenis Pelanggan:</td>
                <td><?php echo $_POST['jenis']; ?></td>
            </tr>
            <tr>
                <td>Diskon:</td>
                <td>Rp <?php echo number_format($diskon, 2); ?></td>
            </tr>
            <tr>
                <td>Total Harga:</td>
                <td>Rp <?php echo number_format($total_harga, 2); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
