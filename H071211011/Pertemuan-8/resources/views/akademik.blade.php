<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akademik | {{$title}}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .card {
      font-size: 14px;
      margin-top: 20px;
      margin-bottom: 10px;

    }

    .container {
      width: auto;
      margin-top: 100px;
    }





    body {
      height: 100%;
      background-image: radial-gradient(#993299, #b266b2, #d8b2d8);
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
  </style>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-md" style="background : #8c6bbd">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item">LogOut</button>
                </form>
              </li>
            </ul>
          </li>

        </ul>

      </div>
    </div>
  </nav>


  <!-- Button Tambah Data -->

  <div class="container">
    <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background : #8e31aa">
      Tambah Data
    </button>

    <!-- Modal tambah data-->
    <div class=" modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">New Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/dataMhs/add" method="POST">
              @csrf
              <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nim" name="nim" value="" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" name="nama" value="" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="alamat" name="alamat" value="" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="fakultas" name="fakultas" value="" required>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" name="simpan" value="Simpan Data" class="btn add" data-id="nim" style="color : white; background : #B270A2; border-radius: 15px;" />
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal Tambah -->


    <div class="card">
      <div class="card-header text-white" style="background : #8e31aa;">
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
            @php
            $i = ($data->currentpage()-1)*$data->perpage()+1;
            @endphp
            @foreach($data as $item)
            <tr>
              <td scope="row">{{$i++}}</td>
              <td scope="row">{{$item->nim}}</td>
              <td scope="row">{{$item->nama}}</td>
              <td scope="row">{{$item->alamat}}</td>
              <td scope="row">{{$item->fakultas}}</td>
              <td scope="row">

                <a href="/dataMhs/edit/{{$item->id}}"><button type="button" class="btn" style="color : white; background : #b67dbd; border-radius: 15px; margin-bottom:5px ">Edit</button></a>
                <a href="#"><button type="button" class="btn delete" data-id="{{$item->id}}" style="color : white; background : #8c6bbd; border-radius: 15px; margin-bottom:5px">Delete</button></a>
              </td>
            </tr>

            @endforeach
          </tbody>

        </table>
      </div>
    </div>
    <div class="pagination justify-content-center">
      {{ $data->links() }}
    </div>


  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<script>
  $('.delete').click(function() {
    var idMhs = $(this).attr('data-id');
    swal({
        title: "Yakin Ingin Hapus?",
        text: "Dengan menekan tombol OK data akan dihapus",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/dataMhs/delete/" + idMhs + ""
          swal("Data Berhasil Dihapus", {
            icon: "success",
          });
        } else {
          swal("Batal Menghapus Data");
        }
      });
  });

  $('.add').click(function() {
    var mhs = $(this).attr('data-id');
    swal({
      title: "Berhasil",
      text: "Data Telah Ditambahkan",
      icon: "success",

    });
  });
</script>

</html>