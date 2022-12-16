<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

      <div class="container-fluid page-body-wrapper">

        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}
                    

                </div>

                @endif
                <div class="text-center pt-4">
                    <h2 class="fs-2">Add Category</h2>

                    <form class="pt-4" action="{{ url('/add_category') }}" method="POST">
                        @csrf
                        <input type="text" class="text-dark" name="category" placeholder="Write Category Name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>
                </div>

                <table class="table table-dark table-hover text-center mt-3 " >
                  <tr>
                    <td class="fs-4">Category Name </td>
                    <td class="fs-4">Action </td>
                  </tr>

                  @foreach ($data as $data)
                      
                  <tr>
                    <td class="fs-5">{{ $data->category_name }}</td>
                    <td>
                      <a onclick="return confirm('Are You Sure To Delete This?')" class="btn btn-danger" href="{{ url('delete_category',$data->id) }}">Delete</a>
                    </td>
                  </tr>

                  @endforeach

                </table>

            </div>
        </div>    
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>