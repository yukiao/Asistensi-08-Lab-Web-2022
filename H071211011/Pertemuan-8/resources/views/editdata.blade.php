<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akademik | {{$title}}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .mx-auto {
      width: 900px
    }

    .card {
      font-size: 14px;
      margin-top: 20px;
      margin-bottom: 10px;

    }

    .container {
      margin-top: 100px;
    }

    body {
      height: 100%;
      /* background: rgb(226, 179, 233); 
            #993299, #b266b2,  #d8b2d8*/
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

              <!-- <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li> -->
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




  <div class="container">

    <div class="mx-auto">
      @if (session('status'))
      <h6 class="alert alert-success">{{ session('status') }}</h6>
      @endif
      <div class="card">
        <div class="card-header text-white" style="background :#8e31aa;">
          Edit Data
        </div>
        <div class="card-body">

          <form action="/dataMhs/update/{{$singleData->id}}" method="POST">
            @csrf
            <div class="mb-3 row">
              <label for="nim" class="col-sm-2 col-form-label">NIM</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nim" name="nim" value="{{$singleData->nim}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="{{$singleData->nama}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{$singleData->alamat}}">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="fakultas" name="fakultas" value="{{$singleData->fakultas}}">
              </div>
            </div>
            <div class="col-3" style="float:right">
              <input type="submit" name="simpan" value="Simpan Data" class="btn update" data-id="{{$singleData->id}}" style="color : white; background : #B270A2; border-radius: 15px;" />
            </div>
          </form>
        </div>
      </div>
    </div>

    

  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<script>
  $('.update').click(function() {
    var mhs = $(this).attr('data-id');
    swal({
      title: "Berhasil",
      text: "Data Telah Diupdate",
      icon: "success",

    });
  });
</script>

</html>