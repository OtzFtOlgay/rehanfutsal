<?php
include "connection.php";

$id_lapangan = $_POST['id_lapangan'];
$jenis_lapangan = $POST['jenis_lapangan'];
$type_lapangan = $POST['type_lapangan'];

$insert = mysqli_query($connection, "INSERT INTO data_lapangan SET id_lapangan='$id_lapangan', jenis_lapangan='$jenis_lapangan', type_lapangan='$type_lapangan'");

if ($insert == true) {
    header('location: index.php');
} else {
    echo "<script>alert('gagal input data lapangan)</script>";
}
