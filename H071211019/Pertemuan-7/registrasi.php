<?php
require 'functions.php';

if (isset($_POST['register'])) {

    if (registrasi($_POST) > 0) {
        echo "
            <script>
                alert('User baru berhasil ditambahkan');
                document.location.href = 'login.php';
            </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

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
        <h1 class="text-center mb-4">Registrasi</h1>

        <form action="" method="POST">
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            
            <div class="form-group mt-1">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <div class="form-group mt-1">
                <label for="password2" class="form-label">Konfirmasi password</label>
                <input type="password" class="form-control" id="password2" name="password2">
            </div>

            <button class="btn btn-primary w-100 mt-4" type="submit" name="register">Register Now</button>

            <div class="confirm">
                <p class="mt-3 text-center">Sudah punya akun? <a href="login.php">Log-in</a></p>
            </div>
        </form>
    </div>
</body>

</html>