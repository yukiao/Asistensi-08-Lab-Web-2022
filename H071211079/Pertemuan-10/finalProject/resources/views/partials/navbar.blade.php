<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ffff;">
  <div class="container">
    <a class="navbar-brand" style="color: #800080;" href="/"><b>My Blog</b></a>
    <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link text-dark {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
      <li class="nav-item">
          <a class="nav-link text-dark {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark {{ ($active === "categories") ? 'active' : ''  }}" href="/categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>
      
      <ul class="navbar-nav ms-auto">
        @auth 
  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> 
            My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              
            <form action="/logout" method="post">

            @csrf
            <button type="submit" class="dropdown-item text-dark"><i class="bi bi-box-arrow-right"></i>
            Logout</button>

            </form>

          </ul>
        </li>

        @else
        <li class="nav-item">
            <a href="/login" class="nav-link text-dark {{ ($title === "Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>
            Login</a>
        </li>
      </ul>

      @endauth

     
    </div>
  </div>
</nav>