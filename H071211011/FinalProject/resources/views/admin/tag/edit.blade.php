@extends('sb-admin/app')
@section('title', 'Tag')
@section('tag', 'active')
@section('menu', 'show')
@section('menu-active', 'active')

@section('content')
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Tag</h1>
      
    <form action="/tag/{{$tag->id}}" method="POST" >
      @csrf
      @method('PATCH')
    <div class="mb-3">
         <label for="name" class="form-label">Tag</label>
          <input type="text" class="form-control" id="name" name="name" value="{{old('name') ? old('name') : $tag->name}}">
          @error('name')
          <small class="text-danger">{{ $message }}</small>
          @enderror
    </div>
    <div class="form-group">
                <label for="editor">Description</label>
                <textarea class="form-control" id="editor" rows="10" name="description" >{{old('description') ? old('description') : $tag->description}}</textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
     </div>
  
    <button type="submit" class="btn btn-primary btn-sm">Edit</button>
  <a href="/tag" class="btn btn-secondary btn-sm" >Back</a>  
  </form>
@endsection

  @section('ck-editor')
     <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>

     <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

 @endsection