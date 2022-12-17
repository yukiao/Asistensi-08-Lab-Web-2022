@extends('sb-admin/app')
@section('title', 'penulis')
@section('penulis', 'active')
@section('user', 'show')
@section('user-active', 'active')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Writer</h1>

    <a href="/penulis/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add Writer</a>

   @if ($penulis[0])
        {{-- table --}}
        <table class="table mt-4 table-hover table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penulis as $row)
                    <tr>
                    <th scope="row" width="15%">{{$loop->iteration}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td width="15%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/penulis/{{$row->id}}/konfirmasi" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash"></i> Delete</a>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{$penulis->links()}}
   @else
       @if (session('search'))
             {!! session('search') !!}
       @else
            <div class="alert alert-info mt-4" role="alert">
            There is no data yet
            </div>
       @endif
   @endif
@endsection

@section('search-url', '/penulis/search')

@section('search')
    @include('sb-admin/search')
@endsection

@section('search-responsive')
    @include('sb-admin/search-responsive')
@endsection

@section('javascript')
   @include('admin/navbar-mobile')
@endsection