<?php

require 'connection.php';

$select = new User();

if (!empty($_SESSION["id"])) {
    $user = $select->selectUserById($_SESSION["id"]);
} else {
    //   header("Location: login.php");
}

$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "akademik";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$nim        = "";
$nama       = "";
$alamat     = "";
$fakultas   = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from mahasiswa where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from mahasiswa where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nim        = $r1['nim'];
    $nama       = $r1['nama'];
    $alamat     = $r1['alamat'];
    $fakultas   = $r1['fakultas'];

    if ($nim == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $fakultas   = $_POST['fakultas'];

    if ($nim && $nama && $alamat && $fakultas) {
        if ($op == 'edit') { //untuk update


            $result = mysqli_query($koneksi ,"SELECT * FROM mahasiswa WHERE nim ='$nim'");
            $num_rows = mysqli_num_rows($result);
            if ($num_rows) {
                
                $error = "'$nim' Sudah ada";

            }else if($q1) {
                $sql1 = "update mahasiswa set nim = '$nim',nama='$nama',alamat = '$alamat',fakultas='$fakultas' where id = '$id'";
                $q1 = mysqli_query($koneksi, $sql1);
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }

        } else { //untuk insert
            $result = mysqli_query($koneksi ,"SELECT * FROM mahasiswa WHERE nim ='$nim'");
            $num_rows = mysqli_num_rows($result);
            if ($num_rows) {
                
                $error = "'$nim' Sudah ada";
            } else {
                # code...
                $sql1   = "insert into mahasiswa(nim,nama,alamat,fakultas) values ('$nim','$nama','$alamat','$fakultas')";
                $q1     = mysqli_query($koneksi, $sql1);
                if ($q1) {
                    $sukses     = "Berhasil memasukkan data baru";
                } else {
                    $error      = "Gagal memasukkan data";
                }
            }


        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 20px
        }

        body {
            background-color: #FFFFF0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #B0C4DE; height : 40px;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" style="font-family: 'Calistoga', cursive; color: #191970;">WELCOME</a>
            <a style="color : #191970; text-decoration : none;" href="logout.php">Logout</a>
        </div>
    </nav>

    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card" style="background-color: #F0FFFF;">
            <div class="card-header text-black" style="background-color: #B0C4DE">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php"); //5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");
                }
                ?>

                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">

                            <select class="form-control" id="fakultas" name="fakultas">
                                <option value="">- Pilih Fakultas -</option>
                                <option value="Fakultas Matematika dan Ilmu Pengetahuan Alam" <?php if ($fakultas == "Fakultas Matematika dan Ilmu Pengetahuan Alam") echo "selected" ?>>Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
                                <option value="Fakultas Ilmu Sosial dan Ilmu Politik" <?php if ($fakultas == "Fakultas Ilmu Sosial dan Ilmu Politik") echo "selected" ?>>Fakultas Ilmu Sosial dan Ilmu Politik</option>
                                <option value="Fakultas Ilmu Budaya" <?php if ($fakultas == "Fakultas Ilmu Budaya") echo "selected" ?>>Fakultas Ilmu Budaya</option>
                                <option value="Fakultas Ekonomi dan Bisnis" <?php if ($fakultas == "Fakultas Ekonomi dan Bisnis") echo "selected" ?>>Fakultas Ekonomi dan Bisnis</option>
                                <option value="Fakultas Hukum" <?php if ($fakultas == "Fakultas Hukum") echo "selected" ?>>Fakultas Hukum</option>
                                <option value="Fakultas Farmasi" <?php if ($fakultas == "Fakultas Farmasi") echo "selected" ?>>Fakultas Farmasi</option>
                                <option value="Fakultas Kedokteran Gigi" <?php if ($fakultas == "Fakultas Kedokteran Gigi") echo "selected" ?>>Fakultas Kedokteran Gigi</option>
                                <option value="Fakultas Kehutanan" <?php if ($fakultas == "Fakultas Kehutanan") echo "selected" ?>>Fakultas Kehutanan</option>
                                <option value="Fakultas Peternakan" <?php if ($fakultas == "Fakultas Peternakan") echo "selected" ?>>Fakultas Peternakan</option>
                                <option value="Fakultas Teknik" <?php if ($fakultas == "Fakultas Teknik") echo "selected" ?>>Fakultas Teknik</option>
                                <option value="Fakultas Ilmu Kelautan dan Perikanan" <?php if ($fakultas == "Fakultas Ilmu Kelautan dan Perikanan") echo "selected" ?>>Fakultas Ilmu Kelautan dan Perikanan</option>
                                <option value="Fakultas Kesehatan Masyarakat" <?php if ($fakultas == "Fakultas Kesehatan Masyarakat") echo "selected" ?>>Fakultas Kesehatan Masyarakat</option>
                                <option value="Fakultas Kedokteran" <?php if ($fakultas == "Fakultas Kedokteran") echo "selected" ?>>Fakultas Kedokteran</option>
                                <option value="Fakultas Keperawatan" <?php if ($fakultas == "Fakultas Keperawatan") echo "selected" ?>>Fakultas Keperawatan</option>
                                <option value="Fakultas Pertanian" <?php if ($fakultas == "Fakultas Pertanian") echo "selected" ?>>Fakultas Pertanian</option>
                                <option value="Pascasarjana" <?php if ($fakultas == "Pascasarjana") echo "selected" ?>>Pascasarjana</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn text-white" style="background-color: #778899;" />
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-black" style="background-color: #B0C4DE">
                Data Mahasiswa
            </div>
            <div class="card-body" style="background-color: #F0FFFF;">
                <table class="table table-primary table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from mahasiswa order by id";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $nim        = $r2['nim'];
                            $nama       = $r2['nama'];
                            $alamat     = $r2['alamat'];
                            $fakultas   = $r2['fakultas'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $nim ?></td>
                                <td scope="row"><?php echo $nama ?></td>
                                <td scope="row"><?php echo $alamat ?></td>
                                <td scope="row"><?php echo $fakultas ?></td>
                                <td scope="row">
                                    <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button btn-sm" class="btn text-white" style="background-color: #778899;">Edit</button></a>
                                    <a href="index.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button btn-sm" class="btn" style="background-color: #FFFFF0;">Delete</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</body>

</html>