<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <a class="navbar-brand  text-white">MYBLOG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon-"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @yield('artikel_list') text-white" aria-current="page" href="/artikel">Artikel List</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  @yield('kategori') text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($kategori as $row)
                 <a class="dropdown-item" href="/artikel-kategori/{{$row->slug}}">{{$row->name}}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  @yield('author')  text-white" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Author
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach ($author as $row)
                  <a class="dropdown-item" href="/artikel-author/{{$row->id}}">{{$row->name}}</a>
              @endforeach
          </div>
        </li>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item active">
          <a class="nav-link @yield('home')  text-white" href="/">Home</a>
        </li>
        @auth
        @role('admin|member')
            <li class="nav-item active">
              <a class="nav-link  text-white" href="/dashboard">Dashboard</a>
            </li> 
        @else
            <li class="nav-item">
              <a class="nav-link  text-white" data-toggle="modal" data-target="#logoutModal" href="#">Logout</a>
            </li>
        @endrole
                  
        @else
            <li class="nav-item active">
              <a class="nav-link  text-white" href="/login">Login</a>
            </li>

             <li class="nav-item active">
              <a class="nav-link  text-white" href="/register">Register</a>
            </li>
        @endauth
        
      </ul>
    </div>
  </div>
</nav>