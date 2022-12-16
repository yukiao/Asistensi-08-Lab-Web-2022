<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test | {{ $title }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
  <link rel="stylesheet" href="/css/login.css">
</head>

<body>

  <div class="login-card-container">
    @if(session()->has('light'))

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{ session('light') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

    @if(session()->has('loginError'))

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif
    <div class="login-card">
      <div class="login-card-header">
        <h1>Sign In</h1>
        <div>Please login to use the platform</div>
      </div>

      <form class="login-card-form" action="/login" method="post">
        @csrf
        <div class="form-item">
          <span class="form-item-icon material-symbols-rounded">mail</span>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" id="email" value="{{ old ('email') }}" autofocus required>

          @error('email')

          <div class="invalid-feedback">

            {{ $message }}

          </div>

          @enderror
        </div>

        <div class="form-item">
          <span class="form-item-icon material-symbols-rounded">lock</span>
          <input type="password" name="password" for="password" class="form-control @error ('password') is-invalid @enderror" placeholder="Enter Password" id="password" required>
        </div>


        <button class="mt-3 d-block text-center" type="submit"> Login </button>

      </form>

      <div class="login-card-footer">
        Don't have an account? <a href="/register">Create a free account.</a>
      </div>




    </div>

  </div>

  </div>

  </div>

</body>