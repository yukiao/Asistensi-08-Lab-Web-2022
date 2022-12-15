
<!DOCTYPE html>
<html lang="en">

@include('sb-admin/head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       @include('sb-admin/sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               @include('sb-admin/topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('sb-admin/footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
      @include('sb-admin/button-topbar')
    <!-- Scroll to Top Button-->
   

    <!-- Logout Modal-->
    @include('sb-admin/logout-modal')

   {{-- javascript --}}
   @include('sb-admin/javascript')

   {{-- ck-editor --}}
    @yield('ck-editor')

    {{-- sweet alert --}}
  @include('sweetalert::alert')

  

</body>

</html>