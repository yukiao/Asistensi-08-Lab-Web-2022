<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "administrasi_mahasiswa";
$port       = "8111";

$koneksi    = mysqli_connect($host, $user, $pass, $db, $port);
if (!$koneksi) {
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
if ($op == 'delete') {
    $id         = $_GET['id'];
    $sql2       = "select nim from mahasiswa where id = '$id'";
    $q2         = mysqli_query($koneksi, $sql2);
    $r2         = mysqli_fetch_array($q2);
    $sql1       = "delete from mahasiswa where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses     = "Berhasil menghapus data " . $r2['nim'];
    } else {
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
            $sql2       = "select nim from mahasiswa where id = '$id'";
            $q2         = mysqli_query($koneksi, $sql2);
            $r2         = mysqli_fetch_array($q2);
            $sql1       = "update mahasiswa set nim = '$nim',nama='$nama',alamat = '$alamat',fakultas='$fakultas' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Berhasil mengupdate data " . $r2['nim'];
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $result = mysqli_query($koneksi, "select * from mahasiswa where nim = '$nim'");
            $num_rows = mysqli_num_rows($result);
            if ($num_rows) {
                $error = "data duplikat";
            } else {
                $sql1   = "insert into mahasiswa(nim,nama,alamat,fakultas) values ('$nim','$nama','$alamat','$fakultas')";
                $q1     = mysqli_query($koneksi, $sql1);

                if ($q1) {
                    $sukses     = "Berhasil memasukkan data ";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header text-white" style="background : #472360">
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
                                <option value="">- Pilih Fakultas -</option>
                                <option value="Ekonomi dan Bisnis" <?php if ($fakultas == "Ekonomi dan Bisnis") echo "selected" ?>>Ekonomi dan Bisnis</option>
                                <option value="Hukum" <?php if ($fakultas == "Hukum") echo "selected" ?>>Hukum</option>
                                <option value="Kedokteran" <?php if ($fakultas == "Kedokteran") echo "selected" ?>>Kedokteran</option>
                                <option value="Teknik" <?php if ($fakultas == "Teknik") echo "selected" ?>>Teknik</option>
                                <option value="Ilmu Sosial dan Ilmu Politik" <?php if ($fakultas == "Ilmu Sosial dan Ilmu Politik") echo "selected" ?>>Ilmu Sosial dan Ilmu Politik</option>
                                <option value="Ilmu Budaya" <?php if ($fakultas == "Ilmu Budaya") echo "selected" ?>>Ilmu Budaya</option>
                                <option value="Pertanian" <?php if ($fakultas == "Pertanian") echo "selected" ?>>Pertanian</option>
                                <option value="Matematika dan Ilmu Pengetahuan Alam" <?php if ($fakultas == "Matematika dan Ilmu Pengetahuan Alam") echo "selected" ?>>Matematika dan Ilmu Pengetahuan Alam</option>
                                <option value="Peternakan" <?php if ($fakultas == "Peternakan") echo "selected" ?>>Peternakan</option>
                                <option value="Kedokteran Gigi" <?php if ($fakultas == "Kedokteran Gigi") echo "selected" ?>>Kedokteran Gigi</option>
                                <option value="Kesehatan Masyarakat" <?php if ($fakultas == "Kesehatan Masyarakat") echo "selected" ?>>Kesehatan Masyarakat</option>
                                <option value="Ilmu Kelautan dan Perikanan" <?php if ($fakultas == "Ilmu Kelautan dan Perikanan") echo "selected" ?>>Ilmu Kelautan dan Perikanan</option>
                                <option value="Kehutanan" <?php if ($fakultas == "Kehutanan") echo "selected" ?>>Kehutanan</option>
                                <option value="Farmasi" <?php if ($fakultas == "Farmasi") echo "selected" ?>>Farmasi</option>
                                <option value="Keperawatan" <?php if ($fakultas == "Keperawatan") echo "selected" ?>>Keperawatan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3" style="float:right">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn" style="color : white; background : #B270A2; border-radius: 15px;" />
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white" style="background : #472360">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
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
                        $sql2   = "select * from mahasiswa order by id desc";
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
                                    <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn" style="color : white; background : #b67dbd; border-radius: 15px;">Edit</button></a>
                                    <a href="index.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn" style="color : white; background : #8c6bbd; border-radius: 15px;">Delete</button></a>
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