<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "rehanfutsal";

$connection = mysqli_connect($host, $user, $pass, $database);
if (!$connection) {
    echo ("gagal");
}
