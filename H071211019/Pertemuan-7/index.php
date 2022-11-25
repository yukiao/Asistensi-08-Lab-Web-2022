<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
}

require 'functions.php';

// Query
$dataMhs = query("SELECT * FROM mahasiswa");
?>

<!-- Tampilan Web -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Admin</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- CSS file -->
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>   
    <div class="container">
        <h1 class="mt-5 mb-5 text-center text-light">Daftar Mahasiswa</h1>

        <div class="btn-con mb-4 mt-3">
            <a href="tambah.php" class="btn btn1 me-2"><i class="bi bi-plus-circle me-2"></i>Tambah data</a>
            <a href="logout.php" class="btn btn2"><i class="bi bi-box-arrow-left me-2"></i>Logout</a>
        </div>

        <table class="table mt-2 table-light">
            <tr class="table-secondary">
                <th scope="col">No.</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Fakultas</th>
                <th scope="col"></th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($dataMhs as $row) : ?>

                <tr>
                    <td scope="col"><?= $i; ?></td>
                    <td scope="col"><?= $row['nim']; ?></td>
                    <td scope="col"><?= $row['nama']; ?></td>
                    <td scope="col"><?= $row['alamat']; ?></td>
                    <td scope="col"><?= $row['fakultas']; ?></td>
                    <td scope="col" class="d-flex justify-content-center">
                        <a href="ubah.php?id=<?= $row['id']; ?>"><button type="button" class="btn btn-warning me-1"><i class="bi bi-pencil-fill text-dark"></i></button></a>
                        <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data?')"><button type="button" class="btn btn-danger ms-1"><i class="bi bi-trash3-fill"></i></button></a>
                    </td>
                </tr>

                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>
</body>

</html>