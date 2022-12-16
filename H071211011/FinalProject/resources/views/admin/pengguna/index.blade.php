@extends('sb-admin/app')
@section('title', 'Pengguna')
@section('pengguna', 'active')
@section('menu', 'show')
@section('menu-active', 'active')


@section('content')
    {{-- flashdata --}}
    {!!session('success')!!}
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">User</h1>
      <a href="/pengguna/create" class="btn btn-primary btn-sm">User <i class="fas fa-plus"></i></a>

      @if ($pengguna[0])
          {{-- Table --}}
          <table class="table mt-4 table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pengguna as $row)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td width="25%">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/pengguna/{{$row->id}}/edit" class="btn btn-primary btn-sm mr-1">Edit <i class="fas fa-edit"></i></a>
                        <a href="/pengguna/{{$row->id}}/konfirmasi" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash"></i> Hapus</a>
                      </div>
                    </td>
                  </tr>  
                @endforeach
            </tbody>
          </table>
          <div class="pagination justify-content-center">
          {{ $pengguna->links() }}
          </div>
          
      @else
            @if (session('search'))
               {!! session('search') !!}
            @else
              <div class="alert alert-info mt-4" role="alert">
                  Anda belum mempunyai data
              </div>
            @endif
      @endif
@endsection

@section('search-url', '/pengguna/search')

@section('search')
      @include('sb-admin/search')
@endsection

@section('search-responsive')
    @include('sb-admin/search-responsive')
@endsection

@section('javascript')
   @include('admin/navbar-mobile')
@endsection