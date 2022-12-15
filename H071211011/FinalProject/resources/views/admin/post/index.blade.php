@extends('sb-admin/app')
@section('title', 'Post')
@section('post', 'active')
@section('menu', 'show')
@section('menu-active', 'active')


@section('content')
    {{-- flashdata --}}
    {!!session('success')!!}
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Post</h1>
      <a href="/post/create" class="btn btn-primary btn-sm">Add Post <i class="fas fa-plus"></i></a>

      @if ($post[0])
          {{-- Table --}}
          <table class="table mt-4 table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Favorite count</th>
                <th scope="col">Created Date</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($post as $row)
                  <tr>
                    <td>{{$row->judul}}</td>
                    <td>{!!Str::limit($row->konten,'20')!!}</td>
                    <td>
                      @foreach ($count_like as $item)
                       @if ($item->id==$row->id) 
                       {{$item->total_like}}
                       @endif
                      @endforeach
                    </td>
                    <td>{{$row->created_at}}</td>
                    <td>{{$artikel->user->name}}</td>
                    <td width="25%">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/post/{{$row->id}}" class="btn btn-info btn-sm mr-1">Detail <i class="fas fa-eye"></i></a>
                        <a href="/post/{{$row->id}}/edit" class="btn btn-primary btn-sm mr-1">Edit <i class="fas fa-edit"></i></a>
                        <a href="/post/{{$row->id}}/konfirmasi" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash"></i> Hapus</a>
                      </div>
                    </td>
                  </tr>  
                @endforeach
            </tbody>
          </table>
          <div class="pagination justify-content-center">
          {{ $post->links() }}
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

@section('search-url', '/post/search')

@section('search')
      @include('sb-admin/search')
@endsection

@section('search-responsive')
    @include('sb-admin/search-responsive')
@endsection

@section('javascript')
   @include('admin/navbar-mobile')
@endsection