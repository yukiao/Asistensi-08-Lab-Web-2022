@extends('sb-admin/app')
@section('title', 'Category')
@section('category', 'active')
@section('menu', 'show')
@section('menu-active', 'active')

@section('content')
    {{-- flashdata --}}
    {!!session('success')!!}
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Category</h1>
      <a href="/category/create" class="btn btn-primary btn-sm">Add Category <i class="fas fa-plus"></i></a>
    
      @if ($category[0])
      {{-- Table --}}
      <table class="table mt-3 table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Article count</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($category as $row)
              <tr>
                <td>{{$row->name}}</td>
                <td>@foreach ($count_artikel as $item)
                  @if ($item->id==$row->id)
                       {{$item->total_artikel}}
                  @endif
                   
                @endforeach</td>
                <td>{{$row->created_at}}</td>
                <td width="20%">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/category/{{$row->id}}/edit" class="btn btn-primary btn-sm mr-1">Edit <i class="fas fa-edit"></i></a>
                    <a href="/category/{{$row->id}}/konfirmasi" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash"></i> Hapus</a>
                  </div>
                </td>
              </tr>  
            @endforeach
        </tbody>
      </table>
      <div class="pagination justify-content-center">
      {{ $category->links() }}
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

@section('search-url', '/category/search')

@section('search')
      @include('sb-admin/search')
@endsection

@section('search-responsive')
    @include('sb-admin/search-responsive')
@endsection

@section('javascript')
   @include('admin/navbar-mobile')
@endsection