<!doctype html>
<html lang="en">
{{-- head --}}
    @include('artikel/template/head')

  <body>
    {{-- navbar --}}
    @include('artikel/template/navbar')

    <div class="container">
        @yield('content')
    </div>
   <!-- Footer -->
      @include('sb-admin/footer')
      
    {{--  Logout Modal  --}}
    @include('sb-admin/logout-modal')

    {{--  Javascript  --}}
    @include('sb-admin/javascript')

    
  </body>
  
</html>