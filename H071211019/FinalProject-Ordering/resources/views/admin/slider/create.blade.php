@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Add Slider
                        <a href="{{ url('admin/sliders/') }}" class="btn btn-primary btn-sm text-light float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/sliders/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Status</label><br>
                            <input type="checkbox" name="status" /> Checked = Hidden, Unchecked = Visible
                        </div>
                        <div>
                            <button class="btn btn-primary text-light">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection