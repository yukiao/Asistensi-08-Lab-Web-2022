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
 
<div class="col mt-4">
    <center>
       <div class="card border-primary mb-5">
        <div class="card-header bg-primary text-white">Artikel Terpopuler</div>
            <div class="card-body">
                 <div class="row mt-4 ">
                    @foreach ($count_view as $row)
                        <div class="col-sm mb-4">
                            <div class="card shadow-sm h-100">
                                <a href="/{{$row->slug}}"><img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">{{$row->judul}}</h5>
                                    <p class="card-text"><small class="text-muted">{{$row->created_at}}</small></p>                          
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
       <div class="card border-primary mb-5">
        <div class="card-header bg-primary text-white">Kategori Terbanyak</div>
            <div class="card-body">
                @foreach ($count_category as $item)
                {{-- <span class="badge rounded-pill text-bg-primary">{{$item->name}}</span> --}}
                    {{-- <a href="/artikel-kategori/{{$item->slug}}" tabindex="-1" class="btn btn-primary disabled placeholder col-4 mb-3" aria-hidden="true">{{$item->name}}</a> --}}
                {{-- <a href="/artikel-kategori/{{$item->slug}}" class="btn btn-primary" role="button" data-bs-toggle="button">{{$item->name}}</a> --}}
                <a class="btn btn-primary" href="/artikel-kategori/{{$item->slug}}" role="button">{{$item->name}}</a>    
                @endforeach
                
            </div>
        </div>
       <div class="card border-primary mb-5">
        <div class="card-header bg-primary text-white">Member Teraktif</div>
            <div class="card-body">
                @foreach ($count_post as $item)
                    <a class="btn btn-primary" href="/artikel-author/{{$item->id}}" role="button">{{$item->name}}</a>               
                 @endforeach
                
            </div>
        </div>
    </center>
        
        
 </div>
     
@endsection
