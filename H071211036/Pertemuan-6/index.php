<?php

$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "administrasi";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Error: Database connection failed");
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
    $sql1       = "delete from data_mahasiswa where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Data successfully deleted ";
    }else{
        $error  = "Failed to delete the data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from data_mahasiswa where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nim        = $r1['nim'];
    $nama       = $r1['nama'];
    $alamat     = $r1['alamat'];
    $fakultas   = $r1['fakultas'];

    if ($nim == '') {
        $error = "No data found";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $fakultas   = $_POST['fakultas'];

    if ($nim && $nama && $alamat && $fakultas) {
        if ($op == 'edit') {
            $sql1       = "update data_mahasiswa set nim = '$nim',nama='$nama',alamat = '$alamat',fakultas='$fakultas' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data succesfully updated";
            } else {
                $error  = "Update data failed";
            }
        } else { 
            $sql1   = "insert into data_mahasiswa(nim,nama,alamat,fakultas) values ('$nim','$nama','$alamat','$fakultas')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Data added succesfully";
            } else {
                $error      = "Failed to input data";
            }
        }
    } else {
        $error = "Please complete all the data first";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <style>
        .mx-auto {
            width: 800px
        }
        .card {
            margin-top: 80px;
        }
        #box{
        background-color: #ffffff;
        margin: auto;
        padding: 20px;
        margin-top: 20px;
        justify-content: center;
        border-style: dashed;
        border-color: #9a9a9a;
        border-width: 1px;
        border-radius: 25px;
    }
    </style>
</head>

<body style="background-color: #efefef;">
    <div class="mx-auto">

<!-- INSERT DATA -->
        <div id="box" class="card">
            <div class="card-header" style="font-size: 30px; color: #7c8fa0; text-decoration: underline; font-family: 'DM Serif Display', serif;">
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
                    header("refresh:5;url=index.php");
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
                    <!-- NIM -->
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label" style="font-family: 'Sarabun', sans-serif; font-size: 16px; color: #65666a;">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim ?>">
                        </div>
                    </div>

                    <!-- NAMA -->
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label" style="font-family: 'Sarabun', sans-serif; font-size: 16px; color: #65666a;">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>

                    <!-- ALAMAT -->
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label" style="font-family: 'Sarabun', sans-serif; font-size: 16px; color: #65666a;">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                        </div>
                    </div>

                    <!-- FAKULTAS -->
                    <div class="mb-3 row">
                        <label for="fakultas" class="col-sm-2 col-form-label" style="font-family: 'Sarabun', sans-serif; font-size: 16px; color: #65666a;">Fakultas</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="fakultas" id="fakultas">
                            <option value="">––– Select a Faculty -––</option>
                            <option value="FEB" <?php if($fakultas == "FEB") echo "selected" ?>>Fakultas Ekonomi dan Bisnis</option>
                            <option value="FH" <?php if($fakultas == "FH") echo "selected" ?>>Fakultas Hukum</option>
                            <option value="FK" <?php if($fakultas == "FK") echo "selected" ?>>Fakultas Kedokteran</option>
                            <option value="FT" <?php if($fakultas == "FT") echo "selected" ?>>Fakultas Teknik</option>
                            <option value="FISIP" <?php if($fakultas == "FISIP") echo "selected" ?>>Fakultas Ilmu Sosial dan Ilmu Politik</option>
                            <option value="FIB" <?php if($fakultas == "FIB") echo "selected" ?>>Fakultas Ilmu Budaya</option>
                            <option value="FP" <?php if($fakultas == "FP") echo "selected" ?>>Fakultas Pertanian</option>
                            <option value="FMIPA" <?php if($fakultas == "FMIPA") echo "selected" ?>>Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
                            <option value="FAPET" <?php if($fakultas == "FPET") echo "selected" ?>>Fakultas Peternakan</option>
                            <option value="FKG" <?php if($fakultas == "FKG") echo "selected" ?>>Fakultas Kedokteran Gigi</option>
                            <option value="FKM" <?php if($fakultas == "FKM") echo "selected" ?>>Fakultas Kesehatan Masyarakat</option>
                            <option value="FIKP" <?php if($fakultas == "FIKP") echo "selected" ?>>Fakultas Ilmu Kelautan dan Perikanan</option>
                            <option value="FAHUT" <?php if($fakultas == "FAHUT") echo "selected" ?>>Fakultas Kehutanan</option>
                            <option value="FF" <?php if($fakultas == "FF") echo "selected" ?>>Fakultas Farmasi</option>
                            <option value="FIK" <?php if($fakultas == "FIK") echo "selected" ?>>Fakultas Keperawatan</option>
                            <option value="SPS" <?php if($fakultas == "SPS") echo "selected" ?>>Sekolah Pascasarjana</option>
                        </select>
                        </div>

                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Submit Data" class="btn btn-primary" style="background-color: #7c8fa0; border-color: #7c8fa0; font-family: 'Sarabun', sans-serif; font-size: 16px;"/>
                    </div>
                </form>
            </div>
        </div>

        <!-- MENAMPILKAN DATA YANG TELAH DIINPUT -->
        <div id="box" class="card">
            <div class="card-header" style="font-size: 30px; color: #7c8fa0; text-decoration: underline; font-family: 'DM Serif Display', serif;">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from data_mahasiswa order by id asc";
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
                                    <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning" style="background-color: #dddfa3; border-color: #dddfa3;">Edit</button></a>
                                    <a href="index.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Are you sure you want to delete this data?')"><button type="button" class="btn btn-danger" style="background-color: #914249; border-color: #914249;">Delete</button></a>            
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
    <br>
</body>

</html>
