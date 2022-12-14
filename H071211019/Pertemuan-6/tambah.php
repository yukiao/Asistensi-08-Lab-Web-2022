<?php
require 'functions.php';

// Cek tombol submit
if (isset($_POST['submit'])) {
    
    // Alert sukses/gagal tambah data 
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <h1 class="mt-5 mb-5 text-center">Tambah Data Mahasiswa</h1>
    <div class="card mt-2 m-5">
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3 row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="fakultas" id="fakultas">
                            <option value="">-- Pilih Fakultas --</option>
                            <option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
                            <option value="Hukum">Hukum</option>
                            <option value="Kedokteran">Kedokteran</option>
                            <option value="Kedokteran Gigi">Kedokteran Gigi</option>
                            <option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
                            <option value="Teknik">Teknik</option>
                            <option value="Ilmu Sosial dan Politik">Ilmu Sosial dan Politik</option>
                            <option value="Ilmu Budaya">Ilmu Budaya</option>
                            <option value="Peternakan">Peternakan</option>
                            <option value="Pertanian">Pertanian</option>
                            <option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
                            <option value="Ilmu Kelautan dan Perikanan">Ilmu Kelautan dan Perikanan</option>
                            <option value="Kehutanan">Kehutanan</option>
                            <option value="Farmasi">Farmasi</option>
                            <option value="Keperawatan">Keperawatan</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button class="btn btn-primary mt-5" type="submit" name="submit">Tambah data</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>