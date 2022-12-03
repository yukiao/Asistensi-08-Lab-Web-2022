@extends('layouts.main');
@section('title', 'Seller Permission')
<!-- Button Tambah Data -->

@section('container')
<button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background : #191919">
  Tambah Seller Permission
</button>

<!-- Modal tambah data-->
<div class=" modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">New Seller Permission</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/sellerPermission/add" method="POST">
          @csrf
          <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Seller</label>
            <div class="col-sm-10">
              <select class="form-select" name="seller_id" id="seller_id">
                <option selected disabled>- Pilih Seller -</option>
                @foreach($Slr as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="address" class="col-sm-2 col-form-label">Permission</label>
            <div class="col-sm-10">
              <select class="form-select" name="permission_id" id="permission_id">
                <option selected disabled>- Pilih Permission -</option>
                @foreach($Perm as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="simpan" value="Simpan Data" class="btn add" style="color : white; background : #686D76; border-radius: 15px;" />
      </div>
    </div>
  </div>
</div>
<!-- End Modal Tambah -->


<div class="card">
  <div class="card-header text-white" style="background :#3f3f3f;">
    DATA SELLER PERMISSION
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Seller</th>
          <th scope="col">Permission</th>
          <th scope="col">Created at</th>
          <th scope="col">Updated at</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($slrPerm as $item)
        <tr>
          <td scope="row">{{$loop->iteration}}</td>
          <td scope="row">{{$item->seller->name}}</td>
          <td scope="row">{{$item->permission->name}}</td>
          <td scope="row">{{$item->created_at}}</td>
          <td scope="row">{{$item->updated_at}}</td>
          <td scope="row">

            <a href="/sellerPermission/edit/{{$item->id}}"><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$item->id}}" style="color : white; background : #a9a9a9; border-radius: 15px; margin-bottom:5px ">Edit</button></a>
            <a href="/sellerPermission/delete/{{$item->id}}"><button type="button" class="btn" style="color : white; background :  #686868; border-radius: 15px; margin-bottom:5px">Delete</button></a>
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

@endsection




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>


</html>