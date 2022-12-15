@extends('sb-admin/app')
@section('title', 'Dashboard')
@section('dashboard', 'active')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <!-- Content Row -->
    <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-primary shadow h-100 py-2">
               <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Post</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_post}}</div>
                    </div>
                    <div class="col-auto">
                         <i class="fas fa-file fa-2x text-gray-300"></i>
                    </div>
                    </div>
               </div>
               </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-success shadow h-100 py-2">
               <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Kategori</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_kategori}}</div>
                    </div>
                    <div class="col-auto">
                         <i class="fas fa-tag fa-2x text-gray-300"></i>
                    </div>
                    </div>
               </div>
               </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-info shadow h-100 py-2">
               <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Tag</div>
                         <div class="row no-gutters align-items-center">
                         <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$jumlah_tag}}</div>
                         </div>
                         </div>
                    </div>
                    <div class="col-auto">
                         <i class="fas fa-hashtag fa-2x text-gray-300"></i>
                    </div>
                    </div>
               </div>
               </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-warning shadow h-100 py-2">
               <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Member</div>
                         <div class="row no-gutters align-items-center">
                         <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$jumlah_member}}</div>
                         </div>
                         </div>
                    </div>
                    <div class="col-auto">
                         <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                    </div>
               </div>
               </div>
          </div>

     </div>

     <!-- Content Row -->

    {{-- post --}}

    <div class="card border-bottom-primary mb-5">
        <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Like Terbanyak</h6>
        </div>
        <div class="card-body">
          <div class="row mt-4 ">
                    @foreach ($count_like as $row)
                         <div class="col-md-4 mb-4">
                              <div class="card shadow-sm h-100">
                                   <a href="/{{$row->slug}}"><img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="..."></a>
                                   <div class="card-body">
                                        <h5 class="card-title">{{$row->judul}}</h5>
                                        <p class="card-text"><small class="text-muted">{{$row->created_at}}</small></p>                          
                                   </div>
                              </div>
                         </div>
                    @endforeach
           </div>
        </div>
    </div>
    <div class="card border-bottom-primary mb-5">
        <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Paling sering dibaca</h6>
        </div>
        <div class="card-body">
               <div class="row mt-4 ">
                    @foreach ($count_view as $row)
                         <div class="col-md-4 mb-4">
                              <div class="card shadow-sm h-100">
                                   <a href="/{{$row->slug}}"><img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="..."></a>
                                   <div class="card-body">
                                        <h5 class="card-title">{{$row->judul}}</h5>
                                        <p class="card-text"><small class="text-muted">{{$row->created_at}}</small></p>                          
                                   </div>
                              </div>
                         </div>
                    @endforeach
               </div>
        </div>
    </div>
    <div class="card border-bottom-primary mb-5">
        <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Komen Terbanyak</h6>
        </div>
        <div class="card-body">
               <div class="row mt-4 ">
                    @foreach ($count_comment as $row)
                         <div class="col-md-4 mb-4">
                              <div class="card shadow-sm h-100">
                                   <a href="/{{$row->slug}}"><img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="..."></a>
                                   <div class="card-body">
                                        <h5 class="card-title">{{$row->judul}}</h5>
                                        <p class="card-text"><small class="text-muted">{{$row->created_at}}</small></p>                          
                                   </div>
                              </div>
                         </div>
                    @endforeach
               </div>
        </div>
    </div>
@endsection