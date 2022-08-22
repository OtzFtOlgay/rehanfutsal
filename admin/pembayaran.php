<?php
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle>Form Pembayaran</tittle>
</head>

<body>
    <a href="index.php">Back to home</a>
    <h1>Silahkan isi bidang di bawah ini</h1>
    <form action="" method="post">

        <label for="">Id pembayaran</label><br>
        <input type="text" name="id_pendaftar" id="" value="<?= rand(0000, 9999) ?>" readonly>
        <br><br>
        <label for="">Id pendaftar</label><br>
        <input type="text" name="id_pendaftar" id="">
        <br><br>
        <label for="">Jenis Lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Lapangan A (Matras)</option>
            <option value="b">Lapangan B (Sintetis)</option>
            <option value="c">Lapangan C (Vinyl)</option>
        </select>
        <br><br>
        <label for="">Jenis Pembayaran</label><br>
        <select name="jenis_pembayaran" id="">
            <option value="cash">cash</option>
            <option value="transfer">transfer</option>
        </select>
        <br><br>
        <label for="">Nominal Pembayaran</label><br>
        <input type="text" name="nominal_pembayaran" id="">
        <br><br>
        <label for="">Status Pembayaran</label><br>
        <select name="status_pembayaran" id="">
            <option>...</option>
            <option value="Lunas">Lunas</option>
        </select>
    </form>
</body>

</html>