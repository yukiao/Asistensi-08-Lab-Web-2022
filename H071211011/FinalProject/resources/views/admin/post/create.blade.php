@extends('sb-admin/app')
@section('title', 'Post')
@section('post', 'active')
@section('menu', 'show')
@section('menu-active', 'active')

@section('content')
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Post</h1>
      
    <form action="/post" method="POST" enctype="multipart/form-data" >
      @csrf
        <div class="form-group">
                <label for="judul">Title</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}">
                @error('judul')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="sampul">Banner</label>
                <input type="file" class="form-control" id="sampul" name="sampul">
                @error('sampul')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control" id="category" name="category" >
                  <option selected disabled>Pilih Katgeori</option>
                  @foreach ($category as $row)
                      <option value="{{$row->id}}">{{$row->name}}</option>
                  @endforeach
              </select>
              @error('category')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
                <label for="tag">Tag</label>
                <select multiple class="form-control" id="tag" name="tag[]" >
                    @foreach ($tag as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
                @error('tag')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="editor">Description</label>
                <textarea class="form-control" id="editor" rows="10" name="konten">{{old('konten')}}</textarea>
                @error('konten')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
  
            <button type="submit" class="btn btn-primary btn-sm">Add</button>
            <a href="/post" class="btn btn-secondary btn-sm" >Back</a>  
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