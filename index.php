<?php

include "connection.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header('location: index.php');
}

if (isset($_POST['username'])); {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";

    $result = mysqli_query($connection, $query);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['hak_akses'] = $row['hak_akses'];
        header('location: admin/welcome.php');
    } else {
        echo "<script>alert('Username atau Password salah, Silahkan di ulangi')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Form</title>
</head>
<div>
    <h4 style="color: red;"><?= $_SESSION['error'] ?></h4>
</div>

<form action="" method="post">
    <p style="font-size: 2rem; font-weight: 800;">Login</p>

    <input type="text" placeholder="Username" name="username" required>
    <br><br>
    <input type="password" placeholder="Password" name="password" required>
    <br><br>
    <button name="submit" class="btn">Login</button>

    <p>Aanda belum punya akun? <a href="#">Register</a></p>
</form>

<body>

</html>