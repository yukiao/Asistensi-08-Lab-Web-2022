<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        label{
            display:inline-block;
            width:200px;
        }

        .div_design{
            padding-bottom:15px;
        }
    </style>
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
            <div class="text-center">
                <h1 class="fs-2">Add Product</h1>
              
                <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                <nav class="div_design">
                <label>Product Title :</label>
                <input class="text-dark" type="text" name='title' placeholder="write title" required>
                </nav>
                
                <nav class="div_design">
                <label>Product Description :</label>
                <input class="text-dark" type="text" name='description' placeholder="write description" required>
                </nav>

                <div class="div_design">
                <label>Product Price :</label>
                <input class="text-dark" type="number" name='price' placeholder="write price" required>
                </div>

                <div class="div_design">
                <label>Discount Price :</label>
                <input class="text-dark" type="number" name='discount' placeholder="write discount">
                </div>

                <div class="div_design">
                <label>Product Quantity :</label>
                <input class="text-dark" type="number" min="0" name='quantity' placeholder="write quantity" required>
                </div>
                           
                <div class="div_design">
                <label>Product Category :</label>
                <select class="text-black" name="category" required>
                    <option>Add category here</option>
                    @foreach ($category as $category)
                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                    @endforeach

                </select>
                </div>

                <div class="div_design">
                <label>Product Image :</label>
                <input type="file" name="image" required>
                </div>

                <div class="div_design">
                    <input type="submit" value="add product" class="btn btn-primary">
                </div>

            </form>
            
            </div>
            </div>
        </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>