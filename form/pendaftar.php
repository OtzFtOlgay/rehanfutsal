<?php
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle>Form pendaftaran</tittle>
</head>

<body>
    <h1>Silahkan isi bidang di bawah ini</h1>
    <form action="input_data_pendaftar.php" method="post">

        <label for="">Id pendaftar</label><br>
        <input type="text" name="id_pendaftar" id="" value="<?= rand(0000, 9999) ?>" readonly>
        <br><br>
        <label for="">Nama Pendaftar</label><br>
        <input type="text" name="nama_pendaftar" id="">
        <br><br>
        <label for="">Nomor hp</label><br>
        <input type="tel" name="nomor_hp" id="">
        <br><br>
        <label for="">Alamat</label><br>
        <textarea name="alamat" id="" cols="50" rows="10"></textarea>
        <br><br>
        <label for="">Jenis Lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">lapangan A (Matras)</option>
            <option value="b">lapangan B (Sintetis)</option>
            <option value="c">lapangan C (Vinyl)</option>
        </select>
        <br><br>
        <label for="">Jam Mulai</label><br>
        <input type="time" name="jam_mulai" id="">
        <br><br>
        <label for="">Jam Selesai</label><br>
        <input type="time" name="jam_selesai" id="">
        <br><br>
        <label for="">Jenis Pembayaran</label><br>
        <select name="jenis_pembayaran" id="">
            <option value="cash">cash</option>
            <option value="transfer">transfer</option>
        </select>

        <button type="submit">Kirim Data</button>

    </form>
</body>

</html>