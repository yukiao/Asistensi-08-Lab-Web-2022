<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location : index.php');
    exit;
}

require 'functions.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {

            // Set session
            $_SESSION['login'] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- CSS file -->
    <link rel="stylesheet" href="styles/style2.css">
</head>

<body>

    <!-- Background -->
    <div class="area" >
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div >
    <!-- End Background -->

    <div class="cont">
        <h1 class="text-center mb-4">Login</h1>

        <!-- alert salah username/password -->
        <?php
        if (isset($error)) : ?>

            <p style="color: #f56969;">username / password salah</p>

        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="form-group mt-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button class="btn w-100 mt-4" type="submit" name="login">Login</button>

            <div class="confirm">
                <p class="mt-3 text-center">Belum punya akun? <a href="registrasi.php">Registrasi</a></p>
            </div>
        </form>
    </div>

</body>

</html>