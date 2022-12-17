<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- <h1 class="text-center mb-5 mt-4">Data Mahasiswa</h1> -->

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Data Mahasiswa</span>
        </div>
    </nav>

    <div class="container mt-5">

        <a href="/tambahmahasiswa" type="button" class="btn mb-4 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #556B2F;">
            + Tambah data
        </a>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nim</label>
                                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Fakultas</label>
                                <select class="form-select" name="fakultas" aria-label="Default select example">
                                    <option value="">- Pilih Fakultas -</option>
                                    <option value="Fakultas Matematika dan Ilmu Pengetahuan Alam">Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
                                    <option value="Fakultas Ilmu Sosial dan Ilmu Politik">Fakultas Ilmu Sosial dan Ilmu Politik</option>
                                    <option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option>
                                    <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
                                    <option value="Fakultas Hukum">Fakultas Hukum</option>
                                    <option value="Fakultas Farmasi">Fakultas Farmasi</option>
                                    <option value="Fakultas Kedokteran Gigi">Fakultas Kedokteran Gigi</option>
                                    <option value="Fakultas Kehutanan">Fakultas Kehutanan</option>
                                    <option value="Fakultas Peternakan">Fakultas Peternakan</option>
                                    <option value="Fakultas Teknik">Fakultas Teknik</option>
                                    <option value="Fakultas Ilmu Kelautan dan Perikanan">Fakultas Ilmu Kelautan dan Perikanan</option>
                                    <option value="Fakultas Kesehatan Masyarakat">Fakultas Kesehatan Masyarakat</option>
                                    <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
                                    <option value="Fakultas Keperawatan">Fakultas Keperawatan</option>
                                    <option value="Fakultas Pertanian">Fakultas Pertanian</option>
                                    <option value="Pascasarjana">Pascasarjana</option>
                                </select>
                            </div>
                            <button type="submit" class="btn text-white" style="background-color: #556B2F;">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif
            <table class="table table-striped" style="background-color: #F0FFF0;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $no =1;
                    @endphp

                    @foreach ($data as $index => $row)
                    <tr>
                        <th scope="row"> {{ $index + $data->firstItem() }} </th>
                        <td> {{ $row->nim }} </td>
                        <td> {{ $row->nama }} </td>
                        <td> {{ $row->alamat }} </td>
                        <td> {{ $row->fakultas }} </td>
                        <td>

                            <button class="btn" style="background-color: #BDB76B;" data-bs-toggle="modal" data-bs-target="#edit{{ $row->id }}">
                                Edit
                            </button>

                            <button class="btn text-white" style="background-color: #8B008B;" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form action="/updatedata/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nim</label>
                                            <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $row->nim }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $row->nama }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $row->alamat }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Fakultas</label>
                                            <select class="form-select" name="fakultas" aria-label="Default select example">
                                                <option selected>{{ $row->fakultas }}</option>
                                                <option value="Fakultas Matematika dan Ilmu Pengetahuan Alam">Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
                                                <option value="Fakultas Ilmu Sosial dan Ilmu Politik">Fakultas Ilmu Sosial dan Ilmu Politik</option>
                                                <option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option>
                                                <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
                                                <option value="Fakultas Hukum">Fakultas Hukum</option>
                                                <option value="Fakultas Farmasi">Fakultas Farmasi</option>
                                                <option value="Fakultas Kedokteran Gigi">Fakultas Kedokteran Gigi</option>
                                                <option value="Fakultas Kehutanan">Fakultas Kehutanan</option>
                                                <option value="Fakultas Peternakan">Fakultas Peternakan</option>
                                                <option value="Fakultas Teknik">Fakultas Teknik</option>
                                                <option value="Fakultas Ilmu Kelautan dan Perikanan">Fakultas Ilmu Kelautan dan Perikanan</option>
                                                <option value="Fakultas Kesehatan Masyarakat">Fakultas Kesehatan Masyarakat</option>
                                                <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
                                                <option value="Fakultas Keperawatan">Fakultas Keperawatan</option>
                                                <option value="Fakultas Pertanian">Fakultas Pertanian</option>
                                                <option value="Pascasarjana">Pascasarjana</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn text-black" style="background-color: #BDB76B;">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="delete{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <p>Yakin ingin menghapus data?</p>

                                    @csrf

                                    <a href="/delete/{{ $row->id }} " type="button" class="btn text-white" style="background-color: #8B008B;" data-id=" $row->id  }}">Ya</a>
                                    <button type="button" class="btn text-white" style="background-color: #8B008B;" data-bs-dismiss="modal" style="background-color: #BDB76B;">Tidak</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </tbody>
            </table>

            {!! $data->render() !!}

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>