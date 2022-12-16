@extends('artikel/template/app')

@isset($tag_dipilih)
     @section('title')
        Tag : {{$tag_dipilih->name}}
    @endsection
@endisset

@isset($kategori_dipilih)
    @section('title')
        Kategori : {{$kategori_dipilih->name}}
    @endsection
    @section('kategori', 'active')
@endisset

@isset($author_dipilih)
    @section('title')
        Author : {{$author_dipilih->name}}
    @endsection
    @section('author', 'active')
@endisset

@isset($artikel_list)
    @section('title', 'Semua Artikel')
    @section('artikel_list', 'active')
@endisset

@isset($home)
    @section('title', 'Homepage')
    @section('home', 'active')
@endisset

    
@section('content')
<h2 class="my-4 text-center">@yield('title')</h2>
 <div class="row mt-4 ">
    @foreach ($artikel as $row)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <a href="/{{$row->slug}}"><img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">{{$row->judul}}</h5>
                    <p class="card-text"><small class="text-muted">{{$row->created_at->diffForHumans()}}</small></p>                          
                </div>
            </div>
        </div>
    @endforeach
 </div>
     <div class="pagination justify-content-center">
          {{ $artikel->links() }}
          </div>
@endsection
