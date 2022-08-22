<?php
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle>Data Lapangan</tittle>
</head>

<body>
    <a href="index.php">Back to home</a>
    <h1>Silahkan isi data lapangan</h1>
    <form action="" method="post">

        <label for="">Id lapangan</label><br>
        <input type="text" name="id_pendaftar" id="" value="<?= rand(0000, 9999) ?>" readonly>
        <br><br>
        <label for="">Jenis Lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Lapangan A (Matras)</option>
            <option value="b">Lapangan B (Sintetis)</option>
            <option value="c">Lapangan C (Vinyl)</option>
        </select>
        <br><br>
        <label for="">Type lapangan</label><br>
        <select name="type_lapangan" id="">
            <option value="matras">Matras</option>
            <option value="sintetis">Sintetis</option>
            <option value="vinyl">Vinyl</option>
        </select>
        <br><br>

        <button type="submit">Kirim data</button>

    </form>
</body>

</html>