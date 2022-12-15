@extends('sb-admin/app')
@section('title', 'User')
@section('pengguna', 'active')
@section('menu', 'show')
@section('menu-active', 'active')

@section('content')
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">User</h1>
      
    <form action="/pengguna" method="POST" enctype="multipart/form-data" >
      @csrf
        <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
        </div>
        <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
           
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{old('password')}}">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
  
            <button type="submit" class="btn btn-primary btn-sm">Add</button>
            <a href="/pengguna" class="btn btn-secondary btn-sm" >Back</a>  
    </form>
 @endsection

