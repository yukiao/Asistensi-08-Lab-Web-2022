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
      <div class="main-panel">
        <div class="content-wrapper">

          @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}
                    

                </div>

                @endif
          
          <h1 class="text-center fs-2">All Products</h1>

          <table class="table table-dark table-hover table-image table-responsive text-center mt-3">
            <tr>
              <th>Product Title</th>
              <th>Description</th>
              <th>Quantity</th>
              <th>Category</th>
              <th>Price</th>
              <th>Discount Price</th>
              <th>Product Image</th>
              <th>Delete</th>
              <th>Edit</th>
            </tr>

            @foreach($product as $product)
            <tr>
              <td>{{ $product->title }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->quantity }}</td>
              <td>{{ $product->category }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->discount_price }}</td>
              <td>

                <img src="/product/{{ $product->image }}">
              </td>
              <td>
                <a class="btn btn-danger" onclick="return confirm('are you sure want to delete this?')" href="{{ url('delete_product',$product->id) }}">Delete</a>
              </td>
              <td>
                <a class="btn btn-success" href="{{ url('update_product',$product->id) }}">Edit</a>
              </td>
            </tr>

            @endforeach

          </table>

        </div>
      </div>
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>