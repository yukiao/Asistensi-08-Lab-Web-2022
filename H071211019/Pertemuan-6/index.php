<?php

include("conn.php");

if (!$koneksi) {
    die("Koneksi ke database gagal");
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

if($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "DELETE FROM mahasiswa WHERE id = '$id'";
    // $q1 = mysqli_query($koneksi, $sql1);
    $q1 = connect($sql1);
    if($q1) {
        $sukses = "Berhasil menghapus data";
    } else {
        $error = "Gagal menghapus data";
    }
}

if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "SELECT * FROM mahasiswa WHERE id = $id";
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

if (isset($_POST['simpan'])) {
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $fakultas   = $_POST['fakultas'];

    if ($nim && $nama && $alamat && $fakultas) {
        if ($op == 'edit') {
            $sql1   = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', fakultas = '$fakultas' WHERE id = '$id'";
            $q1     = mysqli_query($koneksi, $sql1);

            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error = "Data gagal diupdate";
            }
        } else {
            $sql1   = "INSERT INTO mahasiswa(nim, nama, alamat, fakultas) VALUES('$nim', '$nama', '$alamat', '$fakultas')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Berhasil menambahkan data baru";
            } else {
                $error = "Gagal menambahkan data baru";
            }
        }
    } else {
        $error = "Silahkan masukkan data terlebih dahulu";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="mx-auto">
        <!-- Input Data -->
        <div class="card mt-5">
            <div class="card-header bg-secondary text-light">
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
                    header(
                        "refresh:5; url = index.php"
                    );
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header(
                        "refresh:5; url = index.php"
                    );
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
                            <select class="form-control" name="fakultas" id="fakultas">
                                <option value="">-- Pilih Fakultas --</option>
                                <option value="FMIPA" <?php if ($fakultas == "FMIPA") echo "Selected" ?>>Matematika dan Ilmu Pengetahuan Alam</option>
                                <option value="FH" <?php if ($fakultas == "FH") echo "Selected" ?>>Hukum</option>
                                <option value="FK" <?php if ($fakultas == "FK") echo "Selected" ?>>Kedokteran</option>
                                <option value="FKG" <?php if ($fakultas == "FKG") echo "Selected" ?>>Kedokteran Gigi</option>
                                <option value="FEB" <?php if ($fakultas == "FEB") echo "Selected" ?>>Ekonomi dan Bisnis</option>
                                <option value="FT" <?php if ($fakultas == "FT") echo "Selected" ?>>Teknik</option>
                                <option value="FISIP" <?php if ($fakultas == "FISIP") echo "Selected" ?>>Ilmu Sosial dan Politik</option>
                                <option value="FIB" <?php if ($fakultas == "FIB") echo "Selected" ?>>Ilmu Budaya</option>
                                <option value="FAPET" <?php if ($fakultas == "FAPET") echo "Selected" ?>>Peternakan</option>
                                <option value="FAPERTA" <?php if ($fakultas == "FAPERTA") echo "Selected" ?>>Pertanian</option>
                                <option value="FKM" <?php if ($fakultas == "FKM") echo "Selected" ?>>Kesehatan Masyarakat</option>
                                <option value="FIKP" <?php if ($fakultas == "FIKP") echo "Selected" ?>>Ilmu Kelautan dan Perikanan</option>
                                <option value="FAHUTAN" <?php if ($fakultas == "FAHUTAN") echo "Selected" ?>>Kehutanan</option>
                                <option value="FF" <?php if ($fakultas == "FF") echo "Selected" ?>>Farmasi</option>
                                <option value="FKEP" <?php if ($fakultas == "FKEP") echo "Selected" ?>>Keperawatan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <!-- Menampilkan Data -->
        <div class="card mt-4">
            <div class="card-header bg-secondary text-light">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2 = "SELECT * FROM mahasiswa ORDER BY id DESC";
                        $q2 = mysqli_query($koneksi, $sql2);
                        $urut = 1;
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
                                <td scope="" row>
                                    <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button></a>
                                    <a href="index.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin ingin menghapus data?')"><button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>