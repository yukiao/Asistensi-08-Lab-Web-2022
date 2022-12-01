@extends('layouts.main');

@section('title', 'Edit Product')

@section('container')

<div class="mx-auto">
  <!-- @if (session('status'))
      <h6 class="alert alert-success">{{ session('status') }}</h6>
      @endif -->
  <div class="card">
    <div class="card-header text-white" style="background :#3f3f3f;;">
      Edit Product
    </div>
    <div class="card-body">
      <form action="/product/update/{{$singleData->id}}" method="POST">
        @csrf
        <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{$singleData->name}}" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="gender" class="col-sm-2 col-form-label">Category</label>
          <div class="col-sm-10">
            <select class="form-select" name="category_id" id="category_id">
              <option selected disabled>- Pilih Category -</option>
              @foreach($Ctr as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="address" class="col-sm-2 col-form-label">Seller</label>
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
          <label for="no_hp" class="col-sm-2 col-form-label">Price</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="price" name="price" value="{{$singleData->price}}" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="status" class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="status" name="status" value="{{$singleData->status}}" required>
          </div>
        </div>
        <div class="col-3" style="float:right">
          <input type="submit" name="simpan" value="Simpan Data" class="btn" style="color : white; background : #686D76; border-radius: 15px;" />
        </div>
    </div>
  </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>


</html>