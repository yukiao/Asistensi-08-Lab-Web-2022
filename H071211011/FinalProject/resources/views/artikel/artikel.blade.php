@extends('artikel/template/app')

@section('title', 'Artikel')
    
@section('content')
    <div class="card mt-4 shadow-sm">
      <img src="/upload/post/{{$artikel->sampul}}" height="500px" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">{{$artikel->judul}}</h3>
        <small class="card-text">
          @foreach ($count_view as $item)
              <span class="text-muted">Views: {{$item->views}}</span>
          @endforeach
          <br>
          <span class="text-muted"><a href="/artikel-kategori/{{$artikel->category->slug}}">{{$artikel->category->name}}</a></span>
          -
          <span class="text-muted">{{$artikel->created_at->diffForHumans()}}</span>
          -
          <span class="text-muted">Tag: </span>
          @foreach ($artikel->tag as $row)
              @if ($loop->last)
                   <span class="text-muted"><a href="/artikel-tag/{{$row->slug}}">{{$row->name}}</a></span>
              @else
                  <span class="text-muted"><a href="/artikel-tag/{{$row->slug}}">{{$row->name}},</a></span>
              @endif
          @endforeach
        </small>
        <br>
            <small>Author : <span class="text-muted"><a href="/artikel-author/{{$artikel->user->id}}">{{$artikel->user->name}}</a></span></small>
        <hr>
        
        <p class="card-text">{!!$artikel->konten!!}</p>

        @role('member|admin')
         <a href="/like/{{$artikel->id}}" class="text-danger"><i class="fas fa-heart"></i></i> {{$like}} Like</a>
        @endrole
        
      </div>
    </div>
  

   @role('member|admin')
				<!-- Add Comment -->
				<div class="card my-5">
					<h5 class="card-header">Add Comment</h5>
					<div class="card-body">
						<form method="POST" action="{{url('save-comment/'.Str::slug($artikel->judul))}}">
						@csrf
						<textarea name="comment" class="form-control"></textarea>
						<input type="submit" class="btn btn-dark mt-2" />
					</div>
				</div>
				@endrole
				<!-- Fetch Comments -->
				<div class="card my-4">
					<h5 class="card-header">Comments <span class="badge badge-dark">{{count($artikel->comments)}}</span></h5>
					<div class="card-body">
						@if($artikel->comments)
							@foreach($artikel->comments as $comment)
								<blockquote class="blockquote">
								  <p class="mb-0">{{$comment->comment}}</p>
								</blockquote>
								<hr/>
							@endforeach
						@endif
					</div>
				</div>
			</div>
    
@endsection