@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Colors List
                        <a href="{{ url('admin/colors/create') }}" class="btn btn-primary btn-sm text-light float-end">Add Color</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Color Name</td>
                                <td>Color Code</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($colors as $color)
                            <tr>
                                <td>{{ $color->id }}</td>
                                <td>{{ $color->name }}</td>
                                <td>{{ $color->code }}</td>
                                <td>{{ $color->status ? 'Hidden':'Visible' }}</td>
                                <td>
                                    <a href="{{ url('admin/colors/'.$color->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ url('admin/colors/'.$color->id.'/delete') }}" onclick="return confirm('Are you sure, you want to delete this data?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection