<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
                <h1 class="fs-2">Update Product</h1>
              
                <form action="{{ url('/update_product_confirm',$product->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                <nav class="div_design">
                <label>Product Title :</label>
                <input class="text-dark" type="text" name='title' placeholder="write title" value="{{ $product->title }}" required>
                </nav>
                
                <nav class="div_design">
                <label>Product Description :</label>
                <input class="text-dark" type="text" name='description' placeholder="write description" value="{{ $product->description }}" required>
                </nav>

                <div class="div_design">
                <label>Product Price :</label>
                <input class="text-dark" type="number" name='price' placeholder="write price" value="{{ $product->price }}" required>
                </div>

                <div class="div_design">
                <label>Discount Price :</label>
                <input class="text-dark" type="number" name='discount' placeholder="write discount" value="{{ $product->discount_price }}">
                </div>

                <div class="div_design">
                <label>Product Quantity :</label>
                <input class="text-dark" type="number" min="0" name='quantity' placeholder="write quantity" value="{{ $product->quantity }}" required>
                </div>
                           
                <div class="div_design">
                <label>Product Category :</label>
                <select class="text-black" name="category" required>
                    <option value="{{ $product->category }}">{{ $product->category }}</option>

                    @foreach ($category as $category)
                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                    @endforeach

                </select>
                </div>

                <div class="div_design">
                    <label>Current Product Image :</label>
                    <img style="margin:auto;" height="100" width="100" src="/product/{{ $product->image }}" >
                    </div>

                <div class="div_design">
                <label>Change Product Image :</label>
                <input type="file" name="image" >
                </div>

                <div class="div_design">
                    <input type="submit" value="update product" class="btn btn-primary">
                </div>

            </form>
            
            </div>
            </div>
        </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>